<?php
/**
 * User: noutsasha
 * Date: 15.09.2017
 * Time: 22:08
 */

namespace app\controllers;


use app\models\Freelancers;
use app\models\Message;
use mdm\admin\models\User;
use Yii;
use yii\web\NotFoundHttpException;

class FreelancersController extends AppController
{
    public function actionIndex()
    {

        $freelancers = Freelancers::find()->all();
        return $this->render('index',[
            'freelancers' => $freelancers,
                ]
        );
    }

    public function actionView($id)
    {

        $message = new Message();
        $message->user = Yii::$app->user->identity->username;
//        Debug(Yii::$app->request->get('id'));
        $message->parent_id = Yii::$app->request->get('id');
        if ($message->load(Yii::$app->request->post()) && $message->save()) {
            if(Yii::$app->getRequest()->getIsPjax()) {  //очистка формы после Pjax
                $message = new Message();
            }
             $res = "Cообщение отправлено";

        }


        $freelancer = Freelancers::findOne($id);
        if(empty($freelancer )){
            throw new \yii\web\HttpException(404, 'Такой страницы не существует');
        }
        $this->layout = 'cabinet';
        return $this->render('view',[
                'freelancer' => $freelancer,
                'message' =>  $message,
                'res' =>  $res,
            ]
        );
    }
    
    public function actionProfile($id){
//              Debug(Yii::$app
//              );
        if(Yii::$app->user->identity->id == $id) {


            $model = $this->findModel($id);
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                $message = Yii::$app->user->identity->username . " Данные успешно изменены";
                Yii::$app->session->setFlash('success', "$message");
                return $this->redirect(['/cabinet', 'id' => $model->id]);
            }

            $freelancer = Freelancers::findOne($id);
//        if(empty($freelancer )){
//            throw new \yii\web\HttpException(404, 'Такой страницы не существует');
//        }
            $this->layout = 'profile';
            return $this->render('profile', [
                    'freelancer' => $freelancer,
                    'model' => $model,
                ]
            );
        }
        else{
            throw new \yii\web\HttpException(404, 'Такой страницы не существует');
            return $this->render('profile');
        }
    }

    public function actionCreate()
    {
        $model = new Freelancers();

        $user = User::findOne(['id' => Yii::$app->user->identity->id]);
        $model->id = $user->id;
        $model->login = $user->username;
//Debug($user) ;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['profile', 'id' => Yii::$app->user->identity->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'user' => $user,
            ]);
        }
    }



    protected function findModel($id)
    {
        if (($model = Freelancers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }




}