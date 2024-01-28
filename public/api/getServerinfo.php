<?php
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Access-Control-Allow-Origin: *');

require './class/MinecraftQuery.php';
require './class/MinecraftQueryException.php';
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

$data = null;
$query = new MinecraftQuery();

try
{
  $query->Connect( '192.168.6.69', 25565, 1 );
  $info = $query->GetInfo( );
  $players = $query->GetPlayers( );
}catch( MinecraftQueryException $e )
{
  $data = array
  (
    'server_status'  => false,
    'server_address' => null,
    'server_version' => null,
    'game_type'      => null,
    'now_player'     => null,
    'max_player'     => null,
    'players'        => [],
    'message'        => $e->getMessage()
  );
  exit(json_encode($data));
}

$data_players = [];

if ($players != false) {
  foreach ($players as $s) {
    $data_players[] = array('name' => $s, 'src' => 'https://mc-heads.net/avatar/'. $s .'/64/png');
  }
}

$data = array
(
  'server_status'  => true,
  'server_address' => 'minecraft.cube-unit.net',
  'server_version' => $info['Version'],
  'game_type'      => $info['GameType'],
  'now_player'     => $info['Players'],
  'max_player'     => $info['MaxPlayers'],
  'players'        => $data_players
);

echo json_encode($data);