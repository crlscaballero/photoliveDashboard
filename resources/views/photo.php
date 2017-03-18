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
    @import url("//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap-glyphicons.css");
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
            <div class="col-md-12">
                <div class="forstyle" style="margin-left: 640px;">
                <div class="btn-group">
                    <button type="button" class="btn btn-info btn-sm" style="width:130px;">Upload</button>
                    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    </button>
                    
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Photo</a></li>
                        <li><a href="#">Album</a></li>
                    </ul>
                
                <div class="input-group" style="margin-left: 120px;">
                    <input type="text" class="form-control" placeholder="Search" name="q" style="border-radius: 30px 0px 0px 30px; width: 250px; height:30px;">
                        <button class="btn btn-info" type="submit" style="border-radius: 0px 30px 30px 0px;
                        height:30px;"><i class="glyphicon glyphicon-search"></i></button>
                </div>
                </div>
                </div>
            </div>
            </div>

            <div class="row">
            <div class="col-md-12" style="">
                <div class="panel panel-default center-block" style="margin-top:10px; width: 850px; height:425px;">
                    <div class="panel-heading">Photos</div>
                    <div class="panel-body" style="  height:382px; overflow-y:scroll;">
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
