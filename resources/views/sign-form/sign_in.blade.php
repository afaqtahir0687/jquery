<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in - Google Accounts jQuery Project</title>
    <!-- Google Fonts Link -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
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
  background-color: #ffffff;
  font-family: "roboto", sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
}

div.container {
  width: 450px;
  height: 500px;
  padding: 48px 40px 36px;
  border: 1px solid #dadce0;
  border-radius: 8px;
}

.logo {
  width: 100%;
  text-align: center;
}

.logo img {
  height: 32px;
  user-select: none;
}

.form-box h1 {
  padding-top: 12px;
  color: #202124;
  font-size: 24px;
  font-family: "productsans", sans-serif;
  font-weight: 400;
  text-align: center;
}

.form-box span {
  display: block;
  padding-top: 10px;
  color: #202124;
  font-size: 16px;
  font-weight: 400;
  text-align: center;
}

form {
  padding-top: 24px;
}

form .input-box {
  width: 100%;
  margin: 18px 0 8px;
  position: relative;
}

form .input-box .input-field {
  width: 100%;
  height: 55px;
  padding: 12px 15px;
  background: transparent;
  border: 1px solid #dadce0;
  border-radius: 4px;
  font-size: 16px;
  font-weight: 400;
  outline: none;
  transition: all 150ms;
}

form .input-box .input-field:focus {
  border: 2px solid #1a73e8;
}

form .input-box .placeholder {
  padding: 0 8px;
  color: #80868b;
  background-color: #ffffff;
  font-weight: 400;
  position: absolute;
  top: 18px;
  left: 8px;
  transform-origin: bottom left;
  pointer-events: none;
  transition: all 150ms;
}

form .input-box .input-field:focus + .placeholder {
  color: #1a73e8;
}

form .input-box .input-field:focus + .placeholder,
form .input-box .input-field.has-value + .placeholder {
  transform: scale(0.75) translateY(-39px);
}

.forgot {
  padding: 5px 0;
  color: #1a73e8;
  font-size: 14px;
  font-weight: 500;
  text-decoration: none;
}

.buttons {
  width: 100%;
  margin: 50px 0 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.create-account {
  padding: 5px 0;
  color: #1a73e8;
  font-size: 14px;
  font-family: "productsans", sans-serif;
  font-weight: 600;
  text-decoration: none;
}

.sign-in {
  padding: 10px 28px;
  background-color: #1a73e8;
  color: #ffffff;
  font-size: 14px;
  font-family: "productsans", sans-serif;
  font-weight: 600;
  border-radius: 4px;
  border: none;
  outline: none;
  cursor: pointer;
  transition: all 150ms;
}

.sign-in:hover {
  box-shadow: 0 3px 5px #1a73e83b;
}

.sign-in:active {
  box-shadow: none;
}

    </style>
      </head>
  <body>
    <div class="container">
      <div class="logo">
        <img src="https://pngimg.com/uploads/google/google_PNG19644.png" alt="logo.png" />
      </div>
      <div class="form-box">
        <h1>Sign in</h1>
        <span>Use your Google Account</span>
        <form>
          <div class="input-box">
            <input
              type="email"
              name="email"
              id="email-field"
              class="input-field"
              required
              autofocus
              autocomplete="off"
            />
            <label for="email-field" class="placeholder">Email or phone</label>
          </div>
          <div class="input-box">
            <input
              type="password"
              name="password"
              id="password-field"
              class="input-field"
              required
            />
            <label for="password-field" class="placeholder"
              >Enter your password</label
            >
          </div>
          <a href="#" class="forgot">Forgot email?</a>
          <div class="buttons">
            <a href="#" class="create-account">Create account</a>
            <button class="sign-in">Next</button>
          </div>
        </form>
      </div>
    </div>
  </body>
  <!-- jQuery File -->
  <script src="main.js"></script>
</html>

<script>
    $(document).ready(function () {
  $(".input-field").focusout(function () {
    // Make Floating Label More Accurate
    var inputValue = $(this).val();
    if (inputValue === "") {
      $(this).removeClass("has-value");
    } else {
      $(this).addClass("has-value");
    }
  });
});

</script>