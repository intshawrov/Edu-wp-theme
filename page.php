<?php get_header(); ?>

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
            <div class="row">

        <div class="col-md-12">
            <?php the_content(); ?>

        </div>
        </div>

      </div>

    </section><!-- /About Us Section -->

    <?php endwhile; ?>


<?php get_footer(); ?>