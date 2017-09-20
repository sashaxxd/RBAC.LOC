<?php
/**
 * User: noutsasha
 * Date: 15.09.2017
 * Time: 23:44
 */

namespace app\controllers;
use app\models\Freelancers;


class CabinetController extends AppController
{

    public  $layout = 'cabinet';

    public function actionIndex($id)
    {

       

        $freelancer = Freelancers::findOne($id);
        if(empty($freelancer )){
            throw new \yii\web\HttpException(404, 'Такой страницы не существует');
        }
        return $this->render('index',[
                'freelancer' => $freelancer
            ]
        );
    }

}