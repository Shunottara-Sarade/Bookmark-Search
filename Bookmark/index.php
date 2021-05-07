<?php require_once('header.php')?>

<?php 

if($elementCount>0){
for($i=0;$i<$elementCount;$i++){
$name=$bookmarks['roots']['bookmark_bar']['children'][$i]['name'];
$url=$bookmarks['roots']['bookmark_bar']['children'][$i]['url'];
$domain = parse_url($url, PHP_URL_HOST);
?>
<div class="col">
<div class="card">
<div class="card-body">
<h5 class="card-title">
<?php 
echo "<img width='25px' height='25px' src='https://icons.duckduckgo.com/ip3/$domain.ico'>"."   ";
if(strlen($name)<=30){
	echo $name;
}
else if (strpos($name,"|")!==false){
echo substr($name,0,stripos($name,"|"));
}
else if (strpos($name,"/")!==false){
echo substr($name,0,stripos($name,"/"));
}
else if (strpos($name,"-")!==false){
echo substr($name,0,strripos($name,"-"));
}

else{
	echo substr($name,0,strlen($name));
}

?>
</h5>
<a href="<?php echo $bookmarks['roots']['bookmark_bar']['children'][$i]['url'];?>" class="btn btn-primary" target="_blank">Visit</a>
</div>
<br/>

</div>

</div>

<?php
}
}else{
echo "Currently, No Bookmarks are present.";
}

?>

</div>
</div>
</body>
</html>