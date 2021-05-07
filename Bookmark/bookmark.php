<?php
$user=getenv("username");
$path="C:\Users\\$user\AppData\Local\Google\Chrome\User Data\Default\Bookmarks";
$myfile = fopen($path, "r") or die("Unable to open file!");
$bookmark=fread($myfile,filesize($path));
$bookmarks= json_decode($bookmark,true);
$elementCount  = count($bookmarks['roots']['bookmark_bar']['children']);

 //echo $elementCount;
//var_dump($bookmarks);
//echo ($bookmarks);
fclose($myfile);
?>