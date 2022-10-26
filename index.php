
<?php
    get_header(); 
    include "review-data.php";
?>

    <main>
    <section id="hero-banner" class="hero">
      <picture class="background-img">
        <source
          type="image/webp"
          srcset="<?php echo get_theme_file_uri("/assets/images/dc-main-home-banner-desktop.webp"); ?>"
          media="(min-width: 800px)"
        />
        <source
          type="image/jpeg"
          srcset="<?php echo get_theme_file_uri("/assets/images/dc-main-home-banner-desktop.jpg"); ?>"
          media="(min-width: 800px)"
        />
        <source
          type="image/jpeg"
          srcset="<?php echo get_theme_file_uri("/assets/images/dc-main-home-banner-for-mobile-3.jpg"); ?>"
        />
        <img src="<?php echo get_theme_file_uri("/assets/images/dc-main-home-banner-for-mobile-3.webp");?>" alt="" />
      </picture>
  
      <div class="hero__overlay overlay overlay--grey">
        <div class="wrapper">
          <div class="hero__inner">
            <h1 class="hero__header">
              <span class="hero__header--desktop">Resolve <br>Low Back<br> and Neck Pain<br> Fast</span>
              <div class="hero__header--mobile"><span>Resolve Low Back and Neck Pain Fast</span></div>
            </h1>
            <div class="hero__details">
              <div class="hero__img-small">
              <img src="https://dcphysiotherapy.ie/wp-content/uploads/2021/05/dc-google-reviews-logo.png" alt="Power by google">
              </div>
              <div class="hero__button">
                <a href="/book-an-appointment/" class="button">Book an appointment</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      id="reviews-specialties"
      class="page-section page-section--light-grey"
    >
      <div class="wrapper">
        <div class="rows rows--break-900">
          <div class="colour-tile">
            <div class="colour-tile__backdrop colour-tile__backdrop--blue"></div>
            <div class="colour-tile__inner">
              <h3 class="headline headline--blue">
                <span class="headline--small">DC Physio</span><br />
                Clondalkin
              </h3>
  
              <address class="colour-tile__section">
                Unit 4, Newlands Business Park, Newlands Road, Clondalkin
              </address>
  
              <span class="colour-tile__section">
                5.0 <span class="review__rating">★★★★★</span> 86 reviews</span
              >
              <div class="colour-tile__section">
                <?php
                  $tile_testimonials = random_reviews($review_data, 3);
                  foreach($tile_testimonials as $testimonial){
                    if(is_null($testimonial)){
                      continue;
                    } ?>

                <div class="review">
                  <div class="review__meta-details">
                    <div class="review__avatar">
                      <img style="
                        height: 100%; 
                        width: 100%; 
                        object-position: center; 
                        object-fit: cover;
                      "  src="<?php echo $testimonial->img_src ?>" alt="">
                    </div>
                    <div>
                      <div class="review__author"><strong><?php echo $testimonial->author ?></strong></div>
                      <div class="review__rating"><?php echo $testimonial->rating ?></div>
                    </div>
                  </div>
                  <div class="review__details">
                    <div class="review__content">
                    <?php echo $testimonial->text ?>
                    </div>
                  </div>
               </div>

                 <?php }
                ?>
              
              


                
              </div>
            </div>
          </div>

          <?php include "we-specialize-in.php" ?>
  
        </div>
      </div>
    </section>
    
    <?php 
      include 'reviews-carousel.php'
    ?>

  
  
    <section
      id="pain-points"
      class="page-section page-section--no-p"
    >
      <picture class="pain-points__background-img">
        <img loading="lazy" src="<?php echo get_theme_file_uri("/assets/images/dc-home-banner-2.jpg"); ?>" alt="" />
      </picture>
      <div class="pain-points__overlay">
        <div class="wrapper wrapper--full-height">
          <div class="pain-points">
            <div class="pain-points__inner">
              <h2 class="pain-points__title headline headline--large">
                AT DC PHYSIO<br />CLONDALKIN
              </h2>
              <h3 class="pain-points__sub-title headline--light">
                we have a keen interest in human<br />movement with particular
                focus on:
              </h3>
              <ul>
                <li class="pain-points__item">
                  <h4>Lower Back Pain</h4>
                  <p>
                    We specialise in treating lower back pain. Physiotherapists in
                    our Physio Clondalkin are chartered and are experts in their
                    field.
                  </p>
                </li>
                <li class="pain-points__item">
                  <h4>Neck Pain</h4>
                  <p>
                    Neck pain can be a result of increased pressure on a spinal
                    disc. Muscle strain or muscle spasm are common causes of neck
                    pain.
                  </p>
                </li>
                <li class="pain-points__item">
                  <h4>Non-Surgical Spinal Decompression</h4>
                  <p>
                    Non-Surgical Spinal Decompression Therapy is a revolutionary
                    treatment for Lower Back and Neck Pain.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section
      id="specialties-opening-hours"
      class="page-section page-section--light-grey"
    >
      <div class="wrapper">
        <div class="rows rows--break-900">
          
        <?php include "we-specialize-in.php" ?>
  
          <div class="colour-tile">
            <div class="colour-tile__backdrop colour-tile__backdrop--blue"></div>
            <div class="colour-tile__inner">
              <h3 class="headline headline--blue">
                Clondalkin<br />
                Clinic
              </h3>
  
              <p>
                The clinics flexible opening times and location in Clondalkin,
                Dublin 22 makes us ideal for patients who require appointments
                outside normal working hours.
              </p>
  
              <strong>Opening hours</strong>
              <ul class="table table--grey">
                <li>Monday - Friday 8:00 am - 8:00 pm</li>
                <li>Saturday 9:00 am - 6:00 pm</li>
                <li>Sunday Closed</li>
              </ul>
              <a href="/book-an-appointment/" class="button">Book an appointment</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--map begin-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1417.3217488733253!2d-6.3906134284587495!3d53.31386542168281!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6b1399ec83b54a8!2sPhysio%20Clondalkin%20-%20DC%20Physiotherapy!5e0!3m2!1sen!2sie!4v1664538432741!5m2!1sen!2sie"
      width="100%"
      height="450"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"></iframe>
    <!--map end-->
  </main>

   <?php get_footer();