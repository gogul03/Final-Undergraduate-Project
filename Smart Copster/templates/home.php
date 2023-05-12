<?php include "sidebar.php" ?>
<meta charset="UTF-8">
    <title></title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    

 
</head> 
<style>
    
.parallax {
    /* The image used */
    background-image: url("bus-people-public-transportation-34171.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    
.parallax1 {
    /* The image used */
    background-image: url("pexels-photo-280310 .jpeg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
   
   
 
       
    
     
     
     
    <!--
    <div>  
       <div class="jumbotron">
          <h2 class="animated bounce">Ruet Vehicle Management</h2>      
          <p>A management system where you can easily manage vehicles.</p>
        </div>
           
       
        
    </div> 
    -->
    <div class="parallax foo">
       
    
        <div class="hero-text" style="font-size:50px text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">
           
            <h1 class="animated rubberBand" >Smart Copster - Traffic Management System</h1>
            <p>A management system where you can easily manage vehicles</p>
            
            
            
          </div>
    </div>                 
    
    <div>
       <br><br>
        <div id="bus_route" class="container">
          <div class="page-header">
            <h1 style="text-align: center">The Station Route</h1>      
          </div> 
          <div class="row">
              <div class="col-md-6 foo">
                <p><b>The ruet bus goes around the rajshahi city in different interval. this is the route of the ruet bus.</b></p>
                <img src="pexels-photo-136739.jpeg" class="img-responsive" >  
              </div>
              <div class="col-md-6">
                  <br>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7921.243759330112!2d79.84622207272855!3d6.935714680310468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ae25926f1022889%3A0x2111d009c3030aaf!2zU3JpIExhbmthIFBvbGljZSBIZWFkcXVhcnRlcnMsIFdSUVcrMzI2LCDgtrTgtr3gt4rgtr3gt5Lgtrog4LeA4LeT4Lav4LeS4La6LCBDb2xvbWJv!3m2!1d6.9376714999999995!2d79.8450206!4m5!1s0x3ae2590f0d6e153d%3A0xf824896b57ff7a0!2sTraffic%20headquarters%20WVM4%2BMG3%20Mihindu%20Mawatha%20Colombo%2001200!3m2!1d6.934149199999999!2d79.8563161!5e0!3m2!1sen!2slk!4v1660793900221!5m2!1sen!2slk" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <p>The Station Route</p>
              </div>
          </div>       
        </div>
        
        <br>
        <div class="page-header">
            <h1 style="text-align: center">Drive Safely</h1>      
        </div>
        <div class="parallax1"></div>
        <div id="driver" class="container">
          
          <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 20px;">The driver of ruet are very punctual and they provides great service. Every one of them is professional and great at their jobs</p>
                  
              </div>
          </div>
               
        </div>
        
        
        <div id="bus" class="container">
          <div class="page-header">
            <h1 style="text-align: center">About </h1>      
          </div> 
          <div class="row">
              <div class="col-md-6">
                
                <img src="pexels-photo-385998.jpeg" class="img-responsive" >  
              </div>
              <div class="col-md-6 foo1">
                  <p style="font-size:20px;"><b>“Smart Copster” is a web application which is mainly focused to construct a platform between the drivers and police personnel. This web application is implemented with the objective of reducing the hazzle paying penalties by travelling to long distance and standing on ques.</b></p>
              </div>
              
          </div>       
        </div>
        
        
          
          <p></p>      
                
        </div>  
        
      
        
        
        
        
    
    
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
    
</body>
</html>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                
					<div class="col-md-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Today Updates on the Offences</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    
                                    <hr>
                                    <div class="stats">
									
                                        <i class="fa fa-clock-o"></i> Welcome
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					   
                               <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Latest</h4>
                                <p class="category">Reported Offences. Please settle the penalty within 23hrs.</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
<?php 
	$result = $db->prepare("SELECT * FROM reported_offence ORDER BY id DESC limit 10");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>                                           
										   <tr>
                                                <td><?php echo $row['offence']; ?></td>
                                                <td class="td-actions text-right">
                                                  <span style="padding:2px; background-color:#1DC7EA; color:#FFF;">  <?php echo $row['date']; ?> </span>
                                                </td>
                                            </tr>
	<?php } ?>
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer style="background-color: #2f2f2f;
          color: #fff; padding-top: 70px;
          padding-bottom: 70px;" class="container-fluid text-center">
                <p>All rights reserved by IAF</p> 
        </footer>
		
<?php include "footer.php"?>

     