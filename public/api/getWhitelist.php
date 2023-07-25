<?php
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Access-Control-Allow-Origin: *');

$filename = '../data/whitelist.json';
$json = file_get_contents($filename);
// 文字化けするかもしれないのでUTF-8に変換
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$obj = json_decode($json, true);

$data = [];

foreach($obj as $s){
  $data[] = array('uuid' => $s['uuid'], 'name' => $s['name'], 'src' => 'https://mc-heads.net/avatar/'.$s['name'].'/14/png');
}

echo json_encode($data);