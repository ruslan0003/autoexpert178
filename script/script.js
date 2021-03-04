document.addEventListener("DOMContentLoaded", function() { 
const anchors = document.querySelectorAll('.header__link');
anchors.forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});
});

function visitUrl(url) {
  location.href=('url');
}