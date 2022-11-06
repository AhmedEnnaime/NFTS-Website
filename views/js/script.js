window.onresize = function () {
    const span = document.getElementById('wallet');
    if (this.innerWidth < 1225) {
        span.innerHTML = '';
    } else {
        span.innerHTML = 'Wallet connect';
    }
 };
 
 
  // Set the date we're counting down to
 function setTimer(enddate, elem){
    (function tick() {
       var now = new Date().getTime();
       var distance = enddate - now;
       var days = Math.floor(distance / (1000 * 60 * 60 * 24));
       var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
 
 
      elem.innerHTML = days + " : " + hours + " : " + minutes + " : " + seconds;
 
     if(distance < 0){
      elem.innerHTML = "EXPIRED";
     }else{
      setTimeout(tick,1000);
    }
   })()
 }
 
 setTimer(
    new Date("May 21, 2022 18:17:04"),
    document.getElementById("card__time1")
   );
  setTimer(
    new Date("July 29, 2022 15:37:25"),
    document.getElementById("card__time2")
   );
   setTimer(
    new Date("Septamber 25, 2022 05:30:55"),
    document.getElementById("card__time3")
   );
   setTimer(
    new Date("June 23, 2022 22:19:45"),
    document.getElementById("card__time4")
   );
 
 
 
 
   