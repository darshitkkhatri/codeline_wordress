<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unite
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
					
				?>
 <p><b>Country:</b> 
        <?php 
            $countries = get_the_terms( $post->ID, 'unite_country' ); 
            $country_list = array();
            foreach($countries as $country) {
                $country_list[] = $country->name;
            }
            echo implode(', ', $country_list);
        ?></p>

        <p><b>Genre:</b> 
        <?php 
            $genres = get_the_terms( $post->ID, 'unite_genre' ); 
            $genre_list = array();
            foreach($genres as $genre) {
                $genre_list[] = $genre->name;
            }
            echo implode(', ', $genre_list);
        ?></p>
        <p><b>Ticket Price:</b> <?php echo get_post_meta(get_the_ID(), 'ticket_price', TRUE);?></p>
        <p><b>Release Date:</b> <?php echo get_post_meta(get_the_ID(), 'release_date', TRUE);?></p>
			<?php endwhile; ?>

			<?php unite_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
