
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


/* Add a gray background color with some padding */
body {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.rightcolumn {   
    float:right;
    width: 100%;
}

.right {
    text-align: right;
    float: right;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}
</style>
</head>
<body>

<div class="header">
  <h2>Adminstration of blog</h2>
</div>
<div class= "right">
<a href= "index.php" >Home</a>
<a href="newpost.php">New Post</a>
<a href= "changepasswordform.php">change password</a>
<a href= "logout.php">logout</a>
<a href="newuser.php">new_user</a>
<a href= "edituserinfo.php?username=<?php echo $username;?>" >Update Information</a>


</div>





<?php
require 'secureauthentication.php';


$username = $_SESSION["username"];

$enable = $_SESSION["enable"];

//$sql= "SELECT id, title FROM posts where username ='$username'";
 $sql= "SELECT id, title, owner FROM posts where owner='$username'";
 

$result = $mysqli->query($sql);
 if ($result->num_rows>0)
{
while($dis =  $result->fetch_assoc())
{
$id=$dis["postid"];
$title = $dis["title"];

echo '<br><h3 align="center"></h3>';
	echo '<div align="center"><table border="2">';
		echo '<div align="center"><table border="1">';
		//echo "<tr><td>Title</td><td></td><td></td></tr>";
		//echo "<tr><td> $title </td>";
		echo "<tr><td><b> title : " .$dis["title"]. "</td>";
		echo '<td><a href= "editpost.php?id='.$dis['id'].'"><p style="text-align:center">'. "Edit  Post".'</a></td>';//editing
		echo '<td><a href="deletepost.php?id='.$dis['id'].'"><p style="text-align:center">'."Delete Post".'</a></td>';//delet		
		echo '</tr></table></div>';

}
}



?>

