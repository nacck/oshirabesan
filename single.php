<?php get_header(); ?>

    <div class ="container">
        <div class="contents">
            <div class="posts">

                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>

				<div class="post-header">
                    <h1>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h1>
					<div class="post-meta">
                        <?php echo get_the_date(); ?> <?php the_category(', '); ?>
					</div> <!--post-meta-->
				</div> <!--post-header-->

                <div class="post-content">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>

                <div class="navigation">
                    <div class="next"><?php previous_post_link('%link','<img src="'.get_template_directory_uri().'/img/next.png" />'); ?></div>
                    <div class="prev"><?php next_post_link('%link','<img src="'.get_template_directory_uri().'/img/prev.png" />'); ?></div>
                </div> <!-- navigation -->

				<?php get_template_part('content');
					if( is_singular('post') ) {
						comments_template();
					}
				?>

                <?php
                    endwhile;
                else:
                ?>

                <p>記事はありません</p>

                <?php
                    endif;
                ?>

            </div><!-- posts -->
        </div><!-- contents -->
        <?php get_sidebar(); ?>
    </div><!-- container -->

<?php get_footer(); ?>
