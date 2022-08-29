
<?php 
    get_header(); ?>

    <main>
    <section id="hero-banner" class="hero">
      <picture class="background-img">
        <source
          srcset="<?php echo get_theme_file_uri("/assets/images/dc-main-home-banner-desktop.webp"); ?>"
          media="(min-width: 800px)"
        />
        <img src="<?php echo get_theme_file_uri("/assets/images/dc-main-home-banner-for-mobile-3.webp");?>" alt="" />
      </picture>
  
      <div class="hero__overlay overlay overlay--grey">
        <div class="wrapper">
          <div class="hero__inner">
            <h1 class="hero__header">
              Clondalkin`s highest independently google rated physio clinic
            </h1>
            <div class="hero__button">
              <a href="#" class="button">Book an appointment</a>
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
                <div class="review">
                  <div class="review__avatar">C</div>
                  <div class="review__details">
                    <div class="review__author"><strong>Ciara B</strong></div>
                    <div class="review__rating">★★★★★</div>
                    <div class="review__content">
                      Last month, I developed an injury while playing football and
                      decided to go see a physio as I was not able to do simple
                      daily tasks of my own. Fortunately, a friend recommended
                      physiotherapy Clondalkin and I'm so grateful to him for that
                      now. My body has fully recovered after only a few sessions.
                      Good Job guys!
                    </div>
                  </div>
                </div>
                <div class="review">
                  <div class="review__avatar">M</div>
                  <div class="review__details">
                    <div class="review__author"><strong>Michael L</strong></div>
                    <div class="review__rating">★★★★★</div>
                    <div class="review__content">
                      I had a neck problem with a disc protruding giving me huge
                      discomfort. My Doctor said there was nothing they could do
                      but surgery, which may not work. I researched myself and
                      found DC physiotherapy. Dave was amazing he talked me
                      through the procedure and after a number of sessions, I was
                      back in the gym and playing basketball again. A totally
                      amazing result. Dave was so knowledgeable and I have never
                      looked back. Had one or two maintenance session since, but
                      all is perfect now. Could not recommend him highly enough.
                    </div>
                  </div>
                </div>
                <div class="review">
                  <div class="review__avatar">L</div>
                  <div class="review__details">
                    <div class="review__author">
                      <strong>Lucy Murphy P</strong>
                    </div>
                    <div class="review__rating">★★★★★</div>
                    <div class="review__content">
                      After trying other physios and every drug under the sun, I
                      searched for an alternative treatment for the severe pain my
                      herniated discs were causing me. After a 30 min consultation
                      with Robbie, I felt assured that he knew what he was talking
                      about. We started a 10 session course of spinal
                      decompression. The treatment itself was very comfortable,
                      and I loved that it was treating the issue, rather than the
                      symptoms. I started right after a 3 week long back spasm
                      where I couldn't stand up or put my shoes on without help,
                      and I am now pain free. I want to thank Robbie, Kane, and
                      David for their help and welcoming environment throughout my
                      course of treatment, and I would recommend this to anyone.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="colour-tile">
    <div class="colour-tile__backdrop colour-tile__backdrop--orange"></div>
    <div class="colour-tile__inner">
      <h3 class="headline headline--orange">
        <span class="headline--small">We</span><br />
        specialize in:
      </h3>
      <ul class="colour-tile__section checklist">
        <li>Low back pain</li>
        <li>Bulging Discs</li>
        <li>Sciatica</li>
        <li>Sports Injury</li>
        <li>Non-Surgical Spinal Decompression</li>
        <li>Spinal Mobilisations</li>
        <li>Chronic Pain</li>
      </ul>
    </div>
  </div>
  
        </div>
      </div>
    </section>
    <section id="testimonials" class="page-section" style="min-height: 500px">
    <div class="wrapper">
      <h2 class="headline headline--center">
        <span class="headline--light headline--small">What our patients</span
        ><br />
        say about us
      </h2>
      <div class="carousel">
        <div
          class="review review--no-flex review--spaced carousel__slide carousel__slide--is-visible"
        >
          <div class="review__avatar">G</div>
          <div class="review__details">
            <div class="review__author">Gavin O'Brien</div>
            <div class="review__rating">★★★★★</div>
            <div class="review__content">
              I can highly recommend DC Physiotherapy in Clondalkin Village. I
              experienced lower back pain over the last 3-4 months as a result of
              working from home and it was starting to take its toll. I heard
              about DC Physiotherapy from friends and I am delighted I made an
              appointment to see David as within 5 mins, he was able to provide a
              root cause for the pain. Three sessions later and I am back running
              pain free. Thanks David for your guidance and genuine interest in my
              well being.
            </div>
          </div>
        </div>
        <div class="review review--no-flex review--spaced carousel__slide">
          <div class="review__avatar">J</div>
          <div class="review__details">
            <div class="review__author">Jacob King</div>
            <div class="review__rating">★★★★★</div>
            <div class="review__content">
              I have had a painful herniated disc in my neck for over 12 years
              .The pain travelled throughout my shoulders arms and hands.I
              experienced sleepless night's from time to time.When I heard about
              IDD therapy I decided to give it a try. After a few visit's I found
              a good improvement and was soon painfree.The improvement continued
              throughout my treatment.I am now free from pain and painkillers. I
              would definitely recommend anybody with physical issues to go for
              IDD therapy. I am glad I did and its safe and painless.James.
            </div>
          </div>
        </div>
        <div class="review review--no-flex review--spaced carousel__slide">
          <div class="review__avatar">D</div>
          <div class="review__details">
            <div class="review__author">David Long</div>
            <div class="review__rating">★★★★★</div>
            <div class="review__content">
              About two years ago I injured my lower back which caused restricted
              movement and a lot of sciatica pain in my left leg. I tried ignoring
              it, hoping it would get better over time. surprisingly it didn't. I
              went for a scan and the the consultant said my only option was an
              operation to remove the section of herniated disc that was applying
              pressure onto the sciatica nerve. To be honest the taught of an
              operation scared me. So I decided to try alternative treatment
              first. I tried Physiotherapy, with no success. Then I tried amatsu
              treatment, still no success.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
    <section
      id="pain-points"
      class="page-section page-section--full-height page-section--no-p"
    >
      <picture class="background-img">
        <img loading="lazy" src="<?php echo get_theme_file_uri("/assets/images/dc-home-banner-2.jpg"); ?>" alt="" />
      </picture>
      <div class="overlay overlay--dark-blue">
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
                  <h4>Low Back Pain</h4>
                  <p>
                    We specialise in treating low back pain. Physiotherapists in
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
                    treatment for Low Back and Neck Pain.
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
          <div class="colour-tile">
    <div class="colour-tile__backdrop colour-tile__backdrop--orange"></div>
    <div class="colour-tile__inner">
      <h3 class="headline headline--orange">
        <span class="headline--small">We</span><br />
        specialize in:
      </h3>
      <ul class="colour-tile__section checklist">
        <li>Low back pain</li>
        <li>Bulging Discs</li>
        <li>Sciatica</li>
        <li>Sports Injury</li>
        <li>Non-Surgical Spinal Decompression</li>
        <li>Spinal Mobilisations</li>
        <li>Chronic Pain</li>
      </ul>
    </div>
  </div>
  
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
                <li>Monday – Friday 8:00 am – 8:00 pm</li>
                <li>Saturday 9:00 am – 6:00 pm</li>
                <li>Sunday Closed</li>
              </ul>
              <a href="#" class="button">Book an appointment</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--map begin-->
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9534.66290150727!2d-6.3900619!3d53.3134326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6b1399ec83b54a8!2sPhysio%20Clondalkin%20-%20DC%20Physiotherapy!5e0!3m2!1sen!2sie!4v1645729366162!5m2!1sen!2sie"
      width="100%"
      height="450"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
    ></iframe>
    <!--map end-->
  </main>

   <?php get_footer();