

<section id="testimonials" class="page-section" style="min-height: 500px">
  <div class="wrapper">
    <h2 class="headline headline--center">
      <span class="headline--light headline--small">What our patients</span><br>
      say about us
    </h2>
    <div class="carousel">
    <?php $testimonials = random_reviews($review_data, 3); 
      
      foreach($testimonials as $testimonial){ 
        
        if(is_null($testimonial)){
          continue;
        }


        ?>

      

      <div class="review review--no-flex review--spaced carousel__slide carousel__slide--is-visible">
        <div class="review__avatar">
          <img 
            style="
              height: 100%; 
              width: 100%; 
              object-position: center; 
              object-fit: cover;
            " 
            src="<?php echo $testimonial->img_src; ?>" alt="<?php echo $testimonial->author . "profile img"; ?> "></div>
        <div class="review__details">
          <div class="review__author"><?php echo $testimonial->author; ?></div>
          <div class="review__rating"><?php echo $testimonial->rating; ?></div>
          <div class="review__content">
            <?php echo $testimonial->text; ?>
          </div>
        </div>
      </div>


      <?php } ?>
    </div>
    <div style="display: flex; justify-content: center; height: 45px; align-items: center;">
      <img style="height: 100%; width: 100%; object-position: center; object-fit: contain;" src="https://dcphysiotherapy.ie/wp-content/uploads/2022/10/google-review.png" alt="google review logo">
    </div>
  </div>
</section>