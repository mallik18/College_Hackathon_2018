
<!DOCTYPE html>

<html lang="en">
    
  <head>
    <title>Think Twice</title>
      
    <meta charset="utf-8">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
      <style >
      
          .jumbotron {
              
              background-image: url("background.jpg"); background-attachment: fixed;
              height: 500px;
              text-align: center;
              margin-top: 50px;
              background-repeat: no-repeat;
              background-size: cover;



          #email {
              
              width: 300px;
              
          }
          
          #appSummary {
              
              text-align: center;
              margin-top:50px;
              margin-bottom: 20px;
              width: 50px;
              height: 50px;
              
          }
          
          .card-img-top {
              
              width: 100%;
              
              
          }
          
          #appStoreIcon {
              
              width: 100px;

              
          }
          
  #footer {
              
              background-color: aqua;
              padding-top: 200px;
              margin-top: 100px;
              text-align: center;
              padding-bottom: 150px;
          }
                  
          body {
              
              position: relative;
              
          }
      
      </style>
      
  </head>
    
  <body data-spy="scroll" data-target="#navbar" data-offset="150">
      
        <nav class="navbar navbar-light bg-faded navbar-fixed-top" id="navbar">
          <a class="navbar-brand" href="#">Think Twice!</a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="webapp.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
            
          </ul>
          <form class="form-inline pull-xs-right">
            <button class="btn btn-success" type="button" onclick="location.href='login.html';"
             >Login
             <?php 
                include("database.php");
                mysqli_query($conn,"SELECT flag FROM user");
                mysqli_query($conn,"update user set flag='0' ");

                ?>
             



                                                                                                </button>
          </form>
        </nav>

        <div class="jumbotron" id="jumbotron">
          <h1 class="display-3" style="color: white;">Welcome to Think Twice!</h1>
          <p class="lead""><h2  style="color: white;">"An Investment in Knowedge pays the best interest"</h2></p>
          <hr class="m-y-2">
           

        <form class="form-inline">
          <div class="form-group">
            <label class="sr-only" for="email">Email address</label>
            <div class="input-group">
              
             
            </div>
          </div>
          
        </form>
        </div>
      
  <p align="center" style="background-color: powderblue;"><br><br><br><br>
    Register For Free
  <a href="#!" class="btn btn-outline-white btn-rounded">Sign up!</a><br><br>© 2018 Think Twice.All Rights Reserved. <br>
    <a href="https://www.instagram.com/tthink81/?hl=en">
  <img src="http://icons-for-free.com/free-icons/png/512/1819417.png" alt="instagram" style="width:42px;height:42px;border:0" class="fa fa-instagram">
</a>
<a href="https://www.facebook.com/Think-twice-289966198308208/?modal=admin_todo_tour" class="facebook">
  <img src="http://icons-for-free.com/free-icons/png/512/1819423.png" alt="facebook" style="width:42px;height:42px;border:0">
</a>
<a href="https://plus.google.com/107116483678843493430">
  <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="google plus" style="width:42px;height:42px;border:0">
</a>

  <br><br></p>
  </div> 
          
      
     
      
 
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
  </body>
    
</html>