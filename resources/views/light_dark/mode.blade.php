<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Google Fonts Link -->
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome Link -->
    <script
      src="https://kit.fontawesome.com/369c1756a5.js"
      crossorigin="anonymous"
    ></script>
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
  font-family: "source sans pro", sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
}

h1 {
  padding: 20px;
  text-align: center;
  font-size: 40px;
}

.paragraph {
  width: 70%;
  margin: 0 auto;
  padding: 20px;
  font-size: 20px;
  text-align: justify;
}

.toggle-btn {
  position: fixed;
  top: 40px;
  right: 40px;
  color: #f5f5f5;
  background-color: #000000;
  padding: 10px 20px;
  font-size: 16px;
  border: 1px solid #000000;
  border-radius: 5px;
  cursor: pointer;
}

.toggle-btn i {
  padding-left: 10px;
}

body.change-background {
  color: #f5f5f5;
  background-color: #000000;
}

    </style>
  </head>
  <body>
    <div class="container">
      <h1>Light Mode/Dark Mode</h1>
      <p class="paragraph">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia enim illum
        neque est voluptate eius fuga at tenetur quibusdam, perferendis tempore
        excepturi similique quaerat quos quae dolor nisi magni veritatis. Unde
        minus debitis commodi perferendis qui, officia error omnis rerum
        laboriosam. Laborum omnis magni reiciendis necessitatibus maxime,
        consequuntur ut at facilis itaque sapiente iste, aut laboriosam deserunt
        officiis veritatis repellat labore quisquam. Veniam, omnis itaque
        nesciunt eum ex, voluptatum similique harum corporis distinctio nihil
        perferendis accusantium doloribus quaerat cum iste, voluptatibus
        quisquam corrupti? Vero, mollitia ullam! Magnam quae omnis in soluta
        sequi, corrupti rerum, hic possimus et eum, error culpa molestias
        quaerat asperiores ab iste iure tempora impedit voluptas ullam suscipit
        atque minima! Ab eveniet consectetur itaque nulla vitae exercitationem
        ducimus ex quo nostrum facilis fugit, error culpa accusamus modi
        adipisci illum a officiis maxime! Vel magnam sit error nobis similique
        fugiat vero corporis mollitia labore modi, sunt inventore in ipsum
        aliquam laborum cumque reprehenderit sint minima repudiandae voluptas
        accusantium. Reprehenderit amet quo, eum nam veritatis harum ipsam
        cupiditate, provident laboriosam aspernatur ad. Ipsum, ratione, omnis
        facere iste nemo itaque voluptate molestiae totam dicta esse enim
        dolorem nulla expedita incidunt tempora ipsa doloribus accusamus quae
        explicabo. Autem voluptatibus possimus nulla!
      </p>
      <button class="toggle-btn" id="toggle-btn">
        <span>Dark Mode</span><i class="fas fa-moon"></i>
      </button>
    </div>
  </body>
  <!-- jquery file -->
  <script src="main.js"></script>
</html>

<script>
    $(document).ready(function () {
  $("#toggle-btn").click(function () {
    //change background color
    $("body").toggleClass("change-background");
    $(this).css("border", "1px solid #f5f5f5");
    //toggle button text
    $("span").text(
      $("span").text() == "Light Mode" ? "Dark Mode" : "Light Mode"
    );
  });
  $("#toggle-btn").click(function () {
    $(this).find("i").toggleClass("fa-moon fa-sun");
  });
});

</script>