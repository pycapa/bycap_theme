'use strict'
// variables
let navbar = document.getElementById('navbar');
let button = document.getElementById("toggle-button");
let menu = document.getElementById("navbarNav");
let checked = document.getElementById('toggle-button');
let label = document.getElementById('label-toggle-button');
let icon = document.getElementById('icon-menu');

let elements = [['.nav-container::after'], 
['content', "''"],
['background-color', '#101018b7', true],
['width', '50%', true],
['height', '100%'],
['position', 'absolute'],
['top','0'],
['left','0'],
['z-index',-1000],
['border-radius','0 15px 15px 0']];



if (performance.type == performance.TYPE_RELOAD) {
      sessionStorage.removeItem('rule_pos');
    }

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

// function to create pseudoclass in custom stylesheet.
// arguments must be a object
function create_psudo_class(css_name, insert, ...args){ 
      const sheets = document.styleSheets
      for (var i = 0; i < args.length; i++) {
            var j = 1,
                rule = args[i],
                selector = rule[0],
                propStr = '';
            // If the second argument of a rule is an array of arrays, correct our variables.
            if (Array.isArray(rule[1][0])) {
              rule = rule[1];
              j = 0;
            }
            
            for (var pl = rule.length; j < pl; j++) {
                  var prop = rule[j];
                  propStr += prop[0] + ': ' + prop[1] + (prop[2] ? '!important' : '') + ';\n';
            }
      }

      for (const sheet of sheets) {
            if (sheet.ownerNode.id === css_name){
                  const rule_key = sessionStorage.getItem('rule_pos');
                  if(insert){
                        if (rule_key === null){
                              sessionStorage.setItem('rule_pos',sheet.cssRules.length )
                              sheet.insertRule(selector +'{'+ '\n' + propStr + '}', sheet.cssRules.length);                      
                        }
                  } else {
                        if(rule_key!=null){
                              sheet.deleteRule(rule_key);
                              sessionStorage.removeItem('rule_pos');
                        }

                  }

            }
      }
}

window.addEventListener('scroll', ()=>{
      const scroll = window.scrollY;
      let nav_var = document.getElementById('navbar');
      if((scroll>50)){
            create_psudo_class('bc-style-css', true, elements); 
            nav_var.classList.add('fixed-top');           
      }else {
            create_psudo_class('bc-style-css', false, elements);
            nav_var.classList.remove('fixed-top');           


      }
})