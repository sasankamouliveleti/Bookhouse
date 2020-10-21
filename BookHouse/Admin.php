<html>
<title>
    Admin Login
</title>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
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
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        body {
            background: #fff;
        }

        .input-field input[type=date]:focus + label,
        .input-field input[type=text]:focus + label,
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
            color: #e91e63;
        }

        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
            border-bottom: 2px solid #e91e63;
            box-shadow: none;
        }
    </style>
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
<div class="section"></div>
<main>
    <center>
        <a href="main.html">
        <img class="responsive-img" style="width: 250px;"  href="main.html"   src="book1.png" />
        </a>
        <div class="section"></div>

        <h3 class="indigo-text">Admin Login</h3>
        <div class="section"></div>

        <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                <form role="form" action="login_scriptad.php" method="POST">
                							<div class="form-group">
                								<input type="email" class="form-control"  placeholder="Email" name="e-mail" required="true">
                							</div>
                							<div class="form-group">
                								<input type="password" class="form-control" placeholder="Password" name="password" required="true">
                							</div>
                						    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                						</form>
            </div>
        </div>
        <a href="adminsign.php">Create account</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
</main>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>