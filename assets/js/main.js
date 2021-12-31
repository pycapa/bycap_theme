/* document.addEventListener("DOMContentLoaded", function () { */

/* 
window.addEventListener('scroll', function () {

      let icon_up = document.querySelector('.icon-up');
      let menu_bar = document.getElementById('navbar-menu');
      menu_bar.classList.add('fixed-top');
      if (window.scrollY > 50) {

            icon_up.style.display = 'block';
      } else {
            icon_up.style.display = 'none';
      }
}); */


/* }); */
/* 
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
}; */


function scroll_up(){
      document.scrollY = 0;
}

'use strict'
// variables
let navbar = document.getElementById('navbar');
let button = document.getElementById("toggle-button");
let menu = document.getElementById("navbarNav");
let checked = document.getElementById('toggle-button');
let label = document.getElementById('label-toggle-button');
let icon = document.getElementById('icon-menu');

button.addEventListener("click", () =>{
    if(checked.checked){
        menu.classList.add('show-menu');
        label.classList.add('show-checked-button');
        navbar.classList.add('menu-responsive');
        icon.classList.remove('fa-ellipsis-v');
        icon.classList.add('fa-times');
        
    }else {
        menu.classList.remove('show-menu');
        label.classList.remove('show-checked-button');
        navbar.classList.remove('menu-responsive');
        icon.classList.remove('fa-times');
        icon.classList.add('fa-ellipsis-v');
    };    
}); 


window.addEventListener("resize", ()=>{
    let window_width = window.innerWidth;
    if (window_width>=700 && checked.checked){
        checked.click();
    }
})