<?php

require_once('zim.php');

$zim = new ZimAccounting('http://accounting.intricateinlays.com');
$login = json_decode($zim->login('demo', 'password'));
$token = $login->token;
// echo $zim->get_companies($token);
// echo $zim->select_company($token, 18);
// echo $zim->get_categories($token);
// echo $zim->get_items($token);
// echo $zim->get_users($token);
// echo $zim->save_category($token, array('name' => 'test'));
// echo $zim->save_item($token, array('name' => 'test', 'code' => '001', 'price' => 12));
