<!DOCTYPE html>
<html>
	<head>
<title>Granit</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<!--<meta http-equiv="Content-Security-Policy" content="default-src *; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval'http://api.openweathermap.org/data/2.5/weather?q=Kyiv&APPID=42b614437754a4ec7c704604e2a3f97f ">-->
		
		<!--<script type="text/javascript" src="jquery.js"></script>-->
        

       <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->


<style type="text/css">
//body{background-color:#DCDCDC;/* grey ;   #ffff00*/; /} 
ul{list-style-type: none;}
h1{font-size:28px;color:white;/*margin-left:22px;*/border:2px solid white; width:97%;margin-bottom:22px;background-color:grey;opacity:90%;}
h2{width:40%;background-color:grey;border:1px solid white;color:white;font-size:14px;}
a {font-size:14px;color:white;/*-webkit-text-stroke: 1px black;-webkit-text-fill-color: white;*/-webkit-transition: font-size  0s;transition: font-size 0.2s;}
a:hover{color:white; font-size:15px;font-weight:bold; -webkit-text-stroke: 1px white;}
#l{font-size:14px;color:white;}
li{width:65%;border:2.5px solid white;padding:5px;margin-bottom:18px;border-radius:22px;background-color:grey;opacity:90%;-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);}

.shadow{-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);}




body {background: -moz-linear-gradient(top, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=0 ); 
}

#links ul li {display: inline; margin-left:15px;} //pages
a:active { background-color:red;}
a:visited {background-color:black;}
.current{background-color:red;}//not  implemented
</style>

	</head>





	<body>




<!-----------------------------START SAVING IP, time  and  date------------------------------------------------------------->
<?php
//saving  date  and  time 
//add Chrome  to autostart
//SAVE  IPLIST
date_default_timezone_set("Europe/Kiev");
$ip=$_SERVER['REMOTE_ADDR'];//ip adress
$fileIP = "ipTrack.txt";
$date=date("d.m.y.H:i");
$Saved_File = fopen($fileIP, 'a');
fwrite($Saved_File,$date.'----- '.$ip."\r\n\n"); // add a new line to the  string :)
fclose($Saved_File);
//
?>
<!----------------------------END SAVING IP, time  and  date------------------------------------------------------------------------>







            <center> 

<div id="list">
         <H1 class="shadow">&#1055;&#1088;&#1086;&#1076;&#1072;&#1078;&#1072; &#1080;&#1079;&#1076;&#1077;&#1083;&#1080;&#1081;  &#1080;&#1079;  &#1082;&#1072;&#1084;&#1085;&#1077;&#1081;</H1>
         <H2 class="shadow">&#1053;&#1080;&#1082;&#1086;&#1083;&#1072;&#1081; +380974953684</H2>

                <!--
		<ul>
                       <li><a href="images/nophoto.jpg"> <img src="images/nophoto.jpg" alt="&#1072;&#1083;&#1100;&#1090;&#1077;&#1088;&#1085;&#1072;&#1090;&#1080;&#1074;&#1085;&#1099;&#1081; &#1090;&#1077;&#1082;&#1089;&#1090;"></a></br><p>&#1062;&#1077;&#1085;&#1072; 99999UAH;</p></li>
                       <li> <img src="images/nophoto.jpg" alt="&#1072;&#1083;&#1100;&#1090;&#1077;&#1088;&#1085;&#1072;&#1090;&#1080;&#1074;&#1085;&#1099;&#1081; &#1090;&#1077;&#1082;&#1089;&#1090;"></br><p>&#1062;&#1077;&#1085;&#1072; 99999UAH;</p></li>
                       <li> <img src="images/nophoto.jpg" alt="&#1072;&#1083;&#1100;&#1090;&#1077;&#1088;&#1085;&#1072;&#1090;&#1080;&#1074;&#1085;&#1099;&#1081; &#1090;&#1077;&#1082;&#1089;&#1090;"></br><p>&#1062;&#1077;&#1085;&#1072; 99999UAH;</p></li>
                       <li> <img src="images/nophoto.jpg" alt="&#1072;&#1083;&#1100;&#1090;&#1077;&#1088;&#1085;&#1072;&#1090;&#1080;&#1074;&#1085;&#1099;&#1081; &#1090;&#1077;&#1082;&#1089;&#1090;"></br><p>&#1062;&#1077;&#1085;&#1072; 99999UAH;</p></li>
                      <li> <img src="images/nophoto.jpg" alt="&#1072;&#1083;&#1100;&#1090;&#1077;&#1088;&#1085;&#1072;&#1090;&#1080;&#1074;&#1085;&#1099;&#1081; &#1090;&#1077;&#1082;&#1089;&#1090;"></br><p>&#1062;&#1077;&#1085;&#1072; 99999UAH;</p></li>
                       
                </ul>
