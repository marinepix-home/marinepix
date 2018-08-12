<?php require_once('Connections/mydb.php'); ?>
<?php

$myconnection = mysqli_select_db($mydb, $database_mydb);

$sql = "SELECT * from analytics WHERE id=1";
if ($results = mysqli_query( $mydb, $sql))
{
  $rowcount=mysqli_num_rows($results);
  if ($rowcount == 0)  {
    $sql = "INSERT INTO analytics (visits) VALUES (1)";
    $insertValue = mysqli_query( $mydb, $sql);
  }
}

$sql = "UPDATE analytics SET visits = visits + 1 WHERE id=1";
$Recordset1 = mysqli_query( $mydb, $sql) or die(mysqli_error($mydb));
if( !$Recordset1 ) {



}
mysqli_close($mydb);
?>
<!DOCTYPE HTML>
<HTML >
<HEAD>
<meta name="viewport" content="width=device-width">
<TITLE>MarinePix               Underwater Photography</TITLE>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<LINK href="http://www.marinepix.co.uk/res/css/slideshow.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://www.marinepix.co.uk/res/css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://www.marinepix.co.uk/res/theme/supersized.shutter.css" type="text/css" media="screen" />
<LINK href="http://www.marinepix.co.uk/res/css/responsivemenus.css" rel="stylesheet" type="text/css">


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.marinepix.co.uk/res/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="http://www.marinepix.co.uk/res/js/supersized.3.2.7.js"></script>
<script type="text/javascript" src="http://www.marinepix.co.uk/res/theme/supersized.shutter.min.js"></script>
<script type="text/javascript">

    jQuery(function($){

        $.supersized({

            // Functionality
            slide_interval          :   3000,		// Length between transitions
            transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed		:	700,		// Speed of transition

            // Components
            slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
            slides 					:  	[			// Slideshow Images
										{image : 'http://www.marinepix.co.uk/images/slideshow/8.jpg', title : 'Image Credit: Rob White', thumb : 'http://www.marinepix.co.uk/images/slideshow/8.jpg', url : 'http://www.marinepix.co.uk/seals/'},
										{image : 'http://www.marinepix.co.uk/images/slideshow/9.jpg', title : 'Image Credit: Rob White', thumb : 'http://www.marinepix.co.uk/images/slideshow/9.jpg', url : ''},
										{image : 'http://www.marinepix.co.uk/images/slideshow/10.jpg', title : 'Image Credit: Rob White', thumb : 'http://www.marinepix.co.uk/images/slideshow/10.jpg', url : ''},
										{image : 'http://www.marinepix.co.uk/images/slideshow/11.jpg', title : 'Image Credit: Rob White', thumb : 'http://www.marinepix.co.uk/images/slideshow/11.jpg', url : ''},
										{image : 'http://www.marinepix.co.uk/images/slideshow/12.jpg', title : 'Image Credit: Rob White', thumb : 'http://www.marinepix.co.uk/images/slideshow/12.jpg', url : ''},
										{image : 'http://www.marinepix.co.uk/images/slideshow/13.jpg', title : 'Image Credit: Rob White', thumb : 'http://www.marinepix.co.uk/images/slideshow/13.jpg', url : ''},
										{image : 'http://www.marinepix.co.uk/images/slideshow/14.jpg', title : 'Image Credit: Rob White', thumb : 'http://www.marinepix.co.uk/images/slideshow/14.jpg', url : ''},
										{image : 'http://www.marinepix.co.uk/images/slideshow/15.jpg', title : 'Image Credit: Rob White', thumb : 'http://www.marinepix.co.uk/images/slideshow/15.jpg', url : ''},
										{image : 'http://www.marinepix.co.uk/images/slideshow/16.jpg', title : 'Image Credit: Rob White', thumb : 'http://www.marinepix.co.uk/images/slideshow/16.jpg', url : ''},
                                        ]

        });
    });

</script>
</head>
<style type="text/css">
ul#demo-block {
	margin:0 15px 15px 15px;
}
ul#demo-block li {
	margin:0 0 10px 0;
	padding:10px;
	display:inline;
	float:left;
	clear:both;
	color:#aaa;
	background:url('http://www.marinepix.co.uk/res/img/bg-black.png');
	font:11px Helvetica, Arial, sans-serif;
}
ul#demo-block li a {
	color:#eee;
	font-weight:bold;
}
</style>

<body>

<?php include("mainpageheader.php"); ?>

<!--Control Bar-->
<div id="controls-wrapper" class="load-item">
          <div id="controls"> <!--<a id="play-button"><img id="pauseplay" src="http://www.marinepix.co.uk/res/img/pause.png"/></a> -->

    <!--Slide counter
    <div id="slidecounter"> <span class="slidenumber"></span> / <span class="totalslides"></span> </div>-->

    <!--Slide captions displayed here
    <div id="slidecaption"></div>-->

    <!--Thumb Tray button
    <a id="tray-button"><img id="tray-arrow" src="http://www.marinepix.co.uk/res/img/button-tray-up.png"/></a> -->

    <!--Navigation-->
    <ul id="slide-list" style="padding-top:15px;">
            </ul>
  </div>
        </div>
</body>
</html>
