<!DOCTYPE html>
<html lang="en">
<title>
    Book House
</title>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="c.css" type="text/css"/>



</head>
<body >

<nav class="  teal darken-4  " role="navigation">


    <div class="nav-wrapper container"><a id="logo-container" href="mainin.php" class="brand-logo">Book House</a>

        <ul class="right hide-on-med-and-down list-hover-slide">
            <li><a class="waves-effect waves-light btn modal-trigger" href="logout_script.php">Log Out </a></li>



        </ul>

        <ul id="nav-mobile" class="side-nav list-hover-slide">
            <li><a href="sign.php">Sign Up</a></li>
            <li><a href="Admin.php">Admin Login</a></li>
            <li><a href="user.php">User Login</a></li>

        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>

</nav><br>
<br>
<br>
<div style="text-align: center">
<h4>The Books in Stock </h4>
<ul>
 <li>How to train a dragon</li>
 <li>Atlas Shrugged</li>
 <li>The Fountainhead</li>
 <li>Battlefield Earth</li>
 <li>The Lord Of The Rings</li>
 <li>To Kill A Mockingbird</li>
 <li>We The Living</li>
 <li>Mission Earth</li>
 <li>BRAVE NEW WORLD</li>
 <li>TO THE LIGHTHOUSE</li>
 <li>The Invisible Man</li>
 <br>
 <br>
 <br>
 <p>These have to be updates soon!!<p>
</div>

<footer class="page-footer teal darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">BookHouse</h5>
                <p class="grey-text text-lighten-4">We are a Firm very much for our customers</p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Quick Links</h5>
                <ul>
                    <li><a class="white-text" href="sign.php">Sign Up</a></li>
                    <li><a class="white-text" href="Admin.php">Admin Login</a></li>
                    <li><a class="white-text" href="user.php   ">User Login</a></li>
                    <li><a class="white-text" href="adminsign.php   ">Admin User Login</a></li>
                    <div id="share-buttons">



                </ul>
                </div>
                <div class="col l3 s12">
                <h5 class="white-text"> Share Options </h5>
                <table>
                				<tr>
                					<td><a href="https://plus.google.com/u/0/"><img width="30px" src="google.jpg"></a></td>
                					<td><a href="http://www.youtube.com" target="_blank"><img width="30px" src="youtube.jpg"></a></td>
                					<td><a href="https://www.facebook.com/" target="_blank"><img width="30px" src="facebook.jpg"></a></td>
                					<td><a href="https://twitter.com/" target="_blank"><img width="30px" src="twitter.jpg"></a></td>
                				</tr>
                			</table>
                			</div


        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
             <a class="teal darken-4" href="main.php">BookHouse</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script type="text/javascript">$(document).ready(function(){
    $('.slider').slider();
});</script>
<script>$('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrain_width: true,
        hover: false,
        gutter: 0,
        belowOrigin: false
    }
);</script>



</body>
</html>
