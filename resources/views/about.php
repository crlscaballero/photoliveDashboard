<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="js/jquery.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<style>
	body{
        background-image:url("../img/bg.jpg");
        background-repeat: no-repeat;
    }
</style>
	<body>
<body>
        <img class="row center-block" src="img/logoh.png" style="position:absolute; z-index:100; margin-top:23px; margin-left: 20px;">
    
    <div class="center-block" style="margin-top:0px;">
        <b class="center-block inline-block">   
        
        <img id="galaw" src="img/Bannerp.jpg">
        </b>  
    </div>

    <div class="center-block inline-block" style="z-index:1000; height:35px; background-color:#e9e9e9;  border-width:5px; border-bottom-style:solid; border-color:#424242;">
        <span id="menu-toggle" style="font-size:25px; margin-left:10px; cursor:pointer; color:#252525;" onclick="openNav()">&#9776;</span>
    </div>
    
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="welcome"><img id="imge" src="img/homeq.png"/>&nbsp &nbsp Home</a></li>
                <li><a href="dashboard" id="dis"><img id="imge" src="img/dash.png"/>&nbsp &nbsp Dashboard</a></li>
                <li><a href="client"><img id="imge" src="img/eventq.png"/>&nbsp &nbsp Clients</a></li>
                <li><a href="event"><img id="imge" src="img/eventq.png"/>&nbsp &nbsp Events</a></li>
                <li><a href="photo"><img id="imge" src="img/photoq.png"/>&nbsp &nbsp Photos</a></li>
                <li><a href="frame"><img id="imge" src="img/frameq.png"/>&nbsp &nbsp Frames</a></li>
                <li><a href="contact"><img id="imge" src="img/contactq.png"/>&nbsp &nbsp Contacts</a></li>
                <li><a href="about"><img id="imge" src="img/aboutq.png"/>&nbsp &nbsp About</a></li></ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="row">
                <div class="col-md-15 text-center">

		<div class="inline-block" style="height:50px; background-color:#e5e7ea;">
             <div class="container">
              <h3 class="h3" style=" margin-left:0px; margin-top: 10px; color: #24b7f2;">
                   ABOUT</h3>
             </div>
        </div>

              <div class="panel panel-default center-block" style="width: 850px; height:450px; background-color: #d7dce5;">
                    <div class="panel-heading" style="background-color: #e5e7ea;">
                                
                    </div>
                    About PhotoLive.
PhotoLive is the easiest, fastest, and safest way to download Facebook photos and albums. 
It works by putting an abstraction layer between the app itself and Facebook. 
Thus, you won't have to...

compromise your account information
or download large bulky software
...to simply save albums.

Photolive makes it ridiculously easy to download your own and your friend's albums with the click of a button. It's also completely free! 

Things you should know before using PhotoLive:
Here are somethings you may want to consider when using PhotoLive.

Use the browser plugins, they are the easiest and fastest way to do this
If you can't or don't wish to use the browser plugins, you'd have to manually type the url of each photo
You can only download Content that you can see on your browser, in other words, if you don't have permission to view certain Content, you can not download it
Make sure all the photos you need are in the albums, because we don't cache or store the photos in our servers so if you missed something you have to do it all over again
You may notice we don't have sign up, login, or login with facebook buttons. This is for privacy reasons, because we don't keep track of or store any activity that can identify any user.
              </div>

				</div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

    </div>
	</body>
</html>