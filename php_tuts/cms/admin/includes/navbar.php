<?php
include "includes/header.php";
if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  
<style>
    footer,header,.main{
padding-left:300px;
}    
@media(max-width:992px)
{
    footer,header,.main{
    padding-left:0px;
    }
    }
</style>
 
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Filmyhu-Watch Latest Hindi movies,latest hollywood movies,latest south movies download,movis download,new movie download</title>
</head>
<body>
 
<nav class="teal">
<div class="nav-wrapper">
<div class="container">
<a href="" class="brand-logo center">Blogera</a>
<a href="" class="button-collapse show-on-large" data-activates="sidenav"><i
class="material-icons">menu</i></a>
</div>
</div>
</nav>   
<ul class="side-nav fixed" id="sidenav">
<li>
<div class="user-view">
<div class="background">
<img src="../img/img8.jpg" alt="" class="responsive-img">
</div>
<a href=""><img src="../img/img29.jpg" alt="" class="circle"></a>
<span class="name white-text"><?php echo $_SESSION['username'];?></span>
<span class="email white-text">
<?php
$user=$_SESSION['username'];
$sql="select email from users where username='$user'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
echo $row['email'];
?>
</span>
</div>
</li>
<li>
<a href="dashboard.php">Dashboard</a>
</li>
<li>
<a href="post.php">Posts</a>
</li>
<li>
<a href="image.php">Images</a>
</li>
<li>
<a href="comment.php">Comments</a>
</li>
<li>
<a href="setting.php">Settings</a>
</li>

<div class="divider">
    
</div>
<li><a href="logout.php">Logout</a></li>
</ul>


<?php
}
else
{
    $_SESSION['message']="<div class='chip red black-text'>Login To Continue</div>";
  header("Location: ../login.php");
}
?>