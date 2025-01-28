// get current year
(function () {
    var year = new Date().getFullYear();
    document.querySelector("#currentYear").innerHTML = year;
})();

// JavaScript for live timer
function startTimer(duration, elementId) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
      minutes = parseInt(timer / 60, 10);
      seconds = parseInt(timer % 60, 10);
  
      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;
  
      document.getElementById(elementId).textContent = minutes + ":" + seconds;
  
      if (--timer < 0) {
        timer = duration;
        // You can add logic for what happens when the timer reaches zero
      }
    }, 1000);
  }
  
  // Start the timer for each exciting deal
  startTimer(300, 'deal1-timer'); // Example: 5 minutes timer for deal1
  startTimer(480, 'deal2-timer'); // Example: 8 minutes timer for deal2
  // Add more timer setups as needed
  

 
