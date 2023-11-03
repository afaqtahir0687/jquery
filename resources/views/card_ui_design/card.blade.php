<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>jQuery Cards Hover Effect</title>
    <!-- Google Fonts Link -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- jQuery CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  border: none;
  outline: none;
}

body {
  margin: 0;
  padding: 0;
  min-height: 100vh;
  background-color: #222327;
  font-family: "poppins", sans-serif;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
}

.container {
  padding: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}

.card {
  width: 305px;
  margin: 25px;
  padding: 40px 30px;
  background-color: #222327;
  position: relative;
  transition: all 0.25s ease-in-out;
}

.card .card__icon {
  width: 100%;
  margin-bottom: 40px;
}

.card .card__icon img {
  height: 75px;
}

.card h6 {
  margin-bottom: 10px;
  color: #ffffff;
  font-size: 16px;
  font-weight: 600;
  letter-spacing: 0.5px;
}

.card ul li {
  list-style: none;
  padding: 3px 0;
  color: #ffffff;
  font-size: 16px;
  font-weight: 300;
  opacity: 0.7;
}

.card.selected::before {
  content: "";
  width: 50%;
  height: 50%;
  position: absolute;
  right: -25px;
  bottom: -30px;
  background: url(https://i.imgur.com/WunqBPz.png);
  background-position: right;
  background-size: 10px;
  z-index: -1;
}

.card.selected {
  background-color: #161619;
  box-shadow: 15px 15px 30px rgba(0, 0, 0, 0.3);
}

    </style>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card__icon">
          <img src="https://i.imgur.com/93ei2SI.png" alt="icon.png" />
        </div>
        <h6>DIGITAL PRODUCTS</h6>
        <ul>
          <li>Digital Branding</li>
          <li>Web & Mobile Sites</li>
          <li>User Interface Design</li>
          <li>Responsive Techs</li>
        </ul>
      </div>
      <div class="card selected">
        <div class="card__icon">
          <img src="https://i.imgur.com/n31OoA5.png" alt="icon.png" />
        </div>
        <h6>UI-UX DESIGN</h6>
        <ul>
          <li>Digital Strategy</li>
          <li>User Experience Design</li>
          <li>User Interface Design</li>
          <li>Mobile Sites</li>
        </ul>
      </div>
      <div class="card">
        <div class="card__icon">
          <img src="https://i.imgur.com/dbngiB3.png" alt="icon.png" />
        </div>
        <h6>WEB DEVELOPMENT</h6>
        <ul>
          <li>Custom Platform</li>
          <li>Back-End Executions</li>
          <li>Interface Apps</li>
          <li>Mobile Systems</li>
        </ul>
      </div>
    </div>
  </body>
 </html>

 <script>
    $(document).ready(function () {
  // Add a class on mouse enter in the card
  $(".card").on("mouseenter", function () {
    $(this).addClass("selected").siblings().removeClass("selected");
  });
});

 </script>