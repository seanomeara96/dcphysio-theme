
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="DC Physio Clondalkin specialise in Low Back and Neck Pain. We are a Chartered Physiotherapy Clinic offering best in class Physio. We are experts in Non-Surgical Spinal Decompression." />
    <title>Physio Clondalkin - Chartered Physiotherapy Clinic</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap"
      rel="stylesheet"
    />
    <!--<link href="/assets/index.39f5067d47a50ffb4daa.css" rel="stylesheet" />-->
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="nav page-section--small">
  <div class="nav__button"><div class="wrapper">&equiv;</div></div>

  <div class="nav__links">
    <div class="wrapper">
      <div class="nav__logo">
        <a href="/">
          <img src="<?php echo get_theme_file_uri("/assets/images/logo-white.png"); ?>" alt="" />
        </a>
      </div>
      <ul class="nav__links__inner">
        <li class="nav__link <?php if($wp->request === "") echo "nav__link--active" ?>">
          <a href="/">Home</a>
        </li>
        <li class="nav__link  <?php if(in_array($wp->request, array(
          "conditions-we-treat", 
          "sciatica", 
          "lumbar-disc-herniation",
          "low-back-pain",
          "bulging-discs",
          "chronic-pain",
          "degenerative-disc-disease",
          "occupational-injuries",
          "ankle-sprain",
          "tendonitis",
          "arthritis-osteoarthritis",
          "sports-physiotherapy",
          "whiplash",
          "deep-tissue-massage",
          "dry-needling-trigger-point-therapy",
          "neck-pain",
          "spinal-mobilisations",
          "spinal-manipulation"
          ))) echo "nav__link--active" ?>">
          <a href="/conditions-we-treat/">Conditions we Treat</a>
          <ul class="nav__sub-menu">
  <li><a href="/sciatica/">Sciatica</a></li>
  <li>
    <a href="/lumbar-disc-herniation/">Lumbar Disc Herniation</a>
  </li>
  <li><a href="/low-back-pain/">Low Back Pain</a></li>
  <li><a href="/bulging-discs/">Bulging Discs</a></li>
  <li><a href="/chronic-pain/">Chronic Pain</a></li>
  <li>
    <a href="/degenerative-disc-disease/">Degenerative Disc Disease</a>
  </li>
  <li><a href="/occupational-injuries/">Occupational Injuries</a></li>
  <li><a href="/ankle-sprain/">Ankle Sprain</a></li>
  <li><a href="/tendonitis/">Tendonitis</a></li>
  <li>
    <a href="/arthritis-osteoarthritis/">Arthritis | Osteoarthritis</a>
  </li>
  <li><a href="/sports-physiotherapy/">Sports Physiotherapy</a></li>
  <li><a href="/whiplash/">Whiplash</a></li>
  <li><a href="/deep-tissue-massage/">Deep Tissue Massage</a></li>
  <li>
    <a href="/dry-needling-trigger-point-therapy/"
      >Dry Needling Trigger Point Therapy</a
    >
  </li>
  <li><a href="/neck-pain/">Neck Pain</a></li>
  <li><a href="/spinal-mobilisations/">Spinal Mobilisations</a></li>
  <li><a href="/spinal-manipulation/">Spinal Manipulation</a></li>
</ul>

        </li>

        <li class="nav__link <?php if($wp->request === "non-surgical-spinal-decompression") echo "nav__link--active" ?>">
          <a href="/non-surgical-spinal-decompression/"
            >Non-Surgical Spinal Decompression</a
          >
        </li>
        <li class="nav__link <?php if($wp->request === "about") echo "nav__link--active" ?>">
          <a href="/about/">About Us</a>
        </li>
        <li class="nav__link <?php if($wp->request === "team") echo "nav__link--active" ?>">
          <a href="/team/">Team</a>
        </li>
        <li class="nav__link <?php if($wp->request === "pricing") echo "nav__link--active" ?>">
          <a href="/pricing/">Pricing</a>
        </li>
        <li class="nav__link <?php if($wp->request === "contact") echo "nav__link--active" ?>">
          <a href="/contact/">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>