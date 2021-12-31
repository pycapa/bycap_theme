'use strict'
// variables
let navbar = document.getElementById('navbar');
let button = document.getElementById("toggle-button");
let menu = document.getElementById("navbarNav");
let checked = document.getElementById('toggle-button');
let label = document.getElementById('label-toggle-button');
let icon = document.getElementById('icon-menu');

button.addEventListener("click", () => {

      if (checked.checked) {
            menu.classList.add('show-menu');
            label.classList.add('show-checked-button');
            navbar.classList.add('menu-responsive');
            icon.classList.remove('fa-ellipsis-v');
            icon.classList.add('fa-times');

      } else {
            menu.classList.remove('show-menu');
            label.classList.remove('show-checked-button');
            navbar.classList.remove('menu-responsive');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-ellipsis-v');

      };
});


window.addEventListener("resize", () => {
      let window_width = window.innerWidth;
      if (window_width >= 700 && checked.checked) {
            checked.click();
      }
})


// including data-text to menu links.
data_text_to_menu_links();
function data_text_to_menu_links() {
      let menu = document.getElementsByClassName('nav-link');
      for (const item of menu) {
            item.setAttribute('data-text', item.innerText);
      }
}

window.addEventListener('scroll', ()=>{
      const scroll = window.scrollY;
      const nav_container = document.getElementById('navbar');
      (scroll > 20) ? nav_container.classList.add('bg-nav-container') : nav_container.classList.remove('bg-nav-container');

      for (const css of document.styleSheets) {
            console.log(css.ownerNode.id);

      }


/* 
      nav_container.styleSheets[0].addRule('navbar::hover', 'background-color: red',0 )


      document.styleSheets[0].addRule('#elid:hover', 'background-color: red', 0);*/
})

// function to create pseudoclass in custom stylesheet.
// arguments must be a object
function create_psudo_class(css_name ,pseudo_name, ...args){ 
      const sheets = document.styleSheets
      for (const sheet of sheets) {
            if (sheet.ownerNode.id === css_name){
                  args.forEach( function(element)  {
                        sheet.insertRule(pseudo_name + element sheet.ownerNode)
                  })
            }
      }
}
let elementos = {
      'content' : '',
      'background' : 'black',
      'width' : '100%'
}


create_psudo_class('bc-style-css', 'class-psudo-name', elementos);