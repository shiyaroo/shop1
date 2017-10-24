
<div id="sidebar">

<div id="searchbox">

<form action="search.php" method="get"
 enctype="multipart/from-data">
 
 <input type="text" name="value" placeholder="search this site " size="25" >
 
 <input type="submit" name="search" value="search" >
 
 
 

</form>

</div>






<div id="social">
<h2>FOLLOW US</h2>
<a href="https://www.facebook.com/shiyaroo.ali" target="blank"><img src="image/f.png" ></a>

<a href="https://plus.google.com/u/1/115270900787917817178" target="blank"><img src="image/g.png" ></a>

<a href="https://www.youtube.com/user/rrodi1980" target="blank"><img src="image/u.png" ></a>

<a href="https://www.instagram.com/shiyar.kurdish" target="blank"><img src="image/i.png" ></a>

<a href="https://twitter.com/shiyaroo" target="blank"><img src="image/t.png" ></a>

<a href="https://vk.com/shiyarkurdish" target="blank"><img src="image/vk.png" ></a>


</div>
<center> <h2> Recent post </h2></center>

<div>
<?php
include("includes/connect.php");

$query=" select * from posts order by 1 DESC LIMIT 0,5";

$run = mysql_query ($query);

while ($row=mysql_fetch_array($run)){
	
	$post_id=$row['post_id'];
	$post_title=$row['post_title'];
	$post_image=$row['post_image'];


?>
<center> 


<a href="pages.php?id=<?php echo $post_id; ?>">


<h3><?php echo $post_title; ?></h3></a>

<a href="pages.php?id=<?php echo $post_id; ?>">


<img src='images/<?php echo $image; ?>' width='140' height='100' /> </a>

</center>
<?php } ?>
</div >

<div> 
<center> <h2> Videos </h2></center>

<video  width="300" height="250"   controls title="this video about israel">
   <source  src="israel.mp4" type="video/mp4">
</video>



</div>