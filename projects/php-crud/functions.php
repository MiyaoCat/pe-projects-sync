<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

function current_url( ) {
	echo $_SERVER['REQUEST_URI'];
}

$json = file_get_contents('data/players.json');

$playersData = json_decode($json, true);
$players = $playersData['playersData'];

