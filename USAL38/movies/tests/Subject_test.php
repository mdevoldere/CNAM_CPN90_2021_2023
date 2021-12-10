<?php 
// inclut le contenu du fichier
require '../Models/Subject.php';

$sf = new Subject();
echo $sf->getSubjectName();
$sf->setSubjectName("Science-Fiction");
echo $sf->getSubjectName();

$comedy = new Subject();
$comedy->setSubjectName("Comedy");
echo $comedy->getSubjectName();

/*
echo '<pre>';
var_export($sf);
echo '<hr>';
var_dump($sf);*/