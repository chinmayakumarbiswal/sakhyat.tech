<?php
    require('includes/database.php');
    require('includes/function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SakhyatTech</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:600,700%7CNunito:300,400" rel="stylesheet">
    <link href="./css/animate.min.css" rel="stylesheet" media="screen">
    <link href="./css/fonts.css" rel="stylesheet" media="screen">
    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./css/style.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- IMPORT NAVBAR HERE  --><!-- IMPORT NAVBAR HERE  --><!-- IMPORT NAVBAR HERE  --><!-- IMPORT NAVBAR HERE  --><!-- IMPORT NAVBAR HERE  -->
    <?php
        include_once('includes/navbar.php')
    ?>
    
    <div class="outer-wrapper clearfix" id="outer-wrapper">
            <div class="container fbt-elastic-container">
                <div class="row justify-content-center">

                    <div class="fbt-main-wrapper col-xl-12">

                        <div id="main-wrapper">
                            <div class="main-section" id="main_content">

                                <div class="row justify-content-center">
                                    <div class="col-lg-9 ">
                                        <div class="errorWrap card radius-10 shadow-lg p-5 mt-5 text-center">
                                            <h1 class="display-4">
                                                Oooooh!!! <span class="text-primary">Error 404!!!</span>
                                            </h1>
                                            <h3 class="h2 mt-3 mb-4">
                                                Sorry! The page you were looking for, could not be found...
                                            </h3>
                                            <a href="./index.php"><span class="btn btn-outline-dark radius-25 px-4">Go To Homepage</span></a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div><!-- #main-wrapper -->

                    </div><!-- .fbt-main-wrapper -->

                </div>
            </div>
    </div>

    <?php
        include_once('includes/newsletter.php')
    ?>

    <?php
        include_once('includes/footer.php')
    ?>

    </div><!-- #page-wrapper end -->

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/plugins.js"></script>
    <script src="./js/main.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62a47696f6cce6bf"></script>

</body>

</html>