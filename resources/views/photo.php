<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

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
                <li><a href="dashboard"><img id="imge" src="img/dash.png"/>&nbsp &nbsp Dashboard</a></li>
                <li><a href="client"><img id="imge" src="img/eventq.png"/>&nbsp &nbsp Clients</a></li>
                <li><a href="event"><img id="imge" src="img/eventq.png"/>&nbsp &nbsp Events</a></li>
                <li><a href="photo" id="dis"><img id="imge" src="img/photoq.png"/>&nbsp &nbsp Photos</a></li>
                <li><a href="frame"><img id="imge" src="img/frameq.png"/>&nbsp &nbsp Frames</a></li>
                <li><a href="contact"><img id="imge" src="img/contactq.png"/>&nbsp &nbsp Contacts</a></li>
                <li><a href="about"><img id="imge" src="img/aboutq.png"/>&nbsp &nbsp About</a></li></ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="row">
                <div class="col-md-12" style="">
                </div>
            </div>
        </div>
        
        

        <div class="panel panel-default center-block" style="width: 775px; height:450px; background-color: #d7dce5;">
            <div class="panel-body" style="background-color: #e5e7ea;">
            <div class="btn-group" style="margin-left: 5px;">
                    <button type="button" class="btn btn-primary" style="width:130px;">View By</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Photos</a></li>
                <li><a href="#">Albums</a></li>
            </ul>
                </div>
                <div class="btn-group" style="margin-left: 263px;">
                    <button type="button" class="btn btn-primary" style="width:130px;">Upload</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Photo</a></li>
                <li><a href="#">Album</a></li>
            </ul>
                </div>
                <button type="button" class="btn btn-primary" style="width:130px;">Delete</button>
            </div>
            <div>
            <img class="row center-block" src="img/jewl.jpg" style="position:absolute; z-index:100; margin-top:5px; margin-left: 20px; height: 200px; width: 170px;">
            <img class="row center-block" src="img/padidas.jpg" style="position:absolute; z-index:100; margin-top:5px; margin-left: 200px; height: 200px; width: 170px;">
            <img class="row center-block" src="img/logooo.jpg" style="position:absolute; z-index:100; margin-top:5px; margin-left: 380px; height: 200px; width: 170px;">
            <img class="row center-block" src="img/ppadidas.jpg" style="position:absolute; z-index:100; margin-top:5px; margin-left: 560px; height: 200px; width: 170px;">
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
