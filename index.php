<?php
    require('includes/database.php');
    require('includes/function.php');
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }
    else{
        $page=1;
    }
    $post_per_page=5;
    $result=($page-1)*$post_per_page;
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

        <div class="fbt-gallery bg-light py-5 mt-n5 mb-5">
            <div class="container-fluid fbt-elastic-container fbt-gallery-1 px-lg-5">
                <div class="row px-2">


                    <?php
                            $postQuery="SELECT * FROM posts";
                            $runPQ=mysqli_query($db,$postQuery);      
                            $count=1;                                  
                            while($post=mysqli_fetch_assoc($runPQ)){
                                if($count == 5){
                                    break;
                                }
                                ?>
                    <div class="col-lg col-md-6 px-2">
                        <div class="post-item card">
                            <div class="fbt-post-thumbnail">
                                <a href="post.php?id=<?=$post['id']?>">
                                    <?php
                                                    $post_images=getImagesByPost($db,$post['id']);
                                                    // echo $post_images;
                                                    ?>
                                    <img alt="" class="post-thumbnail lazyloaded" data-src="images/<?=$post_images ?>"
                                        src="images/<?=$post_images ?>">
                                    <?php
                                                
                                                ?>
                                </a>
                            </div>
                            <div class="fbt-post-caption">
                                <div class="title-caption text-center p-4">
                                    <div class="post-meta mb-2">
                                        <span class="post-author">
                                        </span>
                                        <span class="post-date published">Posted On
                                            <?=date('F jS, Y',strtotime($post['created_at']))?></span>
                                    </div>
                                    <h3 class="post-title">
                                        <a href="post.php?id=<?=$post['id']?>">
                                            <?=$post['title']?>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                                $count=$count+1;
                            }
                        ?>






                </div>
            </div>
        </div><!-- .fbt-gallery -->

        <div class="container fbt-elastic-container">
            <div class="row justify-content-center">

                <!-- Main Wrapper -->
                <div class="fbt-main-wrapper col-lg-8 mb-5 mb-lg-0">

                    <div id="main-wrapper">
                        <div class="main-section" id="main_content">

                            <div class="fbt-sep-title">
                                <h4 class="title title-heading-left">Recent posts</h4>
                                <div class="title-sep-container">
                                    <div class="title-sep sep-double"></div>
                                </div>
                            </div>

                            <div class="blog-posts fbt-index-post-wrap">




                                <?php
                                        if(isset($_GET['search'])){
                                            $keyword=$_GET['search'];
                                            $postQuery="SELECT * FROM posts WHERE title LIKE '%$keyword%' ORDER BY id DESC LIMIT $result,$post_per_page";
                                        }
                                        else{
                                            $postQuery="SELECT * FROM posts ORDER BY id DESC LIMIT $result,$post_per_page";
                                        }
                                        
                                        $runPQ=mysqli_query($db,$postQuery);                                        
                                        while($post=mysqli_fetch_assoc($runPQ)){
                                            ?>
                                <div
                                    class="fbt_magazine-blog-post hentry fbt-index-post row align-items-center justify-content-between">
                                    <div class="col-xl-6 col-md-5">
                                        <div class="fbt-post-thumbnail">
                                            <a href="post.php?id=<?=$post['id']?>">
                                                <?php
                                                                    $post_images=getImagesByPost($db,$post['id']);
                                                                    // echo $post_images;
                                                                    ?>
                                                <img alt="" class="post-thumbnail lazyloaded"
                                                    data-src="images/<?=$post_images ?>"
                                                    src="images/<?=$post_images ?>">
                                                <?php
                                                                
                                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-7">
                                        <div class="fbt-post-caption mt-3 mt-md-0">
                                            <span
                                                class="post-tag index-post-tag"><?=getCategory($db,$post['category_id'])?></span>
                                            <h3 class="post-title">
                                                <a href="post.php?id=<?=$post['id']?>">
                                                    <?=$post['title']?>
                                                </a>
                                            </h3>
                                            <div class="post-meta mb-2">
                                                <span class="post-date published">Posted On
                                                    <?=date('F jS, Y',strtotime($post['created_at']))?></span>
                                            </div>
                                            <p class="post-excerpt text-truncate">
                                                <!-- <?=$post['content']?> -->
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        }
                                    ?>







                            </div><!-- .fbt-index-post-wrap -->


                            <?php
                                    if(isset($_GET['search'])){
                                        $keyword=$_GET['search'];
                                        $q="SELECT * FROM posts WHERE title LIKE '%$keyword%'";
                                    }
                                    else{
                                        $q="SELECT * FROM posts";
                                    }
                                    
                                    $r=mysqli_query($db,$q);
                                    $total_posts=mysqli_num_rows($r);
                                    $total_pages=ceil($total_posts/$post_per_page);
                                    // echo $total_pages;
                                ?>

                            <div class="pagenav" id="blog-pager">
                                <?php
                                        if($page>1){
                                            $previous=$page;
                                        }
                                        else{
                                            $previous=2;
                                        }
                                    ?>
                                <span class="showpage firstpage">
                                    <a
                                        href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";} ?>page=<?=$previous-1?>">
                                        Previous
                                    </a>
                                </span>
                                <?php
                                    for($opage=1;$opage<=$total_pages;$opage++){
                                        ?>
                                <span class="displaypageNum">
                                    <a
                                        href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";} ?>page=<?=$opage?>"><?=$opage?></a>
                                </span>
                                <?php
                                    }
                                        
                                    ?>
                                <?php
                                        if($page<$total_pages){
                                            $next=$page;
                                        }
                                        else{
                                            $next=$page-1;
                                        }
                                    ?>
                                <span class="displaypageNum">
                                    <a
                                        href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";} ?>page=<?=$next+1?>">
                                        Next
                                    </a>
                                </span>

                            </div><!-- .pagenav -->

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
    <!-- newsletter import here -->
    <!-- newsletter import here -->
    <!-- newsletter import here -->
    <!-- newsletter import here -->
    <!-- newsletter import here -->
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