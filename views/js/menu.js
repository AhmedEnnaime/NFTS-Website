const menu = document.getElementById('header');
const scroll_btn = document.getElementById("scroll--top");

scroll_btn.addEventListener("click", () => {
  window.scrollTo(0, 0);
});

window.addEventListener("scroll", () => {
   scroll_btn.classList.add("scroll--top--show");

  let scrollTop = window.pageYOffset;

  if (scrollTop === 0) {
   scroll_btn.classList.remove("scroll--top--show");
  }
});
 
 window.addEventListener("scroll", function () {
    
   let scroll_Y = window.scrollY;
   if (scroll_Y >= 75) {
      menu.classList.add("sticky--header");
   } else {
      menu.classList.remove("sticky--header");
   }
 });