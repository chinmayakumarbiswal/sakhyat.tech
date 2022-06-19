<?php
    require('includes/database.php');
    require('includes/function.php');
    if($_GET['id']){

    }
    else{
        header('location:index.php');
    }
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
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:600,700%7CNunito:300,400"
        rel="stylesheet">
    <link href="./css/animate.min.css" rel="stylesheet" media="screen">
    <link href="./css/fonts.css" rel="stylesheet" media="screen">
    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./css/style.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- IMPORT NAVBAR HERE  -->
    <!-- IMPORT NAVBAR HERE  -->
    <!-- IMPORT NAVBAR HERE  -->
    <!-- IMPORT NAVBAR HERE  -->
    <!-- IMPORT NAVBAR HERE  -->
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
                                            <img alt="" class="post-thumbnail lazyloaded"
                                                data-src="images/<?=$post_images ?>" src="images/<?=$post_images ?>">
                                            <?php
                                                
                                                ?>
                                        </div>
                                        <div class="fbt-item-caption mt-3 px-5">
                                            <h1 class="post-title">
                                                <?=$post['title']?>
                                            </h1>
                                            <div class="item-post-meta mt-3">
                                                <div class="post-meta mb-3">
                                                    <span class="post-author"><a href="" target="_blank"
                                                            title="fbtemplates"></a></span>
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
                                                                <!-- <ul>
                                                                        <li><a class="facebook fbt-share" href="https://www.facebook.com/sharer.php?u=chinmayakumarbiswal.in" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                        <li><a class="twitter fbt-share" href="https://twitter.com/share?url=chinmayakumarbiswal.in" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                                                                        
                                                                    </ul> -->
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

                                                    <?php
                                                        $pquery="SELECT * FROM posts WHERE category_id={$post['category_id']} ORDER BY id DESC";
                                                        $prun=mysqli_query($db,$pquery);
                                                        while($rpost=mysqli_fetch_assoc($prun)){
                                                            $rpost_images=getImagesByPost($db,$rpost['id']);
                                                            if($rpost['id']==$post_id){
                                                                continue;
                                                            }
                                                            ?>
                                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 mb-4 rp-item px-2">
                                                        <div class="fbt-post-thumbnail">
                                                            <a href="post.php?id=<?=$rpost['id']?>">
                                                                <img alt="" class="post-thumbnail lazyloaded"
                                                                    data-src="images/<?=$rpost_images ?>"
                                                                    src="images/<?=$rpost_images ?>">
                                                            </a>
                                                        </div>
                                                        <div class="fbt-post-caption text-center mt-2 px-2">
                                                            <h5>
                                                                <a href="post.php?id=<?=$rpost['id']?>">
                                                                    <?=$rpost['title']?>
                                                                </a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        }
                                                    ?>





                                                </div>
                                            </div>
                                        </div><!-- .fbt-rel-post-wrapper -->
                                    </div>
                                </div>

                            </div><!-- .fbt-item-post-wrap -->
                        </div>
                    </div><!-- #main-wrapper -->

                </div><!-- .fbt-main-wrapper -->
                <!-- sidebar code import here -->
                <!-- sidebar code import here -->
                <!-- sidebar code import here -->
                <!-- sidebar code import here -->
                <!-- sidebar code import here -->

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
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62a47696f6cce6bf"></script>

</body>

</html>