<?php
/**
 * User: noutsasha
 * Date: 15.09.2017
 * Time: 23:44
 */

namespace app\controllers;
use app\models\Freelancers;
use Yii;
use app\models\Message;
use yii\web\NotFoundHttpException;


class CabinetController extends AppController
{

    public  $layout = 'cabinet';

    public function actionIndex($id)
    {

        if (Yii::$app->user->identity->id == $id) {

            $messages = Message::find()->where(['parent_id' => Yii::$app->user->identity->id, 'status' => 0])->count();

            $freelancer = Freelancers::findOne($id);
            if (empty($freelancer)) {
                throw new \yii\web\HttpException(404, 'Такой страницы не существует');
            }
            return $this->render('index', [
                    'freelancer' => $freelancer,
                    'messages' => $messages
                ]
            );
        }
        else{
            throw new \yii\web\HttpException(404, 'Такой страницы не существует');
            return $this->render('profile');
        }
    }
    




}