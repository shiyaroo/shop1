<style type="text/css">
#main_content h3 a {
	color: #FFF;
}


</style>
<div id="main_content">

<?php
include("includes/connect.php");

$select_posts=" select * from posts order by 1 DESC LIMIT 0,5";

$run_posts = mysql_query ($select_posts);

while ($row=mysql_fetch_assoc($run_posts)){
	
	$post_id=$row['post_id'];
	$post_title=$row['post_title'];
	$post_author=$row['post_author'];
	$post_date=$row['post_date'];
	$post_image=$row['post_image'];
	$post_price=$row['post_price'];
	$post_discount=$row['post_discount'];
	$post_content=substr($row['post_content'],0,50);
	
?>
<h2>
<a href="pages.php?id=<?php echo $post_id; ?>">
<?php echo $post_title; ?>

</a>
</h2>

<h3 align="left">&nbsp;&nbsp;&nbsp;published on:<b><?php echo $post_date; ?>
</b></h3>
<h3 align="left">&nbsp;&nbsp;&nbsp;posted by :<b><?php echo $post_author; ?>
</b></h3>
<h3 align="left">&nbsp;&nbsp;&nbsp;price : <b><?php echo $post_price; ?></b>
</h3>
<h3 align="left">&nbsp;&nbsp;&nbsp;discount : <b><?php echo $post_discount; ?></b>
</h3>
<center><b><img src="image/<?php echo $post_image; ?>"
width="200" height="300" /></b></center>
<p align="left">&nbsp;&nbsp;<b><?php echo $post_content; ?></b>
</p>
<h3 align="center" ><a href="pages.php?id=<?php echo $post_id; ?>">Read More</a></h3>
<?php } ?>

</div>