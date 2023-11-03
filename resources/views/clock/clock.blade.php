<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Digital Clock Using jQuery</title>
    <!-- Google Fonts Link -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- jQuery CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  height: 100vh;
  background-color: #faf8f8;
  font-family: "montserrat", sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
}

h2 {
  padding: 30px 0;
  font-size: 30px;
  font-weight: 500;
  text-align: center;
  text-transform: uppercase;
}

.time {
  display: inline-block;
  position: relative;
  margin: 10px;
  -webkit-box-reflect: below 1px
    linear-gradient(transparent, transparent, #00000050);
}

.time span {
  display: flex;
  align-items: center;
  justify-content: center;
}

.time span:nth-child(1) {
  width: 180px;
  height: 50px;
  color: #faf8f8;
  background-color: #008c9e;
  font-size: 25px;
  font-weight: 400;
  text-align: center;
  text-transform: uppercase;
}

.time:nth-of-type(2) span:nth-child(1) {
  background-color: #6fb40a;
}
.time:nth-of-type(3) span:nth-child(1) {
  background-color: #c54800;
}
.time:nth-of-type(4) span:nth-child(1) {
  background-color: #22a568;
}

.time span:nth-child(2) {
  height: 150px;
  color: #faf8f8;
  background-color: #00b2cb;
  font-size: 90px;
  font-weight: 700;
}

.time:nth-of-type(2) span:nth-child(2) {
  background-color: #8ee80e;
}
.time:nth-of-type(3) span:nth-child(2) {
  background-color: #ff5d00;
}
.time:nth-of-type(4) span:nth-child(2) {
  background-color: #2ad587;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  height: 100vh;
  background-color: #faf8f8;
  font-family: "montserrat", sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
}

h2 {
  padding: 30px 0;
  font-size: 30px;
  font-weight: 500;
  text-align: center;
  text-transform: uppercase;
}

.time {
  display: inline-block;
  position: relative;
  margin: 10px;
  -webkit-box-reflect: below 1px
    linear-gradient(transparent, transparent, #00000050);
}

.time span {
  display: flex;
  align-items: center;
  justify-content: center;
}

.time span:nth-child(1) {
  width: 180px;
  height: 50px;
  color: #faf8f8;
  background-color: #008c9e;
  font-size: 25px;
  font-weight: 400;
  text-align: center;
  text-transform: uppercase;
}

.time:nth-of-type(2) span:nth-child(1) {
  background-color: #6fb40a;
}
.time:nth-of-type(3) span:nth-child(1) {
  background-color: #c54800;
}
.time:nth-of-type(4) span:nth-child(1) {
  background-color: #22a568;
}

.time span:nth-child(2) {
  height: 150px;
  color: #faf8f8;
  background-color: #00b2cb;
  font-size: 90px;
  font-weight: 700;
}

.time:nth-of-type(2) span:nth-child(2) {
  background-color: #8ee80e;
}
.time:nth-of-type(3) span:nth-child(2) {
  background-color: #ff5d00;
}
.time:nth-of-type(4) span:nth-child(2) {
  background-color: #2ad587;
}

    </style>

     </head>
  <body>
    <div class="container">
      <h2>This is the current time.</h2>
      <div class="time">
        <span>Hours</span>
        <span id="hours">00</span>
      </div>
      <div class="time">
        <span>Minute</span>
        <span id="min">00</span>
      </div>
      <div class="time">
        <span>Second</span>
        <span id="sec">00</span>
      </div>
      <div class="time">
        <span>Period</span>
        <span id="period">AM</span>
      </div>
    </div>
  </body>
  <!-- jQuery File -->
  <script src="main.js"></script>
</html>
<script>
    $(document).ready(function () {
  function showTime() {
    // To Get current time/date
    var date = new Date();

    //Make Variables to get hours, minute, and second
    var hours = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();

    // AM, PM Setting
    var session = "AM";

    // Conditions for time behavior

    if (hours == 0) {
      hours = 12;
    }

    if (hours >= 12) {
      session = "PM";
    }

    if (hours > 12) {
      hours = hours - 12;
    }

    hours = hours < 10 ? "0" + hours : hours;
    min = min < 10 ? "0" + min : min;
    sec = sec < 10 ? "0" + sec : sec;

    // Set the variable to span

    $("#hours").text(hours);
    $("#min").text(min);
    $("#sec").text(sec);
    $("#period").text(session);

    // To change time in every seconds
    setTimeout(showTime, 1000);
  }
  showTime();
});

</script>