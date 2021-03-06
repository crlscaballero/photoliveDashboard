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
                <li><a href="event" id="dis"><img id="imge" src="img/eventq.png"/>&nbsp &nbsp Events</a></li>
                <li><a href="photo"><img id="imge" src="img/photoq.png"/>&nbsp &nbsp Photos</a></li>
                <li><a href="frame"><img id="imge" src="img/frameq.png"/>&nbsp &nbsp Frames</a></li>
                <li><a href="contact"><img id="imge" src="img/contactq.png"/>&nbsp &nbsp Contacts</a></li>
                <li><a href="about"><img id="imge" src="img/aboutq.png"/>&nbsp &nbsp About</a></li></ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="row">
                <div class="col-md-12" style="">
<div class="container">
  <h2>EVENTS</h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>VENUE</th>
        <th>PERSON IN CHARGE</th>
        <th>EMAIL</th>
        <th>DETAILS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bonifacio Global City</td>
        <td>Allan Cruz</td>
        <td>allan.Allan@medix.com</td>
        <td>Team Building - 3:00pm - March 20, 2017</td>
      </tr>
      <tr>
        <td>Gateway Mall</td>
        <td>Beatrice Santos</td>
        <td>bea.Bea@medix.com</td>
        <td>PCOMS - 10:00am - April 15, 2017</td>
      </tr>
      <tr>
        <td>Shangri-La Mall</td>
        <td>Carlos Saclolo</td>
        <td>carlos.Carlos@medix.com</td>
        <td>Adidas - 1:00pm - May 15, 2017</td>
      </tr>
    </tbody>
  </table>

        <div class="pull-right">
            <button class="btn btn-info" data-toggle="modal" data-target="#addModal" style="width:130px;">Add</button>
            <button class="btn btn-info" style="width:130px;">Edit</button>
            <button class="btn btn-info" style="width:130px;">Delete</button>
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

<div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
    <div class="container">    
        <div id="loginbox" style="margin-top:50px; width: 600px;">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Add Event</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Venue">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Person in charge">
                            </div>
                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Email">
                            </div> 

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Details">
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Date">
                            </div>        

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="#" class="btn btn-info pull-right"> Save </a>
                                    </div>
                                </div>   
                            </form>   
                        </div>                     
                    </div>  
        </div>
      </div>
      
    </div>
  </div>

    </div>
    </body>
</html>