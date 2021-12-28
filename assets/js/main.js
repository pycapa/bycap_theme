/* document.addEventListener("DOMContentLoaded", function () { */

window.addEventListener('scroll', function () {

      let icon_up = document.querySelector('.icon-up');
      let menu_bar = document.getElementById('navbar-menu');

      if (window.scrollY > 50) {
            menu_bar.classList.add('fixed-top');
            icon_up.style.display = 'block';
      } else {
            menu_bar.classList.remove('fixed-top');
            icon_up.style.display = 'none';
      }
});
/* }); */


function active_item(vhref) {
      const menuItem = document.querySelectorAll('a.nav-link');
      for (let i = 0; i < menuItem.length; i++) {
            if (menuItem[i].href === vhref) {
                  console.log('la referencia es ' + vhref)
                  console.log(menuItem[i].classList);
                  menuItem[i].classList.add('active');
            } else {
                  menuItem[i].classList.remove('active');
            }
      }
};