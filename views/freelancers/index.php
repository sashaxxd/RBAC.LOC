<div id="wb_content">
    <div id="content">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text3">
                    <span id="wb_uid3">Каталог фрилансеров</span>
                </div>
                <?php foreach($freelancers as $freelancer): ?>
                <hr id="Line1">
                <div id="wb_LayoutGrid3">
                    <div id="LayoutGrid3">
                        <div class="row">
                            <div class="col-1">
                                <div id="wb_Image2">
                                    <a href="<?= \yii\helpers\Url::to(['freelancers/view', 'id' => $freelancer->id])?>"><img src="images/sm_f_01158e63badb8a1e.jpg" id="Image2" alt=""></a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div id="wb_Text4">
                                    <span id="wb_uid4"><?= $freelancer->name ?> <?= $freelancer->lastname ?> </span><span id="wb_uid5"><strong><a href="<?= \yii\helpers\Url::to(['freelancers/view', 'id' => $freelancer->id])?>"><?= $freelancer->login ?></a><br>Специализация: </strong></span><span id="wb_uid6"><strong><?= $freelancer->spec ?><br></strong></span><span id="wb_uid7">Дата регистрации: </span><span id="wb_uid8"><strong><?= $freelancer->date ?></strong></span><span id="wb_uid9"><strong><br></strong></span>
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
                <?php endforeach ?>
            </div>
            <div class="col-2">
                <div id="wb_Image3">
                    <img src="images/3a3df9c27b41314cc6e6b8d1e1fd8c29.png" id="Image3" alt="">
                </div>
            </div>
        </div>
    </div>
</div>