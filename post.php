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
    <title>Nemesis | Magazine Blog HTML Template</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:600,700%7CNunito:300,400" rel="stylesheet">
    <link href="./css/animate.min.css" rel="stylesheet" media="screen">
    <link href="./css/fonts.css" rel="stylesheet" media="screen">
    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./css/style.css" rel="stylesheet" media="screen">
</head>

<body>

    <div id="fbt-content-overlay" onclick="closeNav()"></div>
    <form autocomplete="off" id="search" role="search">
        <div class="input">
            <input class="search" name="search" placeholder="Search..." type="text" />
            <button class="submit fa fa-search" type="submit" value=""></button>
        </div>
        <button id="close" type="reset" value="">×</button>
    </form><!-- #search -->

    <div id="page-wrapper" class="magazine-view item-view">


    

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
                                        
                                    <?php
                                        $post_id=$_GET['id'];
                                        $postQuery="SELECT * FROM posts WHERE id=$post_id";
                                        $runPQ=mysqli_query($db,$postQuery);                                        
                                        $post=mysqli_fetch_assoc($runPQ);
                                    ?>
                                        <div class="featuredImageContainer">
                                            <div class="fbt-item-thumbnail">
                                                <?php
                                                    $post_images=getImagesByPost($db,$post['id']);
                                                    // echo $post_images;
                                                    ?>
                                                        <img alt="" class="post-thumbnail lazyloaded" data-src="images/<?=$post_images ?>"
                                                    src="images/<?=$post_images ?>">
                                                    <?php
                                                
                                                ?>
                                            </div>
                                            <div class="fbt-item-caption mt-3 px-5">
                                                <h1 class="post-title">
                                                    <?=$post['title']?>
                                                </h1>
                                                <div class="item-post-meta mt-3">
                                                    <div class="post-meta mb-3">
                                                        <span class="post-author"><a href="" target="_blank" title="fbtemplates"></a></span>
                                                        <span class="post-date published">
                                                            Posted On 
                                                            <?=date('F jS, Y',strtotime($post['created_at']))?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-body post-content px-5">
                                            <p>
                                                <?=$post['content']?>
                                            </p>
                                        </div>







                                        <div class="post-footer">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12">
                                                    <div class="row align-items-center my-4">
                                                        <div class="col-xl-7 text-center text-xl-left mb-3 mb-xl-0">
                                                            <div class="post-labels pl-xl-5">
                                                                <span class="mr-2">Categories:</span>
                                                                <span class="label-head Label">
                                                                    <?=getCategory($db,$post['category_id'])?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5 text-center text-xl-right">
                                                            <div class="sharepost clearfix pr-xl-5">
                                                                <div class="post-share clearfix">
                                                                    <ul>
                                                                        <li><a class="facebook fbt-share" href="#" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                        <li><a class="twitter fbt-share" href="#" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                                                                        <li><a class="linkedin fbt-linkedin" href="#" rel="nofollow" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                                        <li><a class="pinterest fbt-pinterest" href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                                                        <li><a class="email fbt-email" href="#" rel="nofollow"><i class="fa fa-envelope-o"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            
                                        
                                            <div class="fbt-rel-post-wrapper mb-5">
                                                <div class="title-wrap fbt-sep-title">
                                                    <h4 class="title title-heading-left">Related Articles</h4>
                                                    <div class="title-sep-container">
                                                        <div class="title-sep sep-double"></div>
                                                    </div>
                                                </div>
                                                <div id="related-posts">
                                                    <div class="row px-2">

                                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 mb-4 rp-item px-2">
                                                            <div class="fbt-post-thumbnail">
                                                                <a href="./single_mag.html">
                                                                    <img alt="" class="post-thumbnail lazyloaded" data-src="https://fbtemplates.net/html/nemesis-v1.0.6/images/mag-img-1.jpg"
                                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                                                                </a>
                                                            </div>
                                                            <div class="fbt-post-caption text-center mt-2 px-2">
                                                                <h5>
                                                                    <a href="./single_mag.html">
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 mb-4 rp-item px-2">
                                                            <div class="fbt-post-thumbnail">
                                                                <a href="./single_mag.html">
                                                                    <img alt="" class="post-thumbnail lazyloaded" data-src="https://fbtemplates.net/html/nemesis-v1.0.6/images/mag-img-7.jpg"
                                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                                                                </a>
                                                            </div>
                                                            <div class="fbt-post-caption text-center mt-2 px-2">
                                                                <h5>
                                                                    <a href="./single_mag.html">
                                                                        Quae quo sunt excelsiores, eo dant clariora indicia naturae.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 mb-4 rp-item px-2">
                                                            <div class="fbt-post-thumbnail">
                                                                <a href="./single_mag.html">
                                                                    <img alt="" class="post-thumbnail lazyloaded" data-src="https://fbtemplates.net/html/nemesis-v1.0.6/images/mag-img-13.jpg"
                                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                                                                </a>
                                                            </div>
                                                            <div class="fbt-post-caption text-center mt-2 px-2">
                                                                <h5>
                                                                    <a href="./single_mag.html">
                                                                        Sed quod proximum fuit non vidit. Tu quidem reddes.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 mb-4 rp-item px-2">
                                                            <div class="fbt-post-thumbnail">
                                                                <a href="./single_mag.html">
                                                                    <img alt="" class="post-thumbnail lazyloaded" data-src="https://fbtemplates.net/html/nemesis-v1.0.6/images/mag-img-21.jpg"
                                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                                                                </a>
                                                            </div>
                                                            <div class="fbt-post-caption text-center mt-2 px-2">
                                                                <h5>
                                                                    <a href="./single_mag.html">
                                                                        Nulla profecto est, quin suam vim retineat extremum.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 mb-4 rp-item px-2">
                                                            <div class="fbt-post-thumbnail">
                                                                <a href="./single_mag.html">
                                                                    <img alt="" class="post-thumbnail lazyloaded" data-src="https://fbtemplates.net/html/nemesis-v1.0.6/images/mag-img-18.jpg"
                                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                                                                </a>
                                                            </div>
                                                            <div class="fbt-post-caption text-center mt-2 px-2">
                                                                <h5>
                                                                    <a href="./single_mag.html">
                                                                        Non dolere, inquam, istud quam vim habeat postea.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 mb-4 rp-item px-2">
                                                            <div class="fbt-post-thumbnail">
                                                                <a href="./single_mag.html">
                                                                    <img alt="" class="post-thumbnail lazyloaded" data-src="https://fbtemplates.net/html/nemesis-v1.0.6/images/mag-img-19.jpg"
                                                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                                                                </a>
                                                            </div>
                                                            <div class="fbt-post-caption text-center mt-2 px-2">
                                                                <h5>
                                                                    <a href="./single_mag.html">
                                                                        Nulla profecto est, quin suam vim retineat a primo ad.
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div><!-- .fbt-rel-post-wrapper -->
                                        </div>
                                    </div>

                                </div><!-- .fbt-item-post-wrap -->
                            </div>
                        </div><!-- #main-wrapper -->

                    </div><!-- .fbt-main-wrapper -->
<!-- sidebar code import here --><!-- sidebar code import here --><!-- sidebar code import here --><!-- sidebar code import here --><!-- sidebar code import here -->

                    <?php
                        include_once('includes/sidebar.php')
                    ?>
                </div>
            </div>
        </div><!-- .outer-wrapper -->

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

</body>

</html>