function addNavToggle() {
  const body = document.querySelector("body");
  const navSctn = document.querySelector(".nav");
  const navBtn = document.querySelector(".nav__button");
  const navLinks = document.querySelector(".nav__lower");
  navBtn.addEventListener("click", () => {
    const openClass = "nav__lower--is-open";
    navLinks.classList.toggle(openClass);
    navSctn.classList.toggle("nav--no-overflow");
    [...navLinks.classList].includes(openClass)
      ? (navBtn.innerHTML = "&times;")
      : (navBtn.innerHTML = "&equiv;");
    body.classList.toggle("no-scroll");
  });
}

function subMenuToggle() {
  const subMenu = document.querySelector(".nav__sub-menu");
  const subMenuToggleBtn = document.querySelector(".nav__sub-menu__toggle-btn");
  subMenuToggleBtn.addEventListener("click", () => {
    subMenu.classList.toggle("nav__sub-menu--is-open");
    [...subMenu.classList].includes("nav__sub-menu--is-open")
      ? (subMenuToggleBtn.innerHTML = "&minus;")
      : (subMenuToggleBtn.innerHTML = "&plus;");
  });
}

function startTestimonialSlides() {
  const slideSelector = ".carousel__slide";
  const isVisibleClassName = "carousel__slide--is-visible";
  const testimonialSection = document.querySelector("#testimonials");
  if (!testimonialSection) return;
  const slides = testimonialSection.querySelectorAll(slideSelector);
  function nextSlide(count = 0) {
    slides.forEach((slide) => slide.classList.remove(isVisibleClassName));
    // const previousSlide = count > 0 ? (count - 1) : (slides.length - 1);
    const nextSlideIdx = count < slides.length - 1 ? count + 1 : 0;
    slides[count].classList.add(isVisibleClassName);
    setTimeout(() => nextSlide(nextSlideIdx), 10000);
  }
  nextSlide();
}

function showContent(e, content) {
  return (e.target.innerHTML = content);
}

function truncateReviews() {
  const reviewSection = document.querySelector("#reviews-specialties");
  if (!reviewSection) return;
  const reviews = document.querySelectorAll("#reviews-specialties .review");
  reviews.forEach((review) => {
    const reviewElem = review.querySelector(".review__content");
    const content = reviewElem.innerHTML;
    const updatedContent =
      content.substring(0, 300) +
      `...<strong class="clickable">Read More</strong>`;
    reviewElem.innerHTML = updatedContent;
    reviewElem.querySelector("strong").addEventListener("click", () => {
      reviewElem.innerHTML = content;
    });
  });
}

function truncateTestimonialSlides(){
  const carousel = document.querySelector("#testimonials");
  if(!carousel) return;
  const reviews = carousel.querySelectorAll(".review");
  if(!reviews) return;
  reviews.forEach(review => {
    const textSection = review.querySelector(".review__content");
    const content = textSection.textContent.trim();
    if(content.length < 660) return;
    const updatedContent = content.substring(0, 660) + "<a href=\"https://www.google.com/search?hl=en-IE&gl=ie&q=Physio+Clondalkin+-+DC+Physiotherapy,+Newlands+Business+Park,+4,+Clondalkin,+Co.+Dublin&ludocid=482229989232301224&lsig=AB86z5XUxHOv8rN-BBM8rBi8R-Ow#lrd=0x486772d8c7e54cc3:0x6b1399ec83b54a8,1\">...</a>";
    textSection.innerHTML = updatedContent;
  })
}

function applyDisplayStateToggles() {
  const details = document.querySelectorAll(".details");
  if (!details) return;
  function toggleDisplayState(element) {
    element.classList.toggle("details__body--is-open");
  }
  details.forEach((item) =>
    item
      .querySelector(".details__summary")
      .addEventListener("click", () =>
        toggleDisplayState(item.querySelector(".details__body"))
      )
  );
}

addNavToggle();
subMenuToggle();
startTestimonialSlides();
truncateReviews();
truncateTestimonialSlides();
applyDisplayStateToggles();
