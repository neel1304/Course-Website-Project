<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

  ?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <title>Coursera</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container">
    <div class="nav-wrapper">
      <div class="left-side">
        <div class="nav-link-wrapper active-nav-link">
          <a href="index.html">Home</a>
        </div>

        <div class="nav-link-wrapper">
          <a href="index.php?logout='1'">logout</a>
        </div>
       <div class="nav-link-wrapper">
          <a href="register.php">Register</a>
        </div>
      </div>

      <div class="right-side">
        <div class="brand">
          Courses
        </div>
      </div>
    </div>
</div>
    <div class="content-wrapper">
      <div class="portfolio-items-wrapper">

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/1.jpg)"></div>

          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="logos/javascript.svg" alt="">
            </div>

            <div class="subtitle">Javascript</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/2.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="logos/jquery.svg" alt="">
            </div>

            <div class="subtitle">Jquery</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/3.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="logos/mysql.svg" alt="">
            </div>

            <div class="subtitle">Mysql</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/4.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="logos/php.svg" alt="">
            </div>

            <div class="subtitle">PHP</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/5.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="logos/python.svg" alt="">
            </div>

            <div class="subtitle">Python</div>
          </div>
        </div>

        <div class="portfolio-item-wrapper">
          <div class="portfolio-img-background" style="background-image:url(images/6.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="logos/ruby.png" alt="">
            </div>

            <div class="subtitle">Ruby</div>
          </div>
        </div>        

      </div>
    </div>
  </div>

</body>

<script>
  const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');

  portfolioItems.forEach(portfolioItem => {
    portfolioItem.addEventListener('mouseover', () => {
      console.log(portfolioItem.childNodes[1].classList)
      portfolioItem.childNodes[1].classList.add('image-blur');
    });

    portfolioItem.addEventListener('mouseout', () => {
      console.log(portfolioItem.childNodes[1].classList)
      portfolioItem.childNodes[1].classList.remove('image-blur');
    });
  });

</script>

</html>