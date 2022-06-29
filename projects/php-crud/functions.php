<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

function current_url( ) {
	echo $_SERVER['REQUEST_URI'];
}