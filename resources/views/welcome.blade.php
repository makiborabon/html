<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}
.bgimg {
    /* background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg'); */
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
    /* background: green; */
  }
.topleft {
    position: absolute;
    top: 0;
    left: 16px;
  }
bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
  }
.middle {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }
  hr {
    margin: auto;
    width: 40%;
  }
  h1{
      color: #f1aa3e;
  }
  #demo{
      color: #f6b74b;
  }
  </style>
  <body>
  
  <div class="bgimg">
    {{-- <div class="topleft">
    <p><img src="{{ asset('images/BS-Mana-Logo.png') }}" alt="" width="130"></p>
    </div> --}}
    <div class="middle">
      <div><img src="{{ asset('images/logo.png') }}" alt="" width="350"></div>
      <h1>COMING SOON</h1>
      <hr>
      <p id="demo" style="font-size:30px"></p>
    </div>
    <div class="bottomleft">
      {{-- <p>Some text</p> --}}
    </div>
  </div>
  
  <script>
  // Set the date we're counting down to
  var countDownDate = new Date("October  25, 2019 15:37:25").getTime();
  // Update the count down every 1 second
  var countdownfunction = setInterval(function() {
    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an thes count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(countdownfunction);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
  </script>
  
  </body>