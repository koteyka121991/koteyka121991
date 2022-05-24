<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
<!-- html код шаблона -->


        <!--slider начало-->

        <div class="mobile-wrapper">
            <div class="slider">

                <div class="slider-wrapper">
                    <div class="slider-items">
                        <div class="slide-item active">
                            <img src="img/slider/agrator.jpg" alt=""></div>

                        <div class="slide-item">
                            <img src="img/slider/dominanta.jpg" alt=""></div>

                        <div class="slide-item">
                            <img src="img/slider/plug.jpg" alt=""></div>

                    </div>
                    <div class="slider-dots">
                        <span class="dot active"></span>

                    </div>
                </div>
            </div>


            <main class="main">

                <section class="content__category">
                <?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'category' );
		
			
			
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
                </section>
                <div class="container">                 
                    <section class="section__text-box">
                    <?php the_content(); ?>
                    </section>
                </div>

            </main>

            <?php get_footer(); ?>