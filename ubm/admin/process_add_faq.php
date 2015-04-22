<?php
include('includes/config.php');

$question = htmlentities($_POST['question'],ENT_QUOTES);
$answer = htmlentities($_POST['answer'],ENT_QUOTES);
$link = htmlentities($_POST['link'],ENT_QUOTES);


$sql= mysql_query("INSERT INTO `faq`(`flag`, `question`, `answer`, `link`) VALUES ('1','$question','$answer','$link')");

//echo mysql_error();
if(!mysql_error())
{
echo 1;
}
?>