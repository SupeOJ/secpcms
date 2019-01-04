<?php
/*

type: layout

name: QR code

position: 3
*/
?>
<?php

$database = '[{"link":"http://www.zhongyajituan.cn/","name":"中亚集团","logo":"http://172.16.5.17:8553/userfiles/cache/thumbnails/qrcode/154546149445184.png","length":"6"},{"link":"http://www.baidu.com","name":"百度","logo":"http://172.16.5.17:8553/userfiles/cache/thumbnails/qrcode/15454614185205.png","length":"6"}]';
$qrcode_settings = get_option('qrcode_settings', $params['id']);
$qrcode_settings = $qrcode_settings ? $qrcode_settings : $database;
?>
<style type="text/css">
    .qricon-wrapper>img{border: 1px #5fabf3 solid;}
    .qrcard-block>p{  font-size: 15px;color: #fff;}
    .qrcard-block{margin-top: 10px;}
    .qrcards-layout-1{padding-top: 35px;
        padding-bottom: 20px;
        height: 280px;
        display: flex;
        flex-direction: row;
        text-align: center;
        justify-content: center;}
    .qrcards-layout-1>li{  
        list-style: none;
        height: 280px;
        margin-left: 150px;}
    .qricon-wrapper{width: 192px;}
</style>
<div class="layout-qrcode-<?php print $params['id'] ?>">
    <ul class="qrcards-layout-1">
            <?php 
          if(!empty($qrcode_settings)){
            $qrarr = json_decode($qrcode_settings,true);
            foreach ($qrarr as $key => $value) { ?>
            <li class="qrcard">
                <div class="qricon-wrapper">
                    <img src="<?php echo $value['logo']; ?>">
                </div>
                <div class="qrcard-block">
                    <p class="card-text"><?php echo $value['name']; ?></p>
                </div>
            </li>
            <?php } 
        } ?>
    </ul>
</div>
