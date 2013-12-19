<?php

if(!defined('IN_DISCUZ')) {
  exit('Access Denied');
}

if(!$_G['uid']) {
	showmessage('not_loggedin', NULL, array(), array('login' => 1));
}

$Pvar = $_G['cache']['plugin']['groupbuy'];
$Plink = 'plugin.php?id=groupbuy:groupbuy';

include template('groupbuy:groupbuy');

?>
