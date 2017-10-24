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

if(isset($_GET['search'])){

echo $search_id =$_GET['value'];
$search_query=" select * from posts where post_keywords like '%search_id%'";

$run_query = mysql_query ($search_query);

while ($search_row=mysql_fetch_array($run_query)){
	
	
	
	$post_title=$search_row['post_title'];
	$post_image=$search_row['post_image'];
	$post_content= substr ($search_row['post_content'],0,100);
	


?>
<center>
<h1> you search result is here  </h1>

<h2> <a href="pages.php?id=<?php echo $post_id; ?>">
<?php echo $post_title; ?>
</a> </h2>

<img src="image/<?php echo $post_image; ?>">

<p><?php echo  $post_content; ?></p>

</center>

<?php }} ?> 

</div>

<div> <?php  include("includes/slidebar.php"); ?></div>



<div id="footer">this is the footer</div>


</body>
</html>