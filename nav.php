<nav class="nav nav--no-overflow">
  <div class="nav__upper">
      <div class="nav__logo">
          <a href="<?php echo site_url('/'); ?>">
              <img 
                  src="<?php echo get_theme_file_uri("/assets/images/logo-white.png"); ?>" 
                  alt="dcphysiotherapy logo" />
          </a>
      </div>
      <div class="nav__button">&equiv;</div>
  </div>

  
    <ul class="nav__lower nav__links">
        <li class="nav__link <?php if($wp->request === "") echo "nav__link--active" ?>"><a href="<?php echo site_url('/'); ?>">Home</a></li>
        <li class="nav__link <?php if($wp->request === "non-surgical-spinal-decompression") echo "nav__link--active" ?>">
            <a href="<?php echo site_url('/non-surgical-spinal-decompression/'); ?>">Non-Surgical Spinal Decompression</a>
        </li>
        <li class="nav__link  <?php if(in_array($wp->request, $portfolioPages)) echo "nav__link--active" ?>">
            <div class="nav__sub-menu-link">
                <a href="<?php echo site_url('/conditions-we-treat/'); ?>">Conditions We Treat</a>
                <span class="nav__sub-menu__toggle-btn">
                    &plus;
                </span>
            </div>
            <ul class="nav__sub-menu">
                <li><a href="<?php echo site_url('/sciatica/'); ?>">Sciatica</a></li>
                <li><a href="<?php echo site_url('/lumbar-disc-herniation/'); ?>">Lumbar Disc Herniation</a></li>
                <li><a href="<?php echo site_url('/low-back-pain/'); ?>">Low Back Pain</a></li>
                <li><a href="<?php echo site_url('/bulging-discs/'); ?>">Bulging Discs</a></li>
                <li><a href="<?php echo site_url('/chronic-pain/'); ?>">Chronic Pain</a></li>
                <li><a href="<?php echo site_url('/degenerative-disc-disease/'); ?>">Degenerative Disc Disease</a></li>
                <li><a href="<?php echo site_url('/occupational-injuries/'); ?>">Occupational Injuries</a></li>
                <li><a href="<?php echo site_url('/ankle-sprain/'); ?>">Ankle Sprain</a></li>
                <li><a href="<?php echo site_url('/tendonitis/'); ?>">Tendonitis</a></li>
                <li><a href="<?php echo site_url('/arthritis-osteoarthritis/'); ?>">Arthritis | Osteoarthritis</a></li>
                <li><a href="<?php echo site_url('/sports-physiotherapy/'); ?>">Sports Physiotherapy</a></li>
                <li><a href="<?php echo site_url('/whiplash/'); ?>">Whiplash</a></li>
                <li><a href="<?php echo site_url('/deep-tissue-massage/'); ?>">Deep Tissue Massage</a></li>
                <li><a href="<?php echo site_url('/dry-needling-trigger-point-therapy/'); ?>">Dry Needling Trigger Point Therapy</a></li>
                <li><a href="<?php echo site_url('/neck-pain/'); ?>">Neck Pain</a></li>
                <li><a href="<?php echo site_url('/spinal-mobilisations/'); ?>">Spinal Mobilisations</a></li>
                <li><a href="<?php echo site_url('/spinal-manipulation/'); ?>">Spinal Manipulation</a></li>
            </ul>
        </li>
        <li class="nav__link <?php if($wp->request === "about-us") echo "nav__link--active" ?>"><a href="<?php echo site_url('/about-us/'); ?>">About Us</a></li>
        <li class="nav__link <?php if($wp->request === "team") echo "nav__link--active" ?>"><a href="<?php echo site_url('/team/'); ?>">Team</a></li>
        <li class="nav__link <?php if($wp->request === "pricing") echo "nav__link--active" ?>"><a href="<?php echo site_url('/pricing/'); ?>">Pricing</a></li>
        <li class="nav__link <?php if($wp->request === "contact") echo "nav__link--active" ?>"><a href="<?php echo site_url('/contact/'); ?>">Contact</a></li>
    </ul>
  
</nav>