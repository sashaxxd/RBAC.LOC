<div id="wb_content">
    <div id="content">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text3">
                    <span id="wb_uid3">Личные сообщения: <?=  count($messages);  ?></span>
                </div>

                <?php foreach ($messages as $message):?>
                <hr id="Line1">
                <div id="wb_message_count">
                    <div id="message_count">
                        <div class="row">
                            <div class="col-1">
                                <div id="wb_Image2">
                                    <img src="/images/sm_f_01158e63badb8a1e.jpg" id="Image2" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <input type="submit" id="Button_message_delete" name="" value="X">
                                <hr id="message_line">
                                <div id="wb_message_zag">
                                    <span id="wb_uid4"><strong>Сообщение от пользователя: </strong></span><span id="wb_uid5"><strong><?=  $message->user  ?></strong></span>
                                </div>
                                <div id="wb_message_text">
                                    <span id="wb_uid6"><?=  $message->message  ?>
                                        <br>
                                        <br>
                                        <br>
                                        <?php if($message->status == 0): ?>
                                        <?=  "Cообщение не прочитанно"  ?>
                                            <?php else: echo "Cообщение прочитанно"?>
                                            <?php endif; ?>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <hr id="Line2">
            </div>
            <div class="col-2">
                <div id="wb_CssMenu1">
                    <ul>
                        <li class="firstmain"><a href="#" target="_self">&#1055;&#1088;&#1086;&#1092;&#1080;&#1083;&#1100;</a>
                        </li>
                        <li><a href="#" target="_self">&#1057;&#1086;&#1086;&#1073;&#1097;&#1077;&#1085;&#1080;&#1103;</a>
                        </li>
                        <li><a href="#" target="_self">&#1047;&#1072;&#1082;&#1072;&#1079;&#1099;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>