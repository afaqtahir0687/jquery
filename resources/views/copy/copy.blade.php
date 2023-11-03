<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Copy To Clipboard With jQuery</title>
    <!-- Google Fonts Link -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- FontAwesome CDN Link -->
    <script
      src="https://kit.fontawesome.com/369c1756a5.js"
      crossorigin="anonymous"
    ></script>
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
  background-color: #f3f4f7;
  font-family: "montserrat", sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
}

input,
textarea,
button {
  font-family: inherit;
}

.container {
  width: 420px;
  height: 530px;
  padding: 25px;
  background-color: #f3f4f7;
  border-radius: 10px;
  box-shadow: 0 0 25px 5px rgba(83, 87, 95, 0.25);
}

h1 {
  padding: 20px 0;
  color: #090909;
  font-size: 30px;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
}

.text-field {
  width: 100%;
  height: 230px;
  margin: 20px 0;
  padding: 10px;
  background: transparent;
  border: 1px solid #52565e;
  font-size: 16px;
  font-weight: 400;
  outline: none;
  resize: none;
}

.copy-btn {
  padding: 10px 15px;
  color: #f3f4f7;
  background-color: #037ef3;
  border-radius: 5px;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  border: none;
  outline: none;
  cursor: pointer;
}

.copy-btn i {
  padding-left: 10px;
}

.copy-btn:active {
  transform: scale(0.98);
}

span.copied {
  display: block;
  margin-top: 50px;
  text-align: center;
  font-size: 26px;
  color: #858585;
  transform: scale(0);
  transition: all 0.5s;
}

span.bounce-effect {
  animation: bounceIn 0.8s linear;
}

/* BounceIn Animation */

@keyframes bounceIn {
  0% {
    opacity: 0;
    transform: scale(0.3);
  }
  20% {
    transform: scale(1.1);
  }
  40% {
    transform: scale(0.9);
  }
  60% {
    opacity: 1;
    transform: scale(1.03);
  }
  80% {
    transform: scale(0.97);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

    </style>
    </head>
  <body>
    <div class="container">
      <h1>copy to clipboard</h1>
      <textarea id="textField" class="text-field">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
               Natus maxime hic itaque illum error sint minima ea cupiditate
                repellat? Suscipit odio cumque earum est voluptate, quae nihil
                 consequatur laborum consectetur distinctio, repellendus 
                 voluptatum alias eligendi explicabo repudiandae et, tempore 
                 asperiores?
          </textarea
      >
      <button class="copy-btn">Copy<i class="fas fa-clone"></i></button>
      <span class="copied">Copied!</span>
    </div>
  </body>
  <!-- jQuery File -->
  <script src="main.js"></script>
</html>
<script>
    $(document).ready(function () {
  //Make two functions to add and remove the class in the span
  function add() {
    $(".copied").addClass("bounce-effect");
  }
  function remove() {
    $(".copied").removeClass("bounce-effect");
  }

  // Call the functions and copy the text on button click
  $(".copy-btn").click(function () {
    $("#textField").select();
    document.execCommand("copy");
    add();
    setTimeout(remove, 800);
  });
});

</script>