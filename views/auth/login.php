<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
?>

<div class="container" style="padding: 50px 20px 50px 20px;" xmlns="http://www.w3.org/1999/html">
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif; ?>

    <?php if (Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php endif; ?>
    <h1>Вход</h1>
    <?php Pjax::begin(['id' => 'my-pjax']); ?>
    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]])?>
    <div class="formin" style="width: 200px;">
    <?= $form->field($model, 'email')?>
    </div>
    <div class="formin" style="width: 200px;">
    <?= $form->field($model, 'password')->passwordInput()?>
    </div>
    <?= Html::submitButton('Войти', ['class' => 'btn btn-login']) ?>



    <?php ActiveForm::end()?>
    <?php Pjax::end(); ?>
    <br>
    <p><a href="<?= \yii\helpers\Url::to(['auth/signup']) ?>">Зарегистрироваться</a></p>
</div>


