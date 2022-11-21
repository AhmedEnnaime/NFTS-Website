const sidebarBtn = document.querySelector('.sidebar');
const navbar = document.querySelector('.navbar');



 // SIDEBAR TOGGLE
console.log(sidebarBtn);
console.log(navbar);
sidebarBtn.addEventListener(('click'),()=>{
  navbar.classList.toggle('showNav')
})

