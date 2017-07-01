<?php get_header(); ?>

    <div class ="container">
        <div class="contents">
            <div class="posts">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>

                <article class="post">
                  <a href="<?php the_permalink(); ?>">
                    <div class="post-image">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(array(110, 110)); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="110" height="110">
                        <?php endif; ?>
                    </div>

                    <div class="post-body">
                      <div class="post-wrap">
                        <div class="post-title">
                            <?php the_title(); ?>
                        </div>
                        <div class="post-meta">
                            <?php echo get_the_date(); ?>
                        </div>
                      </div>
                    </div>
                  </a>
                </article><!-- /post -->

                <?php
                    endwhile;
                else:
                ?>

                <p>記事はありません</p>

                <?php
                    endif;
                ?>

                <div class="navigation">
                    <div class="prev"><?php previous_posts_link('<img src="'.get_template_directory_uri().'/img/prev.png" />'); ?></div>
                    <div class="next"><?php next_posts_link('<img src="'.get_template_directory_uri().'/img/next.png" />'); ?></div>
                </div><!-- navigation -->
            </div><!-- posts -->
        </div><!-- contents -->
        <?php get_sidebar(); ?>
    </div><!-- container -->

<?php get_footer(); ?>
