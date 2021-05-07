<?php require_once('bookmark.php');?>
<?php require_once('links.php');?>
<html>
<head>
<title>Bookmark Search</title>
</head>
<body>
<nav class="navbar navbar-light " style="background-color:navy;">
<div class="container-fluid">
<span class="nav-title">Bookmark-Search</span>
</div>
</nav>
<br/>
<input type="text" id="searchbar" class="searchbar" onkeyup="myFunction()" placeholder="&#xF002  Search bookmark..." style="font-family:Arial, FontAwesome"/>
<input type="button" value="Clear" class="btn btn-info" onclick="clearSearch()"/>
<br/><br/>
<div class="container">
<div class="row row-cols-md-4 g-4" >