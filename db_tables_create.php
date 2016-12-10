<?php

$reg = new mysqli('sql202.rf.gd','rfgd_19176149','nihanth007','rfgd_19176149_registrations');

$sql = 'create table entry(name varchar(50),pin varchar(15) UNIQUE,email varchar(30),phone varchar(14),college varchar(100),branch varchar(3),paper int(1),poster int(1),kode int(1),testurwits int(1),app int(1),quiz int(1),project int(1),startup int(1),ad int(1),movie int(1),picacam int(1),treasure int(1),workshop int(1) , PRIMARY KEY (`pin`))';

if($reg->query($sql)){
	echo 'Table Entry Created<br>';
}
else{
	echo 'Table Creation Failed<br>';
	echo $reg->error;
}


$sql ='CREATE TABLE kode(`id` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT, `pin` varchar(14) UNIQUE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;CREATE TABLE testurwits(`id` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT, `pin` varchar(14) UNIQUE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;CREATE TABLEpaper`id` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT, `pin` varchar(14) UNIQUE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;CREATE TABLE poster(`id` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT, `pin` varchar(14) UNIQUE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;CREATE TABLE treasure(`id` INT(3)UNSIGNED NOT NULL AUTO_INCREMENT, `pin` varchar(14) UNIQUE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;CREATE TABLE picacam(`id` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT, `pin` varchar(14) UNIQUE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;CREATE TABLE ad(`id` INT(3) UNSIGNED NOT NULLAUTO_INCREMENT, `pin` varchar(14) UNIQUE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;CREATE TABLE app(`id` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT, `pin` varchar(14) UNIQUE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;CREATE TABLE movie(`id` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT, `pin`varchar(14) UNIQUE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;CREATE TABLE project(`id` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT, `pin` varchar(14) UNIQUE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;CREATE TABLE quiz(`id` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT, `pin` varchar(14) UNIQUENOTNULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;CREATE TABLE startup(`id` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT, `pin` varchar(14) UNIQUE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;CREATE TABLE workshop(`id` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT, `pin` varchar(14) UNIQUE NOT NULL, PRIMARYKEY (`id`)) ENGINE = MyISAM;';

$reg->query($sql);


?>