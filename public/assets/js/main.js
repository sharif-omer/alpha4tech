/**
* Template Name: Tempo
* Updated: Mar 10 2023 with Bootstrap v5.2.3
* Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 16
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }


   /**
   * Mobile nav toggle
   */

        // عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', function() {
          const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
          const navbar = document.getElementById('navbar');
          
          // حدث النقر على أيقونة القائمة
          mobileNavToggle.addEventListener('click', function(e) {
              navbar.classList.toggle('navbar-mobile');
              this.classList.toggle('bi-list');
              this.classList.toggle('bi-x');
              e.stopPropagation(); // منع انتشار الحدث
          });
          
          // إغلاق القائمة عند النقر خارجها
          document.addEventListener('click', function(e) {
              if (navbar.classList.contains('navbar-mobile') && 
                  !navbar.contains(e.target) && 
                  e.target !== mobileNavToggle) {
                  navbar.classList.remove('navbar-mobile');
                  mobileNavToggle.classList.add('bi-list');
                  mobileNavToggle.classList.remove('bi-x');
              }
          });
          
          // إغلاق القائمة عند النقر على رابط
          document.querySelectorAll('.navbar a').forEach(link => {
              link.addEventListener('click', function() {
                  if (navbar.classList.contains('navbar-mobile')) {
                      navbar.classList.remove('navbar-mobile');
                      mobileNavToggle.classList.add('bi-list');
                      mobileNavToggle.classList.remove('bi-x');
                  }
              });
          });
          
          // تفعيل القائمة المنسدلة
          document.querySelectorAll('.dropdown > a').forEach(link => {
              link.addEventListener('click', function(e) {
                  if (navbar.classList.contains('navbar-mobile')) {
                      e.preventDefault();
                      this.nextElementSibling.classList.toggle('dropdown-active');
                  }
              });
          });
          
          // التمرين السلس عند النقر على الروابط
          document.querySelectorAll('.scrollto').forEach(link => {
              link.addEventListener('click', function(e) {
                  e.preventDefault();
                  
                  const targetId = this.getAttribute('href');
                  const targetElement = document.querySelector(targetId);
                  
                  if (targetElement) {
                      window.scrollTo({
                          top: targetElement.offsetTop - 80,
                          behavior: 'smooth'
                      });
                  }
              });
          });
      });


      // langSwitcherMobile  
document.addEventListener('DOMContentLoaded', function () {
  const languageToggle = document.getElementById('langSwitcherMobile');

  if (languageToggle) {
    languageToggle.addEventListener('click', function (event){
      event.stopPropagation();
      event.preventDefault();

      const dropdownMenu = this.nextElementSibling;
      const isOpen = dropdownMenu.classList.contains('show');

      document.querySelectorAll('.dropdown-active').forEach(menu => {
        menu.classList.remove('dropdown-active');
      });

      dropdownMenu.classList.toggle('show');
       if(!isOpen) {
        event.stopImmediatePropagation();
       }
    });
  }
  document.addEventListener('click', function(e) {
    const dropdown = document.querySelector('.languge-switcher-mobile .dropdown-menu');
    if(dropdown && !dropdown.contains(e.target)) {
      dropdown.classList.remove('show');
    }
  });
});

/**
   * typewriter
*/
const text = "Alpha4Tech";
const typingSpeed = 150;
const deletingSpeed = 100;
const pauseTime = 1500;

let i = 0;
let isDeleting = false;

const typewriter = document.getElementById("typewriter");

function type() {
  if (isDeleting) {
    typewriter.textContent = text.substring(0, i--);
  } else {
    typewriter.textContent = text.substring(0, i++);
  }

  if (!isDeleting && i === text.length + 1) {
    setTimeout(() => isDeleting = true, pauseTime);
  } else if (isDeleting && i < 0) {
    isDeleting = false;
  }

  setTimeout(type, isDeleting ? deletingSpeed : typingSpeed);
}

type();


  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });

      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

})()