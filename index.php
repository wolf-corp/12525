<!DOCTYPE html>
<html>
<head>
  <script src="js/please-wait.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
  <link href="https://fonts.googleapis.com/css?family=Abel|Titillium+Web|Source+Sans+Pro:700" rel="stylesheet">
  <link rel="icon" href="css/images/icon2t.png" type="image/png">
  <link rel="stylesheet" href="css/actualcss/nav.min.css" type="text/css">
  <link rel="stylesheet" href="css/actualcss/home.min.css" type="text/css">
  <link rel="stylesheet" href="css/actualcss/pages.min.css" type="text/css">
  <link rel="stylesheet" href="css/animate.min.css" type="text/css">
  <link rel="stylesheet" href="css/please-wait.css" type="text/css">
  <link rel="stylesheet" href="js/hint.min.css"></link>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wolf Corp. Robotics (Still updating)</title>
</head>

<body style="margin: 0;" ng-app="myApp">

  <?php
    echo("asdf");
  ?>
  <div ng-controller="landingAndTwoNavs">
    <div class="animated navcover">
      <div class="ncleft">
        <h1 class="title-1"><a href="#">O U R &nbsp;&nbsp;T E A M</a></h1>
        <p class="sub-1"><a href="#">Where We're Headed</a></p>
        <p class="sub-2"><a href="#">Programming</a></p>
        <p class="sub-3"><a href="#">Building</a></p>
        <p class="sub-4"><a href="#">Business</a></p>
        <p class="sub-5"><a href="#">Community</a></p>
      </div>
      <div class="ncmid">
        <h1 class="title-m"><a href="#">H O M E</a></h1>
      </div>
      <div class="ncright">
        <h1 class="title-2"><a href="#">T H E &nbsp;&nbsp;R O B O T</a></h1>
        <p class="sub-1"><a href="#">Our Design</a></p>
        <p class="sub-2"><a href="#">Its Brains</a></p>
        <p class="sub-3"><a href="#">The Structure</a></p>
        <h1 class="title-3"><a href="#">A W A R D S</a></h1>
        <h1 class="title-4"><a href="#">L E T ' S &nbsp;&nbsp; T A L K !</a></h1>
        <h1 class="title-5"><a href="#">S P O N S O R S</h1>
      </div>
    </div>

    <div class="nav">
      <img class="animated fadeInRight menu back" src="css/images/backward.png"></img>
      <img class="animated fadeInRight menu forward" src="css/images/forward.png"></img>
      <img class="animated fadeInRight menu up" src="css/images/up.png"></img>
      <img class="animated fadeInRight menu menu-open" src="css/images/menu.png"></img>
      <img class="animated fadeInRight menu menu-close" src="css/images/close.png"></img>
    </div>

    <div class="front panel" id="front">
      <div class="landing">
        <h1 class="animated fadeIn landtitle">
          {{ landingSmallTitle }} (Still updating)
        </h1>
        <p class="motto glitch" data-text="O O O G A B O O G A">W H E R E</p>
        <p class="motto glitch" data-text="C O M E H E R E B O I">I N S P I R A T I O N</p>
        <p class="motto glitch" data-text="C R O S S E S">C R O S S E S</p>
        <p class="motto glitch" data-text="C O O P E R T I T I O N">C O O P E R T I T I O N</p>
      </div>
      <div class="iconArea">
        <div class="mouse"></div>
        <p>Scroll</p>
      </div>
    </div>
  </div>

  <!-- make background an actual picture-->
  <div class="panel notimed viz">
    <div class="subdiv1">
      <p class="selecttitle f1"><a href="#">O U R &nbsp;&nbsp;T E A M</a></p><!--<br>-->
    </div>
    <div class="small">
      <div class="subdiv2">
        <p class="selecttitle s1"><a href="#">T H E &nbsp;&nbsp;R O B O T</a></li>
      </div>
      <div class="subdiv3">
        <p class="selecttitle t1"><a href="#">A W A R D S</a></p>
      </div>
    </div>
  </div>


  <!-- <video class="panel viz" controls><source class="video" src="css/videos/fillvid.mp4" type="video/mp4"></video> -->

  <div class="panel notimed A a">
    <div class="left">
      <h1 class="title">1 2 5 2 5 &nbsp;- &nbsp;&nbsp;W O L F &nbsp;&nbsp;C O R P</h1>
    </div>
  </div>
    <div class="panel notimed A1">
      <div class="mainimg"></div>
      <div class="ticker"></div>
      <div class="rightside">
        <h1 class="title">O U R&nbsp;&nbsp; M I S S I O N</h1>
        <div class="line"></div>
        <p class="maintext">We are a pack of wolves who love to have fun and work together to become a good role model. We aim to inspire other children to work as a team and get involved in Robotics and STEM Education. This year is our 5th year together as Wolf Corp. We participated in FLL for 4 years, and this our second year in FTC. Our team gained many life skills by learning FIRST Core Values. All of our members are 9th graders attending Walnut High School in Walnut California.</p>
      </div>
    </div>
    <div class="panel notimed A2">
      <div class="leftside">
        <h1 class="title">P R O G R A M M I N G</h1>
        <div class="line"></div>
        <p class="maintext">Programming serves as a key part of the FTC competition, making our robot move based on the controller and also sensors. Our four programmers help develop Java code for Autonomous and TeleOp, bringing us up on top. We practice together, discussing issues and testing prototypes of our programs. In the end, we aim to build a great program to perform our best.</p>
      </div>
      <div class="ticker"></div>
      <div class="rightside">
        <div class="images">
          <img class="imgtopleft" src="css/images/SirLee.jpg"></img>
          <img class="imgtopright" src="css/images/Tesla.jpg"></img>
          <img class="imgbottomleft" src="css/images/Einstein.jpg"></img>
          <img class="imgbottomright" src="css/images/Hawking.jpg"></img>
          <img class="imgbottommiddle" src="css/images/codeicon.png"></img>
        </div>
      </div>
    </div>
    <div class="panel notimed A3">
      <div class="leftside">
        <div class="images">
          <img class="imgtopmiddle" src="css/images/billy.jpg"></img>
          <img class="imgtopleft" src="css/images/SirLee.jpg"></img>
          <img class="imgtopright" src="css/images/Tesla.jpg"></img>
          <img class="imgbottomleft" src="css/images/Einstein.jpg"></img>
          <img class="imgbottomright" src="css/images/Hawking.jpg"></img>
          <img class="imgbottommiddle" src="css/images/wrench.png"></img>
        </div>
      </div>
      <div class="ticker"></div>
      <div class="rightside">
        <h1 class="title">B U I L D I N G</h1>
        <div class="line"></div>
        <p class="maintext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at ultrices lorem, vitae blandit massa. Proin laoreet tristique sem, a semper enim porttitor congue. In sit amet enim accumsan, iaculis neque ac, euismod est. Donec sit amet posuere metus, a faucibus ligula. Duis imperdiet tempor pellentesque. Nullam et rutrum dui, vel tincidunt justo. Integer sed urna imperdiet, mattis odio eu, commodo enim. Aenean aliquet iaculis odio, a egestas turpis volutpat sodales.</p>
      </div>
    </div>
    <div class="panel notimed A4">
      <div class="leftside">
        <h1 class="title">B U S I N E S S</h1>
        <div class="line"></div>
        <p class="maintext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at ultrices lorem, vitae blandit massa. Proin laoreet tristique sem, a semper enim porttitor congue. In sit amet enim accumsan, iaculis neque ac, euismod est. Donec sit amet posuere metus, a faucibus ligula. Duis imperdiet tempor pellentesque. Nullam et rutrum dui, vel tincidunt justo. Integer sed urna imperdiet, mattis odio eu, commodo enim. Aenean aliquet iaculis odio, a egestas turpis volutpat sodales.</p>
      </div>
      <div class="ticker"></div>
      <div class="rightside">
        <div class="images">
          <img class="imgtopmiddle" src="css/images/billy.jpg"></img>
          <img class="imgtopleft" src="css/images/SirLee.jpg"></img>
          <img class="imgtopright" src="css/images/Tesla.jpg"></img>
          <img class="imgbottomleft" src="css/images/Einstein.jpg"></img>
          <img class="imgbottomright" src="css/images/Hawking.jpg"></img>
          <img class="imgbottommiddle" alt="Icon by Mohit Gandhi" src="css/images/business.png"></img>
        </div>
      </div>
    </div>
    <div class="panel notimed A5">
      <div class="topside">
        <h1 class="title">G I V I N G &nbsp;&nbsp;B A C K</h1>
        <div class="line"></div>
        <p class="maintext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at ultrices lorem, vitae blandit massa. Proin laoreet tristique sem, a semper enim porttitor congue. In sit amet enim accumsan, iaculis neque ac, euismod est. Donec sit amet posuere metus, a faucibus ligula. Duis imperdiet tempor pellentesque. Nullam et rutrum dui, vel tincidunt justo. Integer sed urna imperdiet, mattis odio eu, commodo enim. Aenean aliquet iaculis odio, a egestas turpis volutpat sodales.</p>
      </div>
      <div class="ticker"></div>
      <div class="botside">
        <div class="images">
          <img class="imgfarright" src="css/images/billy.jpg"></img>
          <img class="imgkindaright" src="css/images/SirLee.jpg"></img>
          <img class="imgmidright" src="css/images/Tesla.jpg"></img>
          <img class="imgmidleft" src="css/images/Einstein.jpg"></img>
          <img class="imgkindaleft" src="css/images/Hawking.jpg"></img>
          <img class="imgfarleft" src="css/images/community.png"></img>
        </div>
      </div>
    </div>

  <div class="panel notimed B">
    <h1 class="title">D E S I G N,&nbsp;&nbsp; S O F T W A R E , <br> H A R D W A R E</h1>
  </div>
    <div class="panel notimed B1">
      <h1 class="title">O U R&nbsp;&nbsp; D E S I G N</h1>
      <div class="line"></div>
      <div class="sections">
        <img class="closeSec" src="css/images/close.png"></img>
        <div class="topleft animated fadeIn">
          <h1 class="infolabel">Competition</h1>
          <button type="button">Learn More</button>
          <p class="infotext animated fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="topright animated fadeIn">
          <h1 class="infolabel">Layout and Brands</h1>
          <button type="button">Learn More</button>
          <p class="infotext animated fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="botleft animated fadeIn">
          <h1 class="infolabel">Capabilities</h1> <!-- include stuff about autoCAD -->
          <button type="button">Learn More</button>
          <p class="infotext animated fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="botright animated fadeIn">
          <h1 class="infolabel">Some Specs</h1>
          <button type="button">Learn More</button>
          <p class="infotext animated fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
    <div class="panel notimed B2">
      <h1 class="title">I T S&nbsp;&nbsp; B R A I N S</h1>
      <div class="line"></div>
      <div class="sections">
        <img class="closeSec" src="css/images/close.png"></img>
        <div class="topleft animated fadeIn">
          <h1 class="infolabel">Android Studio</h1>
          <button type="button">Learn More</button>
          <p class="infotext animated fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="topmid animated fadeIn">
          <h1 class="infolabel">Java</h1>
          <button type="button">Learn More</button>
          <p class="infotext animated fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="topright animated fadeIn">
          <h1 class="infolabel">OpenCV</h1>
          <button type="button">Learn More</button>
          <p class="infotext animated fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="botleft animated fadeIn">
          <h1 class="infolabel">TeleOp Programming</h1>
          <button type="button">Learn More</button>
          <p class="infotext animated fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="botmid animated fadeIn">
          <h1 class="infolabel">Autonomous Programming</h1>
          <button type="button">Learn More</button>
          <p class="infotext animated fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="botright animated fadeIn">
          <h1 class="infolabel">Our Approach</h1>
          <button type="button">Learn More</button>
          <p class="infotext animated fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
    <div class="panel notimed B3">
      <div class="left">
        <h1 class="subtitle">N O N - M O V I N G&nbsp;&nbsp; P A R T S</h1>
        <div class="line"></div>
        <div class="dropdown">
          <h1 class="droplabel">Select a Part<img class="dropbutt" src="css/images/down.png"></img></h1>
          <ul class="dropmenu">
            <li class="dropsel dropsel1 animated">Chassis</li>
            <li class="dropsel dropsel2 animated">Protectors</li>
            <li class="dropsel dropsel3 animated">Sensors&Encoders</li>
            <li class="dropsel dropsel4 animated">Channels, Gears, and More</li>
          </ul>
        </div>
      </div>
      <div class="middle">
        <h1 class="title">T H E&nbsp;&nbsp; S T R U C T U R E</h1>
        <div class="line"></div>
        <p class="infofromsides">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="right">
        <h1 class="subtitle">M O V I N G&nbsp;&nbsp; P A R T S</h1>
        <div class="line"></div>
        <div class="dropdown">
          <h1 class="droplabel">Select a Part<img class="dropbutt" src="css/images/down1.png"></img></h1>
          <ul class="dropmenu">
            <li class="dropsel dropsel1 animated">Wheels</li>
            <li class="dropsel dropsel2 animated">Intake System</li>
            <li class="dropsel dropsel3 animated">Deposit System</li>
            <li class="dropsel dropsel4 animated">Hanging</li>
          </ul>
        </div>
      </div>
    </div>

  <div class="panel notimed C c" id="particles-js">
    <h1 class="title">A W A R D S</h1>
  </div>
  <div class="panel notimed D d" id="particles-js2">
    <h1 class="title">C O N T A C T&nbsp;&nbsp; U S !</h1>
    <img class="animated fadeInRight talk" src="css/images/close.png"></img>
  </div>
  <div class="panel notimed E e" id="particles-js3">
    <h1 class="title">O U R&nbsp;&nbsp; S P O N S O R S</h1>
    <img class="animated fadeInRight sponsor" src="css/images/close.png"></img>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.4/angular.min.js"></script>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
-->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
<script src="https://unpkg.com/scrollreveal@4"></script>
<script src="js/maintest.js"></script>
<script src="js/home.js"></script>
<script src="js/modules.js"></script>
<script src="js/controllers/landingAndTwoNavs.js"></script>
<script src="js/pagescomponents.js"></script>
<script src="js/node.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/particleconfig.js"></script>
<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
</body>
</html>
