<?php
$file = file_get_contents('feed.json'); //JSONは直接読み込むことができないので、ファイルとして内容を読み込ませる
$json = json_decode($file); //hson_decode jsonでコードを分解してあげるファンクション

foreach ($json->items as $item):
?>
・<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a><br>
<?php
endforeach;
?>