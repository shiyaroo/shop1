<html>
<head>
<title>welcome to shiyar online shop</title>
<link rel="stylesheet" href="style.css" media="all">
</head>
<body>
<div> <?php  include("includes/header.php"); ?></div>

<div> <?php  include("includes/navbar.php"); ?></div>

<div id="main_content">
<?php
include("includes/connect.php");
if(isset($_GET['id'])){
$page_id=$_GET['id'];

$select_query=" select * from posts where post_id = '$page_id'";


$run_query = mysql_query ($select_query);

while ($row=mysql_fetch_array($run_query)){
	
	$post_id=$row['post_id'];
	$post_title=$row['post_title'];
	$post_author=$row['post_author'];
	$post_date=$row['post_date'];
	$post_image=$row['post_image'];
	$post_content=$row['post_content'];
	
	$post_price=$row['post_price'];
	$post_discount=$row['post_discount'];
	

?>
<h2>
<a href="pages.php?id=<?php echo $post_id; ?>">
<?php echo $post_title; ?>

</a>
</h2>

<p align="left">published on:<b><?php echo $post_date; ?>
</b></p>
<p align="left">posted by :<b><?php echo $post_author; ?>
</b></p>
<p align="left">price : <b><?php echo $post_price; ?></b>
</p>
<p align="left">discount : <b><?php echo $post_discount; ?></b>
</p>
<center><b><img src="image/<?php echo $post_image; ?>"
width="200" height="300" /></b></center>
<p align="left"><b><?php echo $post_content; ?></b>
</p>
<?php }} ?>

</div>
<div> <?php  include("includes/main_content.php"); ?></div>

<div> <?php  include("includes/slidebar.php"); ?></div>






</body>
</html>