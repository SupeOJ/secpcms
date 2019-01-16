<link rel="stylesheet" href="<?php print $config['url_to_module']; ?>css/style.css" />
<script src="<?php print $config['url_to_module']; ?>js/script.js"></script>

<h1>modtest</h1>
<p>这是模块路径:<?php print $config['url_to_module']; ?></p>
<div class="box">
	<img src="<?php echo $config['url_to_module']; ?>logo.png" />
</div>
<?php if(in_live_edit()): ?>
<?php print notif("Click here to edit this module"); ?>
<?php endif; ?>
<module type="modtest2" my-param="foo" other-parameter="bar" aaa="1111" />


<?php
// Saving
/*$data = array(
    'name' => 'Three Musicians',
    'price' => 2700,
    'description' => 'My greatest work'
);*/
//db_save('modtest', $data);

//Getting
//$rows = db_get('table=modtest');
/*foreach ($rows as $item) {
    print $item['id'];
    print $item['name'];
    print $item['price'];
    print $item['description'];
    print $item['created_at'];
}*/
//print_r($rows);

//Delete
//db_delete('modtest', $id = 2);

//Update
// Gets single row with id = 3
$row = db_get(array(
    'table' => 'modtest',
    'id' => 3,
    'single' => true
    ));
$row['description'] = 'My Awesome Painting';
echo 'Updating row with ID ', $row['id'];
db_save('modtest', $row);
?>




