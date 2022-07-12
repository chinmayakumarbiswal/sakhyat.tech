<div class="fbt-main-sidebar col-lg-4">
                        <div class="fbt-main-sidebar__content h-100 pl-lg-3">


                            <div class="widget fbt_list_posts mb-5">
                                <div class="fbt-sep-title">
                                    <h4 class="title title-heading-left">Popular Posts</h4>
                                    <div class="title-sep-container">
                                        <div class="title-sep sep-double"></div>
                                    </div>
                                </div>
                                <div class="widget-content">
                                    <?php
                                        $postQuery="SELECT * FROM posts LIMIT 10";
                                        $runPQ=mysqli_query($db,$postQuery);                                        
                                        while($post=mysqli_fetch_assoc($runPQ)){
                                            $post_images=getImagesByPost($db,$post['id']);
                                            ?>
                                                <article class="post mb-3">
                                                    <div class="post-content media align-items-center">
                                                        <div class="fbt-item-thumbnail clearfix">
                                                            <a href="post.php?id=<?=$post['id']?>">
                                                                <img alt="" class="post-thumbnail lazyloaded" data-src="images/<?=$post_images ?>"
                                                                    src="https://s3.ap-south-1.amazonaws.com/sakhyat.tect/<?=$post_images ?>">
                                                            </a>
                                                        </div>
                                                        <div class="ml-3 fbt-title-caption media-body">
                                                            <span class="pp-post-tag"><?=getCategory($db,$post['category_id'])?></span>
                                                            <h3 class="post-title">
                                                                <a href="post.php?id=<?=$post['id']?>"><?=$post['title']?></a>
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

                            <!-- <div class="widget fbt-sticky-content sticky-top fbt-ad-block">
                                <div class="fbt_ad text-center">
                                    <span class="fbt-ad-title">
                                        Advertisement <span class="ad_block"></span>
                                    </span>
                                    <div class="widget-content">
                                        <a href="#">
                                            <img alt="Advertisement" class="lazyloaded img-fluid" data-src=""
                                                src="">
                                        </a>
                                    </div>
                                </div>
                            </div>.fbt-ad-block -->

                        </div>    
                    </div>

                    <!-- Sidebar Wrapper -->
                    