</div> -->    
<!-- END  LIST  div-->

  



<!--  gallery Display Controller-->
<?php
// **************************************************************************************
// **************************************************************************************
// **                                                                                  **
include("models/LoadImages.php");

//call  the  function
    //$a= new LoadImages();
    //$a->printIMG("images/test/");

if (empty($_GET)) {LoadImages::printIMG("images/folder1/");}
if($_GET['page']==2){LoadImages::printIMG("images/folder2/");}
if($_GET['page']==3){LoadImages::printIMG("images/folder3/");}
if($_GET['page']==4){LoadImages::printIMG("images/folder4/");}
if($_GET['page']==5){LoadImages::printIMG("images/folder5/");}
if($_GET['page']==6){LoadImages::printIMG("images/folder6/");}

// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************



?>
<!-- END    gallery  function-->



















<!-- navigate  pages-->
         <div id  ="links">
              <ul>
                   <li><a href="/kamni"/>1</a></li>
                   <li><a href="/kamni/?page=2"/>2</a></li>
                   <li><a href="/kamni?page=3"/>3</a></li>
                   <li><a href="/kamni?page=4"/>4</a></li>
                   <li><a href="/kamni?page=5"/>5</a></li>
                   <li><a href="/kamni?page=6"/>6</a></li>
              </ul>
              <p>&#1089;&#1090;&#1088;&#1072;&#1085;&#1080;&#1094;&#1072;
                <?php 
// **************************************************************************************
// **************************************************************************************
// **                                                                                  **                    
                    include("models/ShowPage.php");
                    ShowPage::ShowPages();
// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************
                ?>
              </p>
         </div>
<!-- END  navigate  pages-->




<!--map-->
<div>
<h1 class="shadow" style="color:black;">&#1057;&#1093;&#1077;&#1084;&#1072; &#1087;&#1088;&#1086;&#1077;&#1079;&#1076;&#1072;</h1>
<h5>&#1085;&#1072; &#1090;&#1077;&#1088;&#1088;&#1080;&#1090;&#1086;&#1088;&#1080;&#1080;  &#1082;&#1086;&#1084;&#1087;&#1083;&#1077;&#1082;&#1089;&#1072; "&#1060;&#1080;&#1083;&#1100;&#1074;&#1072;&#1088;&#1086;&#1082;(120 &#1082;&#1084; &#1090;&#1088;&#1072;&#1089;&#1089;&#1099; &#1050;&#1080;&#1077;&#1074;-&#1063;&#1086;&#1087; )</h5><!--map   route-->
<iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d5098.4544038819695!2d28.88744587498723!3d50.28768662086294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d50.287542699999996!2d28.893765199999997!5e0!3m2!1sru!2sua!4v1456735294988" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sru!2sua!4v1456730990723!6m8!1m7!1sWRbuKLE7VRYlPuqdG3M40w!2m2!1d50.2878955035128!2d28.8943148692289!3f206.35783474516168!4f-20.32405973135363!5f0.4000000000000002" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- END MAP-->            
     
<div id="footer">
</br></br>
<H4 class="shadow">2016  All  rights  reserved</br>2016 </H3>
</div>       
</center>
	</body>
</html>
