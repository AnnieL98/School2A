<?php
include "connection.php";
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header('location:loginform.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Quickie Administration Panel</title>

    <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<link rel="stylesheet" href="styling.css">
  <title> Profile </title>
  <style type="text/css">

    .nav1 {
    float: left;
    width: 100px;
    height: 50px;



}
  .profile {
    color:black;


}
  </style>

  </head>

  <body>

<!-- navbar -->
   <nav class="navbar navbar-inverse" navbar.static-top>
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Quickie</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php
         if ($_SESSION['user_type'] == 'Super Administrator'){
                     ?>
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="manage_users.php">Manage Users <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="profile.php?id=<?php echo $_SESSION['id'];?>">Profile <span class="sr-only">(current)</span></a></li>
          <?php
       }elseif ($_SESSION['user_type'] == 'Administrator'){
                     ?>
                      <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                      <li class="active"><a href="manage_users.php">Manage Authors <span class="sr-only">(current)</span></a></li>
                      <li class="active"><a href="profile.php?id=<?php echo $_SESSION['id'];?>">Profile <span class="sr-only">(current)</span></a></li>
                      <?php
                    }
 ?>
  </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php  echo $_SESSION['username']; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php?id=<?php echo $_SESSION['id'];?>">Profile</a></li>
             <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->