document.addEventListener("DOMContentLoaded", function(){


    

    window.addEventListener('scroll', function() {

        if (window.scrollY > 50) {
          document.getElementById('navbar-menu').classList.add('fixed-top');
          // add padding top to show content behind navbar
          navbar_height = document.querySelector('.navbar').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
          document.getElementById('navbar-menu').classList.remove('fixed-top');
           // remove padding top from body
          document.body.style.paddingTop = '0';
        } 
    });
  }); 


function active_item(vhref){
  const menuItem = document.querySelectorAll('a.nav-link');
  for (let i=0; i<menuItem.length; i++){
    if (menuItem[i].href === vhref){
      console.log('la referencia es ' + vhref)
      console.log(menuItem[i].classList);
      menuItem[i].classList.add('active');
    } else {
        menuItem[i].classList.remove('active');
    }
  }
};