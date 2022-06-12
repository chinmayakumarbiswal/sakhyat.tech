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
    
    <div class="outer-wrapper my-5" id="outer-wrapper">

            <div class="container fbt-elastic-container">
                <div class="row justify-content-center">

                    <!-- Main Wrapper -->
                    <div class="fbt-main-wrapper col-lg-8 mb-5 mb-lg-0">

                        <div id="main-wrapper">
                            <div class="main-section" id="main_content">
                                
                                
                                
                                <div class="blog-posts fbt-item-post-wrap">

                                    <div class="blog-post fbt-item-post">
                                        
                                        <div class="fbt-sep-title">
                                            <h4 class="title title-heading-left">Contact Us</h4>
                                            <div class="title-sep-container">
                                                <div class="title-sep sep-double"></div>
                                            </div>
                                        </div>
                                        <div class="post-body post-content">
                                            <p class="mb-4">
                                                Need any help related to this website contact here.
                                            </p>
                                            <form id="fbt-contact-form" class="contact-form" method="POST" action="index.html">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label for="name">Name*</label>
                                                            <input class="form-control shadow-none radius-0" id="name" name="name" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label for="mail">E-mail*</label>
                                                            <input class="form-control shadow-none radius-0" id="mail" name="mail" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <label for="website">Website</label>
                                                            <input class="form-control shadow-none radius-0" id="website" name="website" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="message">Mesage*</label>
                                                            <textarea class="form-control shadow-none radius-0" rows="9" id="message" name="message"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-success radius-0" type="submit" id="submit-contact">
                                                    <i class="fa fa-paper-plane-o mr-2"></i>Submit Message
                                                </button>
                                            </form>

                                        </div>
                                        
                                    </div>

                                </div><!-- .fbt-item-post-wrap -->
                            </div>
                        </div><!-- #main-wrapper -->

                    </div><!-- .fbt-main-wrapper -->

                    <div class="fbt-main-sidebar col-lg-4">
                        <div class="fbt-main-sidebar__content h-100 pl-lg-3">

                            <div class="fbt-contact-info">

                                <div class="fbt-contact-info-box">
                                    <div class="fbt-contact-info-box-content">
                                        <div class="fbt-sep-title">
                                            <h4 class="title title-heading-left">Webagency</h4>
                                            <div class="title-sep-container">
                                                <div class="title-sep sep-double"></div>
                                            </div>
                                        </div>
                                        <p>CUTM, <br/>Bhubaneswar</p>
                                    </div>
                                </div>
                            
                                <div class="fbt-contact-info-box">
                                    <div class="fbt-contact-info-box-content">
                                        <div class="fbt-sep-title">
                                            <h4 class="title title-heading-left">Email Us</h4>
                                            <div class="title-sep-container">
                                                <div class="title-sep sep-double"></div>
                                            </div>
                                        </div>
                                        <a href="mailto:situ@chinmayakumarbiswal.in" style="text-decoration: none; color:black;"><p>situ@chinmayakumarbiswal.in</p></a>
                                    </div>
                                </div>
                            
                                <div class="fbt-contact-info-box">
                                    <div class="fbt-contact-info-box-content">
                                        <div class="fbt-sep-title">
                                            <h4 class="title title-heading-left">Call Us</h4>
                                            <div class="title-sep-container">
                                                <div class="title-sep sep-double"></div>
                                            </div>
                                        </div>
                                        <a href="tel:+918917651457" style="text-decoration: none; color:black;"><p>+91 8917651457</p></a>
                                    </div>
                                </div>
                            
                            </div><!-- Widget end -->

                        </div>    
                    </div>
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