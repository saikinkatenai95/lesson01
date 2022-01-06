<?php
$json_sample = [
  "title" => "JSONサンプル",
  "items" => [
    "りんご",
    "みかん"
  ]
];

$json = json_encode($json_sample, JSON_UNESCAPED_UNICODE); //JSON_UNESCAPED_UNICODEは日本語化するためのオプション
echo $json;
file_put_contents('json_sample.json',$json);
?>