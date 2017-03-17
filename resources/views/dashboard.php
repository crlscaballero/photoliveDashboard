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
                <div class="col-md-12 text-center">
                <div class="btn-group">
                	<button class="btn btn-info" style="width:130px;">Clients</button>
                	<button class="btn btn-info" style="width:130px;">Events</button>
                	<button class="btn btn-info" style="width:130px;">Database</button>
                	<button class="btn btn-info" style="width:130px;">Photos</button>
                	<button class="btn btn-info" style="width:130px;">Design</button>
                	<button class="btn btn-info" style="width:130px;">Frames</button>
                </div>
				
				<div class="panel panel-default center-block" style="width: 775px; height:450px;">
  					<div class="panel-body">
  						
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