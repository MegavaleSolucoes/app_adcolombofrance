<?php 

require_once 'vendor/php-activerecord/php-activerecord/ActiveRecord.php';

$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory('models');
$cfg->set_connections(array('development' => 
	'mysql://root:@localhost/mega_adcolombo?charset=utf8'));

//$cfg->set_connections(array('development' =>
  	'mysql://dbo634391538:132639megavale@db634391538.db.1and1.com/db634391538?charset=utf8'));