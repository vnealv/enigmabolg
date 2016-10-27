<?php
/**
 * Template name: Landing Page
 * Created by PhpStorm.
 * User: neal
 * Date: 27/10/2016
 * Time: 11:28 AM
 */
?>

<?php get_header(); ?>

    <div class="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="posts">

        <div class="post">

            <div class="post-inner">

                <div class="post-header">

                    <h1 class="post-title">Welcome!</h1>

                </div> <!-- .post-header -->

                <div class="post-content">


                    <?php the_content(); ?>


                    <?php if ( current_user_can( 'manage_options' ) ) : ?>

                        <p><?php edit_post_link( __( 'Edit', 'wilson' ) ); ?></p>

                    <?php endif; ?>

                </div> <!-- .post-content -->

            </div> <!-- .post-inner -->

        </div> <!-- .post -->

        <?php if ( comments_open() ) comments_template( '', true ); ?>

    </div> <!-- .posts -->

<?php endwhile; else: ?>

    <p><?php _e( "We couldn't find any posts that matched your query. Please try again.", "wilson" ); ?></p>

<?php endif; ?>

    <div class="clear"></div>

<?php get_footer(); ?>