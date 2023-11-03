<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Background Color With Input Type Color</title>
    <!-- Google Fonts Link -->
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&display=swap"
      rel="stylesheet"
    />
    <!-- JQuery CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css" />
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
  background-color: #f5f5f5;
  display: flex;
  align-items: center;
  justify-content: center;
}

div.container {
  text-align: center;
}

h1 {
  padding-bottom: 50px;
  color: #000000;
  text-align: center;
  font-size: 80px;
  font-family: "anton", sans-serif;
  letter-spacing: 10px;
  transition: all 0.5s;
}

.color-range {
  -webkit-appearance: none;
  width: 600px;
  height: 40px;
  background: none;
  border: none;
  outline: none;
  cursor: pointer;
}

.color-range::-webkit-color-swatch-wrapper {
  padding: 0;
}

.color-range::-webkit-color-swatch {
  border: 3px solid #ffffff;
  border-radius: 5px;
  box-shadow: 0 0 20px 5px #0000002a;
}

    </style>
  </head>
  <body>
    <div class="container">
      <h1>Change Background Color</h1>
      <input
        type="color"
        name="color"
        id="color-range"
        class="color-range"
        value="#f5f5f5"
      />
    </div>
  </body>
  <!-- JQuery File -->
  <script src="main.js"></script>
</html>

<script>
    $(document).ready(function () {
  $("#color-range").on("input change", function () {
    // Change Body Background Color
    $("body").css("background-color", $(this).val());
    // Change h1 Color to White if Body Color is black
    if ($("#color-range").val() <= "#242424") {
      $("h1").css("color", "white");
    } else {
      $("h1").css("color", "black");
    }
  });
});

</script>