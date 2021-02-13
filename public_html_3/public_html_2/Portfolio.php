<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="shortcut icon" href="https://lh3.googleusercontent.com/do9RR_X3PLfHV2FpkPrqBi4FDoYim56B4mHe43yl-h6GwHYB2r4AsVSDXGdh3VTxweBuzKJM5lDdskmlmN678PR5Z0gGqSC7nMYWB9vpNTK-byiZtd5rJkLXm_0pxEqZkn_eq2FQXQ=w2400">
    <style>
        body{
            background: black;
        }
        
        h6{
            color: white;
        }

        #myVideo {
             position: fixed;
             right: 0;
             bottom: 0;
             /* min-width: 100%;
             min-height: 100%; */
             min-height: 100vh;
             min-width: 100vw;

             z-index: -1;
        }

        .title{
            background-color: rgba(0,0,0,0.5);
            color: white;
            margin: 14vh 8vw;
            padding: 75px 50px;
        }

        h1{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 8vw;
        }

        h2{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 3vw;
        }

        .black{
            height: 60px;
            min-width: 100%;
            background-color: black;
            position: fixed;
            z-index: 1;
            margin: 0px;
            top: 0px;
        }

        nav{
            background-color: black;
            height: 60px;
            min-width: 100%;
            margin: 0px;
            position: fixed;
            top: 0px;
            left: 0px;
            justify-content: space-between;
            box-sizing: border-box;
            display: flex;
            padding: 0px 20px; 
            z-index: 2;
        }

        .navbar{
            /* background-color: black; */
            height: 60px;
            min-width: 13%;
            margin: 0px;
            position: fixed;
            top: 0px;
            right: 0px;
            justify-content: space-between;
            box-sizing: border-box;
            display: flex;
            padding: 0px 20px;
            z-index: 5;
            }

        a:link{
            color: white;
            font-size: 2vw;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            text-emphasis: bold;
            display: inline-block;
        }

        a:active{
            color: white;
            font-size: 2vw;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            text-emphasis: bold;
            display: inline-block;
        }

        a:hover{
            color: white;
            font-size: 2vw;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            text-emphasis: bold;
            display: inline-block;
        }

        a:visited{
            color: white;
            font-size: 2vw;
            font-family: Arial , Helvetica, sans-serif;
            text-decoration: none;
            text-emphasis: bold;
            display: inline-block;
        }

        nav ul li{
            list-style-type: none;
            align-items: center;
            display: inline-flex;
            position: relative;
            justify-content: center;
            margin: 0px 20px;
            word-spacing: 20px;
        }

        .divy img{
            margin: 10px 20px;
        }

        .vl{
            border-left: 5px solid white;
            height: 50px;
            margin: 0px;
        }

        .websites{
            background-color: rgba(73, 12, 53, 0.8);
            margin: 4vh 8vw;
            padding: 5px 50px;
        }

        .games{
            background-color: rgba(73, 12, 53, 0.8);
            margin: 4vh 8vw;
            padding: 5px 50px;
        }

        p{
            font-size: 8vw;
            color: white;
            margin: 0px;
        }

        img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
            display: none;
        }

        div.icons a{
            margin: 20px;
            display: inline-block;
            font-size: 32px;
            border: black 5px;
            /* border-radius: 25%; */
            box-shadow: 0px, 0px, 50px, #5f175f;
        }

        div.icons a:hover{
            margin: 20px;
            opacity: 1;
            border: black 5px;
            /* border-radius: 25%; */
            box-shadow: 0px, 0px, 50px, #5f175f;
        }

        div.icons img{
            margin: 20px;
            display: inline-block;
            font-size: 32px;
            border: solid black 5px;
            border-radius: 25%;
            box-shadow: 0px, 0px, 50px, #5f175f;
        }

        h5{
            font-size: 8vw;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            text-emphasis: bold;
            margin-top: 50px;
            background: rgba(73, 12, 53, 0.8);
            margin: 0px 30%;
            border-bottom: solid purple 5px;
        }

        input{
            font-size: 2vw;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            text-emphasis: bold;
            margin: 10px;
            background: rgba(73, 12, 53, 0.8);
            border-left: solid purple 3px;
            border-bottom: solid purple 3px;
            width: 80%;
        }

        input:active{
            font-size: 2vw;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            text-emphasis: bold;
            margin: 10px;
            background: rgba(73, 12, 53, 0.8);
            border: solid purple 3px;
            width: 80%;
        }

        form{
            background: rgba(73, 12, 53, 0.8);
            margin: 0px 30%;
        }

        textarea{
            font-size: 2vw;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            text-emphasis: bold;
            margin: 10px;
            background: rgba(73, 12, 53, 0.8);
            border-left: solid purple 3px;
            border-bottom: solid purple 3px;
            resize: none;
            overflow: auto;
            width: 80%;
        }

        #btn{
            width: 30%;
        }
        
        #mine{
            z-index: 999999999999999999999;
            position: absolute;
        }

