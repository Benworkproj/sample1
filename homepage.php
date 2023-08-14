<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body style="background-color:rgb(30, 30, 30);">

 <div class="text-box">
        <h1 class="logo">Heroes</h1>
      </div>

<section class="header">
     <nav>
        <div class="nav-links">
          <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="announcement.php">Announcements</a></li>
            <li><a href="#">Men's Sports</a>
              <ul class="dropdown">
                <li><a href="search-boxv2.php">Search</a></li>
                <li><a href="mensports/basketballmen.php">Basketball</a></li>
                <li><a href="mensports/volleyballmen.php">Volleyball</a></li>
                <li><a href="mensports/footballmen.php">Football</a></li>
                <li><a href="mensports/chessmen.php">Chess</a></li>
                <li><a href="mensports/billiardsmen.php">Billiards</a></li>
                <li><a href="mensports/atlethicsmen.php">Atlethics</a></li>
                <li><a href="mensports/dancesportsmen.php">Dance Sports</a></li>
                <li><a href="mensports/arniskmen.php">Arnisk</a></li>
                <li><a href="mensports/tabletennismen.php">Table Tennis</a></li>
                <li><a href="mensports/badmintonmen.php">Badminton</a></li>
                <li><a href="mensports/taekwondomen.php">Taekwondo</a></li> 
              </ul>
            </li>
            <li><a href="#">Women's Sports</a>
               <ul class="dropdown">
               <li><a href="search-boxv2.php">Search</a></li>
               <li><a href="womensports/basketballwomen.php">Basketball</a></li>
                <li><a href="womensports/volleyballwomen.php">Volleyball</a></li>
                <li><a href="womensports/futsalwomen.php">Futsal</a></li>
                <li><a href="womensports/chesswomen.php">Chess</a></li>
                <li><a href="womensports/billiardswomen.php">Billiards</a></li>
                <li><a href="womensports/atlethicswomen.php">Atlethics</a></li>
                <li><a href="womensports/arniskwomen.php">Arnisk</a></li>
                <li><a href="womensports/badmintonwomen.php">Badminton</a></li>
                <li><a href="womensports/dancesportswomen.php">Dance Sports</a></li>
                <li><a href="womensports/tabletenniswomen.php">Table Tennis</a></li>
                <li><a href="womensports/taekwondowomen.php">Taekwondo</a></li>
              </ul>
            </li>
             <li><a href="#"><img class="profile-img" src="img/profile.png"></a>
             <ul class="dropdown-profile">
                <li  class="text-pass"><a href="changepass.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
    </ul>
      </li>
          </ul>
        </div>
      </nav>
</section>

