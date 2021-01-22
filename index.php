<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <!-- Import CSS files for this page except style.css -->
        <link rel="stylesheet" href="./css/index.css" />
        <link rel="stylesheet" href="./css/calender-card.css" />
        <link rel="stylesheet" href="./css/tiny-slider.css" />
        <link rel="stylesheet" href="./css/imp-dates.css" />
        <link rel="stylesheet" href="./css/gallery.css" />
        
        <?php require_once 'header.php'; ?>

        <!-- LANDING SCREEN -->
        <div class="main" id="landing-screen">
            <div class="initial-header">
                <ul>
                    <li><a href="./index.php" class="hyperlink white-text">Home</a></li>
                    <li><a href="./speakers.php" class="hyperlink white-text">Speakers</a></li>
                    <li><a href="./about-us.php" class="hyperlink white-text">About</a></li>
                    <li><a href="./about-us.php#location" class="hyperlink white-text">Contact us</a></li>
                </ul>
            </div>

            <div class="title">
                <h1 class="large-text text-center bold-text" style="word-break: break-word">
                    International Conference on <br />
                    Condensed Matter & Device Physics
                </h1>
            </div>
            <div class="timing">
                <h4 class="h4 wh-space-normal text-center">09-11 September, 2021, Gandhinagar</h4>
            </div>
            <div class="register-button">
                <button class="btn white-filled-btn h6"><i class="fa fa-angle-right" style="transform: scale(1.5);"></i>&nbsp;&nbsp;&nbsp;
                REGISTER NOW</button>
            </div>
            <div class="calendar">
                <div class="Calender-container">
                    <img src="./assets/images/calendar_icon.svg" alt="" />
                    <div class="days bold-text">
                        <h1 id="countdown-days">00</h1>
                        <h5>Days</h5>
                    </div>
                </div>

                <div class="Calender-container">
                    <img src="./assets/images/calendar_icon.svg" alt="" />
                    <div class="days bold-text">
                        <h1 id="countdown-hours">00</h1>
                        <h5>Hours</h5>
                    </div>
                </div>

                <div class="Calender-container">
                    <img src="./assets/images/calendar_icon.svg" alt="" />
                    <div class="days bold-text">
                        <h1 id="countdown-minutes">00</h1>
                        <h5>Minutes</h5>
                    </div>
                </div>

                <div class="Calender-container">
                    <img src="./assets/images/calendar_icon.svg" alt="" />
                    <div class="days bold-text">
                        <h1 id="countdown-seconds">00</h1>
                        <h5>Seconds</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-container">
            <div class="section" style='margin-top: 60px'>
                <div class="section-heading">
                    <img src="./assets/images/atom.svg" />
                    <h2>About ICCMDP</h2>
                </div>
                <div class="section-info" style='margin-top: 20px'>
                    <h5 class="wh-space-normal">
                    The research area of materials and devices has grown tremendously in recent times, thanks to the innovative synthesis & characterization methods and high-speed computational power that has opened up doors for many more areas of interdisciplinary fields. Physicists, chemists and biologists are contributing tremendously in these areas through collaborative work. To encourage and invite such an interdisciplinary collaborative work, Department of Physics, Pandit Deendayal Petroleum University, Gandhinagar is organizing three days International Conference on Condensed Matter and Device Physics,  9-11 September, 2021
                    </h5>
                    <button onclick="window.location.href='./about-us.php'" class="btn normal-btn h6" style="margin-top: 20px; margin-bottom: 50px;"><i class="fa fa-angle-right" style="transform: scale(1.5);"></i>&nbsp;&nbsp;&nbsp;READ MORE</button>
                </div>
            </div>
            <div id="imp-dates" class="section">
                <br>
                <br>
                <br>
                <div class="section-heading">
                    <i class="far fa-calendar-alt"></i>
                    <h2>Important Dates</h2>
                </div>
                <div class='section-info'>
                    <?php require_once 'imp-dates.php'; ?>
                </div>
            </div>

            <div class='gallery flex-layout' style="background-color: var(--blue-shade); justify-content: center">
                <div class="section">
                    <div class="section-heading">
                        <i class="far fa-images white-text"></i>
                        <h2 class='white-text'>Gallery</h2>
                    </div>
                    <div class='section-info'>
                        <?php require_once 'gallery.php'; ?>
                    </div>
                </div>
            </div>
                
            <?php require_once 'locate-us.php' ?>
        </div>
        
        <?php require_once 'footer.php'; ?>
        <!-- <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script> -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script> -->

        <!-- <script src="./js/jquery.js"></script>  -->
        <!-- <script defer src="https://kit.fontawesome.com/e2bbc75ec5.js" crossorigin="anonymous"></script> -->
        <script src="./js/index.js"></script>
        <!-- <script src="./js/sidebar.js"></script> -->
        <!-- <script src="./js/sidebar.js"></script> -->
        <!-- FROM index to header -->
        <!-- <script src="./js/lightbox.min.js"></script> -->
        <script src="./js/sidebar.js"></script>
        <script src="./js/lightbox.min.js"></script>
        <script src="./js/tiny-slider.js"></script>
        <script src="./js/imp-dates.js"></script>
        
        
        