
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php 

      $pageSEO = array(
        (object)array("url"=>"","title"=>"Home - Physio Clondalkin - Chartered Physiotherapy Clinic","description"=>"DC Physio Clondalkin specialise in Low Back and Neck Pain. We are a Chartered Physiotherapy Clinic offering best in class Physio. We are experts in Non-Surgical Spinal Decompression."),
        (object)array("url"=>"sports-physiotherapy","title"=>"Sports Physiotherapy - DC Physiotherapy in Dublin are experts in Sports Physiotherapy","description"=>"DC Physiotherapy in Dublin are experts in Sports Physiotherapy assessments and treatments. We aim to get you back to your sport as fast as possible using an evident based approach."),
        (object)array("url"=>"non-surgical-spinal-decompression","title"=>"Non-Surgical Spinal Decompression - Non-Surgical Spinal Decompression Therapy Dublin Neck and Back","description"=>"DC Physio in Dublin specialise in Non-Surgical Spinal Decompression Therapy for the treatment of low back and neck pain from a spinal disc issue such as herniation or degenerative disc disease."),
        (object)array("url"=>"contact","title"=>"Contact - Physio Clondalkin - DC Physio","description"=>"Physiotherapy in Clondalkin, Dublin"),
        (object)array("url"=>"occupational-injuries","title"=>"Occupational Injuries - Physio Clondalkin - DC Physio","description"=>"Many conditions fall under the category ‘occupational injuries’ ranging from falling to recurring strain injuries resulting from repetitive overuse."),
        (object)array("url"=>"spinal-manipulation","title"=>"Spinal Manipulation - Physio Clondalkin - DC Physio","description"=>"DC Physio Clondalkin/Lucan are experts in spinal manipulation"),
        (object)array("url"=>"bulging-discs","title"=>"Bulging Discs - Effective Bulging Discs Treatment available at DC Physiotherapy","description"=>"Non-Surgical Spinal Decompression is an Effective treatment for Bulging Discs which is available at DC Physiotherapy Dublin. It has been shown this procedure has a 90 percent effectiveness."),
        (object)array("url"=>"dry-needling-trigger-point-therapy","title"=>"Dry Needling Trigger Point Therapy - Physio Clondalkin - DC Physio","description"=>"Therapy can be used for a variety of musculoskeletal issues"),
        (object)array("url"=>"deep-tissue-massage","title"=>"Deep Tissue Massage - Physio Clondalkin - DC Physio","description"=>"Deep tissue massage has many benefits including increased blood flow to the area, lymph drainage and reduced muscle tension."),
        (object)array("url"=>"tendonitis","title"=>"Tendonitis - Physio Clondalkin - DC Physio","description"=>"Inflammation of a tendon or mostly known as Tendonitis."),
        (object)array("url"=>"book-an-appointment","title"=>"Book an Appointment - Physio Clondalkin - DC Physio","description"=>"Book an Appointment Online Booking BOOK BY PHONE BOOK AN APPOINTMENT DateNowTommorowNext Week What Our Patients Say about us Jacob King ★★★★★ I have had a painful herniated disc in my neck for over 12 years .The pain travelled throughout my shoulders arms and hands.I experienced sleepless night's from time to time.When I heard about..."),
        (object)array("url"=>"team","title"=>"Team - Physio Clondalkin - DC Physio","description"=>"David Carpenter MISCP Chartered Physiotherapist David is an expert in Manual Therapy, Exercise Rehabilitation, Dry Needling and Non-Surgical Spinal Decompression Therapy in the treatment of Low Back and Neck Pain. Speciality David is and expert in Manual Therapy, Exercise Rehabilitation, Dry Needling and Non-Surgical Spinal Decompression Therapy in the treatment of Low Back and Neck..."),
        (object)array("url"=>"conditions-we-treat","title"=>"Conditions we Treat - Physio Clondalkin - DC Physio","description"=>"Sciatica Sciatica is pain associated with spinal ... Lumbar Disc Herniation Generally, back pain caused mainly by an... Low Back Pain We specialise in treating low back pain.... Bulging Discs A bulging disc injury can be very painfu... Chronic Pain Unfortunately, chronic pain is a dark re... Degenerative Disc Disease Disc Degeneration, Disc bulge, Slipped..."),
        (object)array("url"=>"lumbar-disc-herniation","title"=>"Lumbar Disc Herniation - Safe and effective Lumbar Disc Herniation treatment Dublin","description"=>"DC Physiotherapy in Dublin specialise in Non-Surgical Spinal Decompression for the treatment of Lumbar Disc Herniation`s, this procedure can prevent the need for spinal surgery."),
        (object)array("url"=>"spinal-mobilisations","title"=>"Spinal Mobilisations - Physio Clondalkin - DC Physio","description"=>"Generally, back pain caused mainly by any region within the lumbar spine getting nervous system intervention."),
        (object)array("url"=>"pricing","title"=>"Pricing - Physio Clondalkin - DC Physio","description"=>"physiotherapy PRICING Physiotherapy Initial Assessment 60€CONSULTATION30 MINUTES DURATIONFOLLOW UP TREATMENT ADVICEBOOK NOW Physiotherapy Follow Up Treatment 60€TREATMENT30 MINUTES DURATIONFOLLOW UP TREATMENT ADVICEBOOK NOW NON-SURGICAL SPINAL DECOMPRESSION PRICING 1 Non-Surgical Spinal Decompress Treatment 150€ ASSESSMENT AND TREATMENT55 MINS IN DURATIONTREATMENT 2 TO 6 WILL ALSO INCLUDE SOFT TISSUE MOBILISATION AND EXERCISE REHABILITATIONBOOK NOW 6 Non-Surgical Spinal..."),
        (object)array("url"=>"neck-pain","title"=>"Neck Pain - Effective Neck Pain Treatments available at DC Physiotherapy","description"=>"Non-Surgical Spinal Decompression is an Effective treatment for Neck Pain which is available at DC Physiotherapy Dublin. It has been shown this procedure has a 90 percent effectiveness."),
        (object)array("url"=>"arthritis-osteoarthritis","title"=>"Arthritis | Osteoarthritis - Physio Clondalkin - DC Physio","description"=>"Often pains and aches are defined during the term Arthritis."),
        (object)array("url"=>"low-back-pain","title"=>"Low Back Pain - Low Back Pain treatment in Dublin at DC Physiotherapy Clondlakin","description"=>"DC Physiotherapy Clondalkin are experts in treating people with Low Back Pain, our aim is to treat the source of your low back pain not the symptoms, we use the most effective treatments."),
        (object)array("url"=>"degenerative-disc-disease","title"=>"Degenerative Disc Disease - Effective Degenerative Disc Disease Treatment available at DC Physiotherapy","description"=>"Non-Surgical Spinal Decompression is an Effective treatment for Degenerative Disc Disease, now available at DC Physiotherapy Dublin. Proven to be 90 percent effective for Degenerative Discs."),
        (object)array("url"=>"ankle-sprain","title"=>"Ankle Sprain - Physio Clondalkin - DC Physio","description"=>"An ankle sprain is a very common injury but unfortunately, it is often not rehabilitated properly."),
        (object)array("url"=>"sciatica","title"=>"Sciatica - Best in Class Sciatica Treatment at DC Physiotherapy Dublin","description"=>"Sciatica can be very debilitating, DC physiotherapy in Dublin have a specialised treatment which is the most effective Non-Surgical treatment available, very high success rate."),
        (object)array("url"=>"whiplash","title"=>"Whiplash - Physio Clondalkin - DC Physio","description"=>"Whiplash is a very controversial condition, because there are many disputes about its existence but because of the way it is handled by the legal and medical system."),
        (object)array("url"=>"chronic-pain","title"=>"Chronic Pain - Physio Clondalkin - DC Physio","description"=>"Unfortunately, chronic pain is a dark reality for many people."),
        (object)array("url"=>"about","title"=>"About Physiotherapy Clondalkin | DC Physiotherapy Clinic","description"=>"Physiotherapy Clondalkin is an expert Chartered Physiotherapy Clinic specializing in the treatment of Low Back and Neck Pain from a Disc Herniation or Sciatica."),
      );

      function find_object_by_url($pageDetails, $searchURL){
        
        foreach($pageDetails as $page){
          
          if($page->url === $searchURL){
            return $page;
          }
        }
        return $pageSEO[0];
      }

      $currentPageDetails = find_object_by_url($pageSEO, $wp->request);
?>
    <title><?php echo $currentPageDetails->title ?></title>
    <meta name="description" content=<?php echo $currentPageDetails->description ?> />    
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