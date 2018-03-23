<!doctype html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            
                $("a").on('click', function(event) {
                    if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({scrollTop: $(hash).offset().top}, 800, function(){window.location.hash = hash;});
                } 
            });
            });
        </script>

        <style type="text/css">
        *{

        }
            body { padding-top: 50.5px; }

            .jumbotron {
                color: #2c3e50;
                background: #ecf0f1;

            }
            .navbar-inverse {
                background: #2c3e50;
                color: white;
            }
            .navbar-inverse .navbar-brand, .navbar-inverse a{
                color:white;
            }
            .navbar-inverse .navbar-nav>li>a {
                color: white;
            }
        </style>
        <script src="js/jquery.ui.totop.js"></script>



</head>
<body>

<div class="back" >
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand"><span class="glyphicon glyphicon-picture"></span> <EM><B>FBC<EM><B></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-nav-demo">
                        <ul class="nav navbar-nav">
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#hero">Home</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#services">Services</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#faq">FAQs</a></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#aboutus">About Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="lo_sgup.php">Sign Up/Login</a></li>
                        
                    </ul>
                    </div>
                </div>
            

</body>
</html>