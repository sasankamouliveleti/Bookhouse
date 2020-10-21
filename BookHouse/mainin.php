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
        <li><a class="waves-effect waves-light btn modal-trigger" href="books.php">Books </a></li>
            <li><a class="waves-effect waves-light btn modal-trigger" href="logout_script.php">Log Out </a></li>



        </ul>

        <ul id="nav-mobile" class="side-nav list-hover-slide">
            <li><a href="sign.php">Sign Up</a></li>
            <li><a href="Admin.php">Adim Login</a></li>
            <li><a href="user.php">User Login</a></li>

        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>

</nav>


<div class="slider">
    <ul class="slides">
        <li>
            <img src="kl.jpg"> <!-- random image -->

        </li>
        <li>
            <img src="2nd.jpg"> <!-- random image -->
            <div class="caption left-align">
                <h3>Books are like friends.</h3>
                <h5 class="light grey-text text-lighten-3">We learn a lot from them.</h5>
            </div>
        </li>
        <li>
            <img src="3rd.jpg"> <!-- random image -->
            <div class="caption right-align">
                <h3>So many books, so little time</h3>
                <h5 class="light grey-text text-lighten-3">We are here to help you with this.</h5>
            </div>
        </li>
        <li>
            <img src="4th.jpg"> <!-- random image -->
            <div class="caption center-align">
                <h3>Books are a uniquely portable magic.</h3>
                <h5 class="light grey-text text-lighten-3">We bring in Magic</h5>
            </div>
        </li>
    </ul>
</div>

<h3 style="text-align: center">About Us</h3>
<hr></hr>
<p style="text-align: center">BookHouse  is an Indian electronic commerce company with headquarters in NewDelhi. It is the largest Internet-based retailer in India. BookHouse started as an online blog, but soon diversified, and is one of the best online book borrower. BookHouse also offers certain low-end products like child stories and other special ones.
                              								BookHouse has separate retail websites for India, United Kingdom & Ireland, France, Canada, Germany, Italy, Spain, the Netherlands, Australia, Brazil, Japan, China, India and Mexico. Amazon also offers international shipping to certain other countries for some of its products.</p>
<p style="text-align: center">The company was founded in 2017, spurred by what x called his "Initiating framework", which described our efforts as an initiate to participate in the Internet business boom during that time. In 1998, Velos left his employment as president of Ofcol & Co. and moved to Seattle. He began to work on a business plan for what would eventually become E- Store.</p>
<p style="text-align: center">BookHouse received its 3rd round of funding of $133 million on Feb-2017. The 3rd round of funding was led by daksh with all the current institutional investors, including Kalaari Capital, Venture Partners, Bessemer Venture Partners all participating.</p>
<div class="container">
    <div class="section">


      </div>

</div>
<br><br>

<div class="section">

</div>
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
                    <li><a class="white-text" href="logout_script.php">Log Out</a></li>
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
             <a class="teal darken-4" href="mainin.php">BookHouse</a>
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
