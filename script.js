let menu=document.querySelector('#menu-icon');
let navbar=document.querySelector('.navbar');
menu.onclick=()=>{
    menu.classList.toggle('bx-x');
    menu.classList.toggle('active')
}
window.onscroll=()=>{
    menu.classList.toggle('bx-x');
    menu.classList.toggle('active')
}
const typed = new Typed('.multiple-text', {
    strings: ['Physical Fitness', 'Weight Gain','Strenght Training','Fat lose','Weight Lifting','Running.'],
    typeSpeed: 60,
    backSpeed: 60,
    backDealy:1000,
    loop:true,
  });

  
 