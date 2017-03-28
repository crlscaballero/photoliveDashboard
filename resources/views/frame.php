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
                <li><a href="photo"><img id="imge" src="img/photoq.png"/>&nbsp &nbsp Photos</a></li>
                <li><a href="frame" id="dis"><img id="imge" src="img/frameq.png"/>&nbsp &nbsp Frames</a></li>
                <li><a href="contact"><img id="imge" src="img/contactq.png"/>&nbsp &nbsp Contacts</a></li>
                <li><a href="about"><img id="imge" src="img/aboutq.png"/>&nbsp &nbsp About</a></li></ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="row">
                <div class="col-md-12" style="">
                <div class="panel panel-default center-block" style="margin-top:10px; width: 850px; height:425px;">
                    <div class="panel-heading" style="background-color: #e5e7ea; font-size: 23px; color: #24b7f2;">FRAMES</div>
                    <div class="panel-body" style="  height:382px; overflow-y:scroll; background-color: #d7dce5;">
                    <div class="text-center">
                    <button data-toggle="modal" data-target="#myModal" style="background-image: url(img/frame_sample.png); background-color:#424242; width: 150px; height: 200px; border-style: none;  "></button>
                    <button data-toggle="modal" data-target="#myModal" style="background-image: url(img/frame_sample1.png); background-color:#424242; width: 150px; height: 200px; border-style: none;"></button>
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

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width: 830px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="height:530px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
            <img class="img-responsive" src="img/imgpreview.png">
            <button class="center-block" style="background-image:url(img/btn_choose.jpg); width:200px; height:40px; border-style: none; margin-top: -50px;"></button>
        </div>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>