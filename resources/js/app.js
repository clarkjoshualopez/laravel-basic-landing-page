import './bootstrap';


document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('open-btn-menu');
    const closeIcon = document.getElementById('close-btn-menu');
    const mobileMenu = document.getElementById('mobile-menu');
  
    if (hamburger && mobileMenu) {
      hamburger.addEventListener('click', function() {
        if (mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.remove('hidden');
          mobileMenu.classList.remove('max-h-0');
          setTimeout(() => {
          mobileMenu.classList.add('block');
          mobileMenu.classList.add('max-h-screen');
          }, 10)
        }
      });

      closeIcon.addEventListener('click', function() {
        if (mobileMenu.classList.contains('block')) {
            mobileMenu.classList.remove('block');
            mobileMenu.classList.remove('max-h-screen');
            setTimeout(() => {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.add('max-h-0');
            }, 10)
        }
      });
    }
  });