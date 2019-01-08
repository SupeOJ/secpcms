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

<!-- 拖拽 -->
<link href="{TEMPLATE_URL}drag/dist/gridstack.css" rel="stylesheet" />
<link href="{TEMPLATE_URL}drag/css/default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
.grid-stack-item {width: 260px;float: left;}
.grid-stack-item-content {color: #2c3e50;text-align: center;}
.qricon-wrapper>img{border: 1px #5fabf3 solid;}
.qrcard-block>p{font-size: 15px;color: #000;}
.qrcard-block{margin-top: 10px;}
.qrcards-layout-1>li{list-style: none;}
.layout-qrcode{padding: 30px 0px 20px 0px;}

</style>
<div class="layout-qrcode layout-qrcode-<?php print $params['id'] ?>">
    <ul class="qrcards-layout-1 grid-stack">
        <?php
        if(!empty($qrcode_settings)){
            $qrarr = json_decode($qrcode_settings,true);
            foreach ($qrarr as $key => $value) {
        ?>
            <li class="qrcard grid-stack-item" data-gs-auto-position="true" data-gs-height="1" data-gs-no-resize="true" data-gs-locked="true" data-gs-width="2" data-gs-height="1">
                <div class="grid-stack-item-content">
                    <div class="qricon-wrapper">
                        <img src="<?php echo $value['logo']; ?>">
                    </div>
                    <div class="qrcard-block">
                        <p class="card-text"><?php echo $value['name']; ?></p>
                    </div>
                </div>
            </li>

        <?php 
            } 
        } 
        ?>
    </ul>
</div>

<script src="{TEMPLATE_URL}drag/js/lodash.min.js"></script>
<script src="{TEMPLATE_URL}drag/dist/gridstack.js"></script>
<script type="text/javascript">
$(function () {
    var options = {
        cell_height: 260,
        animate: true,
        height: 1
    };
    $('.grid-stack').gridstack(options);
});
</script>
