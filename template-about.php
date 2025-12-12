<?php 

/* Template Name: About Template */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1><?php the_title(); ?></h1>
              <p class="mb-0"><?php the_title(); ?></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
            <ol>
            <li><a href="<?php echo site_url(); ?>">Home<?php the_title(); ?></a></li>
            <li class="current"><?php  the_title(); ?><br></li>
          </ol>
          
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Us Section -->
    <section id="about-us" class="section about-us">

      <div class="container">

        <div class="row gy-4">

            <?php if (has_post_thumbnail()): ?>
          <div class="col-lg-6 order-1 order-lg-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid" alt="">
          </div>
          <?php endif; ?>

          <?php the_content(); ?>   

        </div>

      </div>

    </section>
    
    

    <?php endwhile; ?>


<?php get_footer(); ?>