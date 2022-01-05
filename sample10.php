<?php
$week_name = ['日', '月' , '火' , '水' , '木' , '金' , '土'];


date_default_timezone_set('Asia/Tokyo');
$week = date('w'); //公式リファレンス参照
echo "今日は、$week_name[$week]曜日です。";
?>