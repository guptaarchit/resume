<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <!-- <link rel="stylesheet" href=""> -->
    <link href="includes/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/cus.css">
    <style>
        .jumbotron{
            color: #0D5360;
            background-color: white;
        }
        .h1 small{
            font-size: 50%;
            color: #115D6B;
        }
         .btn-prime{
            background-color: black;
            color: red;
         }   
    </style>
      <style>
  .mywidth{
    width: 20%;
    text-align: center;
    font-family: "Comic Sans MS";
  }
  .nav-container{
    width: 90%;
    height: 10%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 1%;
  }
  .brand{
    float: left;
    width: 20%;
  }
  .main-nav{
    float: right;
    width: 80%;
  }
  .foo1{
    width: 80%;
  }
  .foo2{
    font-size: large;
    text-align: center;
    padding-right: 5px;
    font-family: "Trebuchet MS";
  }
  </style>
  

</head>
<body>
<div class="navbar-wrapper bigEntrance">
      <div class="nav-container">
        <div class="navbar navbar-inverse navbar-static-top " role="navigation">
            <div class="main-nav">
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav foo1">
                  <li class="mywidth"><a href="index.php">Home</a></li>
                  <li class=" active mywidth"><a href="contact.php">Contact</a></li>
                  <!-- <li class="mywidth"><a href="pages/veri/html.html">Email verification</a></li> -->
                  <li class="mywidth"><a href="about.php">About</a></li>
                </ul>
<!--                 <ul class="nav navbar-nav navbar-right">
                  <li class="foo2"><a href="" data-toggle="modal" data-target="#myModal">Login</a></li>
                  <li class="foo2"><a href="" data-toggle="modal" data-target="#myModal1">Signup</a></li>
                </ul>
 -->              </div>
            </div>
            <div class="navbar-header brand">
              <a class="navbar-brand" href="index.php">ProfferSys</a>
            </div>
          <!-- </div> -->
        </div>
      </div>
    </div>


<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>ProfferSys, Inc.</strong><br>
                A-10 ,Sector 62<br>
                Noida, India<br>
                226016 <br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">admin@proffersys.in</a>
            </address>
            </form>
        </div>
    </div>
</div>
                    <!-- <button  class="btn btn-prime "> <a href="../index.php" colour="red">Back to site ProfferSys</a></button> -->

</body>
</html>
