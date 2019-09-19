<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canteen Automation System</title>
    <link rel="icon" href="img/logo/icon.png">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body data-spy="scroll" data-target="#navbarResponsive">

    <!--- Start Home Section --->
    <div id="home">

    </div>
    <!--- End Home Section --->

    <!--- Navigation --->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

        <!---- Icon ---->
        <a class="navbar-brand" href="index.html">
            <div class="inner-1">
                <img src="img/logo/icon_01.png">
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!---- head button ---->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cas">CAS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#foodorder">Order Foods</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../CAS/carts.php">Carts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../canteen.html">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../signup.html">Signup</a>

                </li>
            </ul>
        </div>
    </nav>


    <!--- Start Image Slider --->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">

            <!--- Slide 1 --->
            <div class="carousel-item active" style="background-image: url(img/b/PIC-1.png);">
                <div class="carousel-caption text-center">

                    <div class="carousel-caption">
                        <h1>Canteen Automation System</h1>
                    </div>

                </div>
            </div>

            <!--- Slide 2 --->
            <div class="carousel-item" style="background-image: url(img/b/PIC-2.png);">

                <div class="carousel-caption text-center">

                    <div class="carousel-caption">
                        <h1>Canteen Automation System</h1>
                    </div>

                </div>
            </div>


            <!--- Slide 3 --->
            <div class="carousel-item" style="background-image: url(img/b/PIC-3.png);">

                <div class="carousel-caption text-center">

                    <div class="carousel-caption">
                        <h1>Canteen Automation System</h1>
                    </div>

                </div>
            </div>
        </div>
        <!--- End Carousel Inner --->

        <!--- Prev & Next Buttons --->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>

    </div>
    <!--- End Image Slider --->


    <div id="cas">

        <div class="col-12 narrow text-center">
            <!--- icon 2 --->
            <div class="icon2">
                <div class="inner-about">
                    <img src="img/b/burger.png" height="300">
                </div>
            </div>

            <!--- About Me --->
            <h1><span class="badge-about"><b>Canteen Automation System ?<b></span></h1>

            <p class="about_text">Canteen Automation System is a technique of ordering foods online applicable in any food delivery industry. The main advantage of this system is that it greatly simplifies the ordering process for both the customer and the canteen. When the customer visits the ordering webpage, they are presented with an interactive and up-to-date menu, complete with all available options and dynamically adjusting prices based on the selected options.</p>

        </div>

    </div>

    <div id="foodorder">
        <div class="container_Food">
            <div class="head_line text-center">
                <h3><span class="badge-tx3 badge-warning"><b>ORDER FOODS<b></span></h3>
            </div>

            <div class="container">

                
                <!--- End Row --->

                <?php
                    require_once 'api/ShowDetails.php';

                    $show = new ShowDetails();
                    $show->showShopList();
                ?>
                <!--- End Row --->
            </div>
            <!--- End Container --->

        </div>

        <!--- Start Contact --->
        <div id="contact">

            <footer>
                <div class="contact">
                    <div class="row justify-content-center">
                        <div class="col-md-5 text-center">
                            <img src="img/logo/login LOGO.png" height="60">
                            <p>Canteen Automation System</p>
                            <strong>Contact Info</strong>
                            <p><img src="img/logo/phone.png" height="15"> :: 01876-895739<br><img src="img/logo/gmail.png" height="15"> :: cas_2019@gmail.com</p>


                        </div>
                    </div>
                    <!--- End Row --->
                </div>

            </footer>

        </div>

    </div>
    <!--- End Contact --->

    <!--- Script Source Files -->
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
    <script src="js/custom.js"></script>
    <!--- End of Script Source Files -->

</body>

</html>
