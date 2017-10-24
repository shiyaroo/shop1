<?php 


if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {

?>


<html>
<head>
<title>Inserting New Post</title>
</head>

<body> 

<form method="post" action="insert_posts.php" enctype="multipart/from-data">

<table width="600" align="center" border="10">
<tr>
<td align="center" bgcolor="red"colspan="6"><h1>Insert New post Here </h1> 

</td>
</tr>


<tr>
<td align="right">Post Title:</td>
<td><input name="title" type="text" size="28"></td> 
</tr>
<tr>
<td align="right">Post Author:</td>
<td><input name="author" type="text" size="28"></td>
</tr>
<tr>
<td align="right">Post Keywords:</td>
<td><input name="keywords" type="text" size="28"></td>
</tr>
<tr>
<td align="right">Post image:</td>
<td><input type="file"  name="image"></td> 
</tr>
<tr>
<td align="right">Post Price:</td>
<td><input name="price" type="text" size="28"></td>
</tr>
<tr>
<td align="right">Post Discount:</td>
<td><input name="discount" type="text" size="28"></td>
</tr>
<tr>
<td align="right">Post Content:</td>
<td><textarea name="content" cols="30" rows="15"></textarea></td>
</tr>
<tr bgcolor="#0066FF">

<td colspan="6" align="center"><input type="submit" name="submit" value="Publish Now"></td>
</tr>
</table>
</form>
</body>
</html>

<?php

include("includes/connect.php");

if(isset($_POST['submit'])){
 $post_title=$_POST['title'];
 $post_date= date ('d/m/y');
 $post_author=$_POST['author'];
 $post_keywords=$_POST['keywords'];
 $post_price=$_POST['price'];
 $post_discount=$_POST['discount'];
 $post_content=$_POST['content'];
 $post_image=$_FILES['image'] ['name'];
$image_tmp=$_FILES['image'] ['tmp_name'];

if ($post_title=='' or $post_author=='' or $post_keywords=='' or  $post_price=='' or $post_discount=='' or $post_content==''  ){

echo "<script>alert ('any of the fields is empty')</script>";

exit();

}

else {
 
 move_uploaded_file($image_tmp,"image/$post_image");
 
$insert_query = " insert into shop.posts (post_title,post_date,post_author,post_keywords,post_image,post_price,post_discount,post_content) values ('$post_title','$post_date','$post_author','$post_keywords','$post_price','$post_discount','$post_image ','$post_content') ";

	if(mysql_query($insert_query)){


echo "<script>alert('post published successfuly')</script>";
	echo "<script>window.open('view_posts.php','_self')</script>";

}

}	
    
}
?>
<?php } ?>