<!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <input type="radio" name="radio-btn" id="radio5">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="img/slidingpic-1.png" alt="">
          <h1>A Goal in Life</h1>
          <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</P>
        </div>
        <div class="slide">
          <img src="img/slidingpic-2.jpg" alt="">
          <h1>Lorem ipsum</h1>
          <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</P>
        </div>
        <div class="slide">
          <img src="img/slidingpic-3.jpg" alt="">
          <h1>Lorem ipsum</h1>
          <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</P>
        </div>
        <div class="slide">
          <img src="img/slidingpic-4.jpg" alt="">
         <h1>Lorem ipsum</h1>
          <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</P>
        </div>
        <div class="slide">
          <img src="img/slidingpic-5.jpg" alt="">\
         <h1>Lorem ipsum</h1>
          <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</P>
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
          <div class="auto-btn5"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
        <label for="radio5" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 5){
        counter = 1;
      }
    }, 5000);
    </script>

    <div class="container-1">
        <h1 class="cont-1-feat">Featured Player</h1>

        <div class="feat-player">
            <div class="white-circ"></div>
            <img src="img/feat-player.png">
            <p class="feat-sports">FOOTBALL</p>
            <h1 class="player-name">Alarcon, Jon</h1>
            <p class="posi">Position: </p>
            <p class="hei">Height: </p>
            <p class="wei">Weight: </p>
            <p class="yr">Yr. & Course: </p>
            <p class="age">Age: </p>

            <p class="posi1">Striker</p>
            <p class="hei1">5'7</p>
            <p class="wei1">50kg </p>
            <p class="yr1">BSIT, Sopho</p>
            <p class="age1">20</p>

          <div class="game-stats">
            <p class="matchs">Matches</p>
            <div class="matchs-circ">
              <p>15</p>
            </div>
            <p class="goal">Goals</p>
            <div class="goals-circ">
              <p>07</p>
            </div>
            <p class="assists">Assists</p>
              <div class="assists-circ">
                <p>08</p>
              </div>
          </div>
        </div>     
    </div>

    <div class="container-2">
          <h1 class="cont-2-feat">Points Table</h1>
          <div class="points-table">
              <div class="tbp-header">
                  <h1 class="points-sport">SPORTS</h1>
                  <h1 class="sex">SEX</h1>
                  <h1 class="w">W</h1>
                  <h1 class="l">L</h1>
              </div>
          </div>

          <div class="points-content">
            <!-- sports -->
              <p class="s1">1. Basket ball</p>
              <p class="s2">2. Chess</p>
              <p class="s3">3. Billiards</p>
              <p class="s4">4. Foot ball</p>
              <p class="s5">5. Vollley ball</p>
              <p class="s6">6. Futsal</p>
              <!-- sex -->
              <p class="g1">M</p>
              <p class="g2">F</p>
              <p class="g3">F</p>
              <p class="g4">M</p>
              <p class="g5">M</p>
              <p class="g6">F</p>
              <!-- wins -->
              <p class="w1">5</p>
              <p class="w2">6</p>
              <p class="w3">6</p>
              <p class="w4">10</p>
              <p class="w5">8</p>
              <p class="w6">3</p>
              <!-- lose -->
              <p class="l1">2</p>
              <p class="l2">2</p>
              <p class="l3">2</p>
              <p class="l4">5</p>
              <p class="l5">3</p>
              <p class="l6">2</p>
          </div>
    </div>

    <div class="container-3">
        <img src="img/banner-1.png">
    </div>

  <div class="container-sched">
     <h1 class="text-match">MATCH SCHEDULE</h1>
    <div class="semis">
        <div class="semis-text">
            <p>SEMIFINALS</p>
        </div> 
    </div>

    <div class="finals">
      <div class="finals-text">
        <p>FINALS</p>
      </div>
    </div>
    <div class="match-1">
      <img src="img/heroes-logo.png" class="heroes-1">
      <h2 class="vs-1">VS</h2>
      <img src="img/CCJ-logo.png" class="heroes-2">
      <div class="green-line-1"></div>
      <h1 class="sports-1">Football</h1>
      <h1 class="gym-loc-1">CvSU Imus Campus Gym</h1>
      <p>Sched: July 21, 2023 5:00PM</p>
      <br>
      <p>Category: Men </p>
    </div>

    <div class="match-2">
      <img src="img/heroes-logo.png" class="heroes-1">
      <h2 class="vs-1">VS</h2>
      <img src="img/silang-logo.png" class="heroes-2">
      <div class="green-line-1"></div>
      <h1 class="sports-2">Basketball</h1>
      <h1 class="gym-loc-1">CvSU Imus Campus Gym</h1>
      <p>Sched: Aug. 9 , 2023 3:00PM</p>
      <br>
      <p>Category: Men 3x3 </p>
    </div>

    <div class="match-3">
      <img src="img/rosario-logo.png" class="heroes-1">
      <h2 class="vs-1">VS</h2>
      <img src="img/heroes-logo.png" class="heroes-2">
      <div class="green-line-1"></div>
      <h1 class="sports-3">Athletics</h1>
      <h1 class="gym-loc-1">CvSU CCAT Campus Gym</h1>
      <p>Sched: TBA</p>
      <br>
      <p>Category: Women</p>
    </div>

    <div class="match-4">
      <img src="img/heroes-logo.png" class="heroes-1">
      <h2 class="vs-1">VS</h2>
      <img src="img/bacoor-logo.png" class="heroes-2">
      <div class="green-line-1"></div>
      <h1 class="sports-4">Football</h1>
      <h1 class="gym-loc-1">CvSU CCAT Campus Gym</h1>
      <p>Sched: TBA</p>
      <br>
      <p>Category: Women</p>
    </div>
 </div>

  <div class="container-4">
      <h1 class="high">HEROES HIGHLIGHTS</h1>
      <div class="green-line-2"></div>
      <div class="green-line-3"></div>

      <div class="high-img">
        <img src="img/high1.png" class="high1">
        <img src="img/high2.png" class="high2">
        <img src="img/high3.png" class="high3">
        <img src="img/high4.png" class="high4">
      </div>

      <div class="high-vid">
        <video class="vid" controls="">
          <source src="img/Highlight.mp4" type="video/mp4">
        </video>
      </div>

     
  </div>

   <div class="cont-4">
        <p>Get access to exclusive trainings and hone your skills with us!</p>
        <p>To submit the application, find us at  the Backstage of Campus Gym.</p>
        <h1>APPLY NOW!</h1>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLScH8yiSnwTbIBI7DDXd27pkxNyxpkOTiXCkvCLIwbEDuBmnYQ/viewform"><button class="sub-btn">Join Us</button></a>
    </div>
</body>

<footer>
  <div class="text-footer-heroes">
    <h1 class="footer-heroes">HEROES</h1>
  </div>


  <div class="footer-reserved">
    <p class="text-reserved">(C) CvSU Imus 2023. All rights are reserved.</p>

    <div class="footer-svg-icon">
      <img src="img/twitter.svg">
      <img src="img/fb.svg">
      <img src="img/ig.svg">
    </div>
  </div>


  <div class="line"></div>

  <div class="heroes-logo">
      <img src="img/heroes-logo.png">
  </div>


  <div class="quick-links">
      <h1 class="text-quick">Quick Links</h1>

      <div class="quick-links-1">
        <a href="#">Downloadable App. Form</a>
        <a href="#">Online App. Form</a>
        <a href="#">Downloadable Student Info. Sheet</a>
        <a href="#">Student Portal</a>       
      </div>
      
      <div class="quick-links-2">
        <a href="#">CASSA</a>
        <a href="#">P.E ROCKZ</a>
      </div>
  </div>


  <div class="contact-info">
      <h1>Contact Information</h1>

      <div class="cont-inf">
        <p>Cavite Civic Center, Palico IV,</p>
        <p> Imus City, Cavite 4103</p>

        <p>Admin: (046) 471-6607 , Registrar:</p>
        <p> (046) 436-6584</p>
      </div>
  </div>

</footer>
</html>