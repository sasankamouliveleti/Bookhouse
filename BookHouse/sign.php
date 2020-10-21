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
<body>
<nav class="  teal darken-4  " role="navigation">


    <div class="nav-wrapper container"><a id="logo-container" href="pre.php" class="brand-logo">Book House</a>

        <ul class="right hide-on-med-and-down list-hover-slide">
            <li><a class="waves-effect waves-light btn modal-trigger" href="sign.php">Sign Up</a></li>



            <li><a class="waves-effect waves-light btn modal-trigger" href="Admin.php">Admin</a></li>
            <li><a class="waves-effect waves-light btn modal-trigger" href="user.php">User</a></li>

        </ul>

        <ul id="nav-mobile" class="side-nav list-hover-slide">
            <li><a href="sign.php">Sign Up</a></li>
            <li><a href="Admin.php">Adim Login</a></li>
            <li><a href="user.php">User Login</a></li>

        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>

</nav>
<div class="row decor_row">
    <div class="container">

        <div class="center">
            <h4>SIGN UP</h4>
            <form  action="signup_script.php" method="POST">
                <div class="form-group">
                    <input class="form-control" placeholder="Name" name="name" required="true">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required="true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Contact" name="contact" required="true" onkeypress="phoneno()" maxlength="10">
                </div>
                <div class="form-group">
                    <input class="form-control"  placeholder="City" name="city" required="true">
                </div>
                <div class="form-group">
                    <input class="form-control"  placeholder="Address" name="address" required="true">
                </div>
                <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
    </div>
   <br>
   <br>
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

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>
           function phoneno(){
            $('#phone').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }
       </script>


</body>
</html>