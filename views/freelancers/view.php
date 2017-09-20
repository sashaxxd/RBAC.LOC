<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div id="wb_content">
    <div id="content">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text3">
                    <span id="wb_uid3">Фрилансер <?= $freelancer->name ?> <?= $freelancer->lastname ?></span>
                </div>
                <hr id="Line1">
                <div id="wb_LayoutGrid3">
                    <div id="LayoutGrid3">
                        <div class="row">
                            <div class="col-1">
                                <div id="wb_Image2">
                                    <img src="/images/sm_f_01158e63badb8a1e.jpg" id="Image2" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div id="wb_Text4">
                                    <span id="wb_uid4"><?= $freelancer->name ?> <?= $freelancer->lastname ?> </span><span id="wb_uid5"><strong><?= $freelancer->login ?><br>Специализация: </strong></span><span id="wb_uid6"><strong><?= $freelancer->spec ?><br></strong></span><span id="wb_uid7">Дата регистрации: </span><span id="wb_uid8"><strong><?= $freelancer->date ?></strong></span><span id="wb_uid9"><strong><br></strong></span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="wb_Text5">
                                    <span id="wb_uid10"><strong><?= $freelancer->status ?></strong></span>
                                </div>
                                <div id="wb_FontAwesomeIcon2">
                                    <div id="FontAwesomeIcon2"><i class="fa fa-plus">&nbsp;</i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr id="Line2">
                <?php \yii\widgets\Pjax::begin() ?>
                <?php $form = ActiveForm::begin([   'id' => $widget_id.'-form',
                    'method' => 'POST',
                    'action' => '',
                    'enableAjaxValidation' => false,
                    'options' => [ 'autocomplete' => 'off', 'data-pjax' => true]
                ])?>

<!--                --><?//= $form->field($message, 'user')?>


                <?= $form->field($message, 'message')->textarea(['rows' => 10, 'placeholder' => 'Ввведите сообщение'])?>





                <?= Html::submitButton('Написать сообщение фрилансеру '.$freelancer->login, ['class' => 'btn btn-profile']) ?>
                <?php ActiveForm::end()?>


                    <span id="red_mes" style="color: red; font-size: 12px; font-weight: bold;"> <?= $res ?></span>

                <?php \yii\widgets\Pjax::end() ?>

                <div id="wb_Text8">
                    <span id="wb_uid11">Портфолио </span>
                </div>
            </div>
            <div class="col-2">
<!--                <div id="wb_CssMenu1">-->
<!--                    <ul>-->
<!--                        <li class="firstmain"><a href="#" target="_self">&#1055;&#1088;&#1086;&#1092;&#1080;&#1083;&#1100;</a>-->
<!--                        </li>-->
<!--                        <li><a href="#" target="_self">&#1057;&#1086;&#1086;&#1073;&#1097;&#1077;&#1085;&#1080;&#1103;</a>-->
<!--                        </li>-->
<!--                        <li><a href="#" target="_self">&#1047;&#1072;&#1082;&#1072;&#1079;&#1099;</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</div>
<div id="wb_LayoutGrid2">
    <div id="LayoutGrid2">
        <div class="row">
            <div class="col-1">
                <div id="wb_LayoutGrid1">
                    <div id="LayoutGrid1">
                        <div class="row">
                            <div class="col-1">
                                <div id="wb_Text9">
                                    <span id="wb_uid12"><strong>Заголовок</strong></span>
                                </div>
                                <div id="wb_Image4">
                                    <img src="/images/2%2832%29.jpg" id="Image4" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div id="wb_Text10">
                                    <span id="wb_uid13"><strong>Заголовок</strong></span>
                                </div>
                                <div id="wb_Image5">
                                    <img src="/images/04scr.png" id="Image5" alt="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="wb_Text11">
                                    <span id="wb_uid14"><strong>Заголовок</strong></span>
                                </div>
                                <div id="wb_Image6">
                                    <img src="/images/edee9031ae2ace7d9ae0e8640131569e.png" id="Image6" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>