.preloader {
position: absolute;
top: 0;
left: 0;
bottom:0;
right:0;
width: 100%;
height: 100vh;
z-index: 99999999;
background-image: url(''); /* your icon gif file path */
background-repeat: no-repeat;
background-position: center;
}




        .loader{
            margin: 0;
            padding: 0;
            position: fixed;
            top: 0;
            left: 0;
            background-color: black;
            height: 100%;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999999999999999999;
            overflow: hidden;
        }

        .disspear{
            animation: vanish 11s forwards;
        }

        @keyframes vanish{
            100%{
                opacity: 1;
                visibility: hidden;
            }
        }

    </style>
</head>
<body>
                <script src="https://code.responsivevoice.org/responsivevoice.js?key=2AGNuDuO"></script>
                
    <div class="loader">
        <video  controls allow="autoplay" id="myothervideo">
            <source src="intro.mp4" type="video/mp4">
        </video>
    </div>
    
    <script>
var video = document.getElementById("intro.mp4");
video.autoplay = true;
video.load();     
    </script>
    
   
    
    <!--<audio autoplay>
            <source src="intrro.mp3" type="audio/mp3">
    </audio>-->

    <script>
        var loader = document.querySelector(".loader")

        window.addEventListener("load", vanish);

        function vanish(){
            loader.classList.add("disspear");
        }
    </script>
    
   <!-- <video autoplay id="mine" min-width="100%" min-height="100%" controls="">
      <source src="intro.mp4" type="video/mp4">
    </video>
    
        <div id="videoEnd" style="display:none">Video end</div> -->
    
    <script>
         function preloaderFadeOutInit(){
$('.preloader').fadeOut('slow');
$('body').attr('id','');
}
// Window load function
jQuery(window).on('load', function () {
(function ($) {
preloaderFadeOutInit();
})(jQuery);
})
    </script>
    
    <div class="black"></div>

      <video autoplay muted loop id="myVideo">
        <source src="video.mp4" type="video/mp4">
      </video>

    <nav>

        <div class="divy">
           <img src="https://lh3.googleusercontent.com/Fhw5ERvbTxSD_wveRt17to7GnKyUXuOjmYY9iOVho7NKXdLho71eFntZWhPHiVC1Zgr694k7Dxkmyaypywhc-n8oxNLV-YfEuiIOlxrIht48nknc9iK5NYttpabM4712KxSRZIMiFQ=w2400" alt="Logo" height="40" width="40">
        </div>

          <ul>
              <li><a href="#a">Websites</a></li>
              <li><a href="#b">Games</a></li> 
          </ul> 
          
          <ul>
               <li><a href="#c">Contact</a></li>
          </ul>
        </nav>
      
      <center>
          <div class="title">
            <h1 id="demo"></h1>
            <h2 id="demonstration"></h2>
            <script>
        
                function name(){
        
                    var fname = prompt("Please enter your first name:");
                    if (fname == null || fname == ""){
                        txt = "Welcome!";
                        texts = "\n What would you like to see?";
                    } else {
                        txt = "Welcome " + fname + "!";
                        texts = "\n What would you like to see?";
                    }
                    document.getElementById("demo").innerHTML = txt;
                    document.getElementById("demonstration").innerHTML = texts;
                }
        
                name();        
                
        
               
            </script>
        
          </div>

          <div id="a"></div><br>

          <div class="websites">
                <p>Websites</p>
          </div> 
          
          <div class="icons">
          <a href="https://vpartisticexpressions.000webhostapp.com/Art-Home.html"><img src="https://lh3.googleusercontent.com/7mDXW3mfCiCxf_clUQRTn2t7eJ35BGNQljaDo6lPX58Ty23fCLak3tEPpxyje92qFqXV9DVhakDjQx5nmwfAi-_ZjhbF0-u3YgOKFWOAOti6d1i9zhe-fb_2IrIjEcZl6utrWPD7ug=w2400" height="150px"></a>
          <a href="https://w1e2b3s4i5t6e7.000webhostapp.com/Quizzing.html"><img src="https://lh3.googleusercontent.com/cZTrZmWopQYt4s3IQhA-82sgWC8GSCTgFEzLcxx1UON-yfby8bzPHfXu1CMlRNLH8H1O7bd_-48mJA6n85ObDeCGO1wsycbQIXJOLhdY9IJE7_pU6C24UQ_AZnPSmwO-16mb00fZLQ=w2400" height="150px"></a>
          <a href="https://chat-application-php.000webhostapp.com/index.html"><img src="https://lh3.googleusercontent.com/nG8Xyzdg6vR8fTNy7xnZxhnm9b_Pn0kYMD6kxE8b4HyWYReQdk276ZuSqjkDTCrcszOc49iksH6SZrWKhTdAskfQ5fcSn_dBDJJdChwW_msN7kUt5CMob3U01Sif70O-tcXxdwyGBQ=w2400" height="150px"></a>
          </div>

         <div id="b"></div><br>

          <div class="games" id="b">
                <p>Games</p>
          </div>
          <div class="icons">
          <a href="Fall Game.html"> <img src="https://lh3.googleusercontent.com/9Kex2BdEBDs1J9zUXig_BqJXONnCsE8xHmdqqHR5621jNnaCFTcV76dmFY5AgPiK_HL9X5dNK3DPUoaxEO42rfmL2IxCJOkPAJMgixjemUgsSDCb0D7XZZqUQ_-jc6SIYYMK366PAw=w600-h315-p-k" height="150"/> </a>
          <a href="pacman.html"> <img src="https://lh3.googleusercontent.com/BUXmPFfBoxpG9-l8iAxdW7xSoekYI0W56D77YYzy1dndIaa3dMf4JG5u5_lXA_WC4kCEU4cKRpp3RiVzIrynKc4p0KaTD7oAX3UjlKQNSaidRsN5fiZ09WxgfFp1iqsw1qdGVDH-kg=w600-h315-p-k" height="150"/> </a>
          </div>

          <div id="animal"></div><br>

          <br><br><br><br>

          <h5 id="c">Contact<br></h5>
          <form action="" method="POST"><br>
            <input type="text" name="fname" placeholder="First Name" required="">
            <input type="text" name="lname" placeholder="Last Name" required="">
            <input type="text" name="email" placeholder="Email" required="">
            <textarea type="text" name="message" placeholder="Message..." cols="30" rows="4" required=""></textarea><br>
            <input type="submit" name="btn"><br> <?php

if (isset($_POST['btn'])) {

  $fname = $_POST['fname'];

  $lname = $_POST['lname'];

  $from = $_POST['email'];

  $message = $_POST['message'];
  
  


   
  $to = "MCoder3920.business@gmail.com";
 
  $subject = "Portfolio Form Submission";
  
  $subject2 = "Form Submission";

  $headers = "From: " . $from;
  
  $headers2 = "Hello " . $fname . ",";

  $txt = "You have recieved a message from " . $fname . " " . $lname . ".\n********************************************************************\n\n" . $message . "\n\n";
   
  $txt2 = "     Your message has been sent succesfully! \n\n Thank you,\nMichael Parenti\n" ;
  
  
  
    mail($to, $subject, $txt, $headers);
    
    mail($from, $subject2, $txt2, $headers2); // sends a copy of the message to the sender

    echo "<h4>Thank you " . $fname . ", your message has been sent. We will contact you shortly.</h4>";
   
}
 
?><br>
          </form>

      </center>

</body>
</html>