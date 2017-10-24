<html>
<head>
<title>Admin panel</title>
<link rel="stylesheet" href="admin_style.css">
</head>

<body>
<div id="header">

<a href="index.php">

<h1> Welcome to the Admin panel</h1></a>   


</div>

<div id="sidebar">

<h2><a href="logout.php">Logout</a></h2>
<h2><a href="view_posts.php">View Posts</a></h2>
<h2><a href="insert_posts.php">Insert New Post</a></h2>
<h2><a href="#">View Comments</a></h2>

</div>
<table width="1000" border="5" align="center" bgcolor="gray">
<tr>
<td colspan="15" align="center" bgcolor="#FFFF00">
<h1>
View All Posts</h1></td>

</tr>
<tr bgcolor="#FF0000">
<th>Post No:</th>
<th>Post Date:</th>
<th>Post Author:</th>
<th>Post Title:</th>
<th>Post Image:</th>
<th>Post price:</th>
<th>Post Discount:</th>
<th>Post Content:</th>
<th>Delete Post:</th>
<th>Edit Post:</th>
</tr>



<?php

include("../includes/connect.php");
$query=" select * from posts";
$run = mysql_query ($query);
while ($row=mysql_fetch_array($run)){

 $post_id=$row['post_id'];
 $post_date=$row ['post_date'];
 $post_author=$row['post_author'];
 $post_title=$row['post_title'];
 $post_image=$row['post_image'];
 $post_price=$row['post_price'];
 $post_discount=$row['post_discount'];
 $post_content=substr($row['post_content'],0,50);


?>
<tr align="center">
<td><?php echo $post_id; ?></td>
<td><?php echo $post_date; ?></td>
<td><?php echo $post_author; ?></td>
<td><?php echo $post_title; ?></td>
<td><img src="../image/<?php echo $post_image; ?>" width="80" height="80" ></td>
<td><?php echo $post_price; ?></td>
<td><?php echo $post_discount; ?></td>
<td><?php echo $post_content; ?></td>

<td><a href="delete.php?del=<?php echo $post_id; ?>">Delete</a></td>

<td><a href="edit.php?edit=<?php echo $post_id; ?>">Edit</a></td>


</tr>
<?php } ?>
</table>
</body>
</html>