<?php 
include '../config.php';
include '../classes/Logger.class.php';
include '../classes/DatabaseConnection.class.php';
include '../classes/Article.class.php';

$connection = DatabaseConnection::getConnection($config);
$article = Article::getById($connection, 1);
echo $article->title;

