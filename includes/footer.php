<div class="footer-dark footer-black pt-5" id="footer-content">
            <div class="container pb-4">
                <div class="row clearfix">
                    <div class="col-lg-4">
                        <div class="footer-1 section">
                            <div class="fbt_list_posts">
                                <h4 class="title title-heading">
                                    Latest Articles
                                </h4>
                                <div class="widget-content">

                                    <?php
                                        $postQuery="SELECT * FROM posts ORDER BY id DESC LIMIT 3";
                                        $runPQ=mysqli_query($db,$postQuery);                                        
                                        while($post=mysqli_fetch_assoc($runPQ)){
                                            $post_images=getImagesByPost($db,$post['id']);
                                            ?>
                                                <article class="post mb-3">
                                                    <div class="post-content media align-items-center">
                                                        <div class="fbt-item-thumbnail clearfix">
                                                            <a href="post.php?id=<?=$post['id']?>">
                                                                <img alt="" class="post-thumbnail lazyloaded" data-src="images/<?=$post_images ?>" 
                                                                    src="https://s3.ap-south-1.amazonaws.com/sakhyat.tect/<?=$post_images?>">
                                                            </a>
                                                        </div>
                                                        <div class="ml-3 fbt-title-caption media-body">
                                                            <span class="pp-post-tag"><?=getCategory($db,$post['category_id'])?></span>
                                                            <h3 class="post-title">
                                                                <a href="post.php?id=<?=$post['id']?>">
                                                                <?=$post['title']?>
                                                                </a>
                                                            </h3>
                                                            <div class="post-meta">
                                                                <span class="post-date published"><?=date('F jS, Y',strtotime($post['created_at']))?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            <?php
                                        }
                                    ?>
                                    


                                </div>
                            </div><!-- .fbt_list_posts -->
                        </div>
                    </div>
                    <div class="col-lg-6 ml-lg-auto">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="footer-2 section">
                                    <div class="logoImage">
                                        <div class="widget-content">
                                            <img alt="" src="images/logo.png" height="60px" width="auto">
                                        </div>
                                    </div>
                                    <div class="widget Text">
                                        <div class="widget-content">
                                            <p>
                                                We are the student of Centurion University of Technology And Management. We Created this blog website for Domain project.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="footer-3 section">
                                    <div class="widget">
                                        <h4 class="title title-heading">
                                            About
                                        </h4>
                                        <div class="widget-content list-label-widget-content">
                                            <ul class="list-unstyled">
                                                <li><a class="label-name" href="index.php">HOME</a></li>
                                                <li><a class="label-name" href="about.php">ABOUT</a></li>
                                                <li><a class="label-name" href="contact.php">CONTACT</a></li>
                                                <li><a class="label-name" href="policy.php">POLICY</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="footer-4 section">
                                    <div class="widget">
                                        <h4 class="title title-heading">
                                            Categories
                                        </h4>
                                        <div class="widget-content list-label-widget-content">
                                            <ul class="list-unstyled">
                                                <li><a class="label-name" href="#">GADGETS</a></li>
                                                <li><a class="label-name" href="#">WEB</a></li>
                                                <li><a class="label-name" href="#">TRENDING</a></li>
                                                <li><a class="label-name" href="#">ELECTRONICS</a></li>
                                                <li><a class="label-name" href="#">BOOKS</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            


                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="credits">
                <div class="container">
                    <div class="row divider py-4">
                        <div class="col-lg-6">
                            <div class="copyright-section text-center text-lg-left">
                                ©
                                <script>document.write(new Date().getFullYear());</script> <a href="https://chinmayakumarbiswal.in">Sakhyat.Tech By Chinmaya</a> | All Rights Reserved 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu section" id="footer-menu">
                                <div class="widget socialList">
                                    <div class="widget-content">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://www.facebook.com/situ.chinmaya"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://twitter.com/Chinmaya_situ?s=09"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://www.instagram.com/chinmaya.situ/"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://www.linkedin.com/in/chinmaya-kumar-biswal-16045"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://api.whatsapp.com/send?phone=919556328216&text=hey chinmaya from Sakhyat.tech"><i class="fab fa-whatsapp"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- #footer-content -->