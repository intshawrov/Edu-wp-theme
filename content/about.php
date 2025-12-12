<section id="about" class="section about">

  <div class="container">
    <div class="row gy-4 align-items-center">

      <!-- IMAGE (Right) -->
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'alt' => get_the_title())); ?>
        <?php else : ?>
          <img src="<?php <?php the_post_thumbnail_url('large'); ?>" class="img-fluid" alt="">
        <?php endif; ?>
      </div>

      <!-- CONTENT (Left) -->
      <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>

        <a href="<?php the_permalink(); ?>" class="read-more">
          <span>Read More</span><i class="bi bi-arrow-right"></i>
        </a>
      </div>

    </div>
  </div>

</section>
