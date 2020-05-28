<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>become a partner</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
<style type="text/css">
  .jumbotron {
  align-items: center;

}
       .card {
        margin: 0px;
         padding:30px;
         border:1px black solid;
         width:490px;
         align-items: center;
       }

</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="#">The Tax</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Login <i class="fas fa-user"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Register <i class="fas fa-user-plus"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <h1>Become A Partner</h1>
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-2">


        </div>
        <div class="col-md-2">
      <div class="card" style="">
        <h2>Become A Partner</h2>
      <form  action="index.html" method="post">
        <div class="form-group">
          <label>First Name : </label><br>
          <input type="text" name="" placeholder="Enter Your First Name" value="">
        </div>
        <div class="form-group">
          <label>Last Name : </label><br>
          <input type="text" name="" placeholder="Enter Your Last Name" value="">
        </div>
        <div class="form-group">
          <label>Email Address : </label><br>
          <input type="text" name="" placeholder="Enter Your Email Address" value="">
        </div>
        <div class="form-group">
          <label>Contact Number : </label><br>
          <input type="text" name="" placeholder="Enter Your Contact Number" value="">
        </div>
        <label>Message :</label>
        <div class="form-group">
          <textarea name="name" rows="5" cols="60">Enter the Message</textarea>
        </div>
      <center><button class="btn btn-success" type="submit" name="button">Apply</button></center>
      </form>
    </div>
  </div>
</div>
    </div>
<!--footer-->
<?php
	include 'footer.php';
 ?>
  </body>
</html>
