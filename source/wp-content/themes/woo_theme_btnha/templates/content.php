<div class="col-lg-9 order-1">
    <div class="blog-wrapper-inner">
        <div class="row blog-content-wrap">
            <!-- Start single blog item -->
            <div class="col-lg-12">
                <div class="blog-item mb-30" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="blog-thumb img-full fix">
                        <div class="blog-gallery-slider slick-arrow-style_2">
                            <!-- Your slider content here -->
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-details">
                            <h3 class="blog-heading"><?php the_title(); ?></h3>
                            <div class="blog-meta">
                                <a class="author" href="#"><i class="icon-people"></i> Admin</a>
                                <a class="comment" href="#"><i class="icon-bubbles"></i> 3 comments</a>
                                <a class="post-time" href="#"><i class="icon-calendar"></i> <?php echo get_the_date(); ?></a>
                            </div>
                        </div>
                        <div class="entry-content">
            <blockquote>
                <?php
                $content = get_the_content();
                // Apply 'the_content' filter to keep <p> tags
                $content = apply_filters('the_content', $content);
                echo $content;
                ?>
            </blockquote>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
