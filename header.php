  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, intial-scale=1">
  <link rel='stylesheet' href='./css/style.css' />
  <link rel='stylesheet' href='./css/header.css' />
  <link rel="stylesheet" href="./css/sidebar.css" />
  <link rel="stylesheet" href="./css/gallery.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/tab-footer.css">
  <link rel="stylesheet" href="./css/mobile-footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
</head>

<body>
 <nav class='navbar'>
   <div class='large-text heading'>ICCMDP</div>

   <div class='toggle-btn-div'>
    <a href= '#' class='toggle-btn' onclick='toggleHeader()'>
      <span class='bar'></span>
      <span class='bar'></span>
      <span class='bar'></span>
    </a>
  </div>

  <div class='scroll-header'>
    <ul>
    <li><a href="./index.php" class='hyperlink'>Home</a></li>
    <li><a href="./speakers.php" class='hyperlink'>Speakers</a></li>
    <li><a href="./about-us.php" class='hyperlink'>About</a></li>
    <li><a href="./about-us.php#location" class='hyperlink'>Contact us</a></li>
    <li><button class='btn filled-btn' style='margin-left: 20px; margin-right:20px; display: inline'>REGISTER NOW </button></li>
  </ul>
  </div>

  <div class='responsive-header'>
    <ul>
    <li><a href="./index.php" class='hyperlink'>Home</a></li>
    <li><a href="./about-us.php" class='hyperlink'>About</a></li>
    <li><a href="./objectives.php" class='hyperlink'>Objectives</a></li>
    <li><a href="./call-for-paper.php" class='hyperlink'>Call for papers</a></li>
    <li><a href="./coming-soon.php#instructions" class='hyperlink'>Instructions</a></li>
    <li><a href="./coming-soon.php#download" class='hyperlink'>Downloads</a></li>
    <li><a href="./index.php#imp-dates" class='hyperlink'>Important Dates</a></li>
    <li><a href="./speakers.php" class='hyperlink'>Speakers</a></li>
    <li><a href="./coming-soon.php#accommodation" class='hyperlink'>Accomodation</a></li>
    <li><a href="./about-us.php#location" class='hyperlink'>Contact us</a></li>
    <li><button class='btn filled-btn'>REGISTER NOW </button></li>
    </ul>
  </div>
  
</nav>
<?php require_once './sidebar.php' ?>
<!-- FROM index to header -->
<script src="./js/jquery.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
<script src="./js/header.js"></script>