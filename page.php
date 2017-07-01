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
				</div> <!--post-header-->

                <div class="post-content">
                        <?php the_content(); ?>
                </div>

                <?php
                    endwhile;
                else:
                ?>

                <p>ページはありません</p>

                <?php
                    endif;
                ?>

            </div><!-- posts -->
        </div><!-- contents -->
        <?php get_sidebar(); ?>
    </div><!-- container -->

<?php get_footer(); ?>
