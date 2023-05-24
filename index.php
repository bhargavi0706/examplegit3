<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Form</title>
    <!--CSS-->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<body>
    <div class="container">
        <form class="form" id="login">
            <h1 class="form_title">Login</h1>
            <div class="form_message form_message-error"></div>
            <div class="form_input-group">
                <input type="text" class="form_input" autofocus placeholder="Username or email">
                <div class="form_input-error-msg"></div>
            </div>
            <div class="form_input-group">
                <input type="password" class="form_input" id="id_password"  autofocus placeholder="Password">
                <i class="bi bi-eye-slash" id="togglePassword" ></i>
                <div class="form_input-error-msg"></div>
            </div>
            <div class="form-group">        
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
            </div>

            <p class="form_textP">
                <a href="#" class="form_link">Forgot your password?</a>
            </p>
            <button class="form_button" type="submit">login</button>
            
            <p class="form_text">
                <span>Don't have an account?<a class="form_link" href="./" id="linkCreateAccount">Create account</a></span>
            </p>
            
        </form>
        <form class="form form-hidden" id="createAccount">
            <h1 class="form_title">Create Account</h1>
            <div class="form_message form_message-error"></div>
            <div class="form_input-group">
                <input type="text" id="signupUsername" class="form_input" autofocus placeholder="Username">
                <div class="form_input-error-msg"></div>
            </div>
            <div class="form_input-group">
                <input type="text" class="form_input" autofocus placeholder="Email Address">
                <div class="form_input-error-msg"></div>
            </div>
            <div class="form_input-group">
                <input type="password" class="form_input-password form_input" id="inp_password" autofocus placeholder="Password">
                <div class="form_input-error-msg" ></div>
            </div>
            <div class="form_input-group">
                <input type="password" class="form_input-password form_input"  autofocus placeholder="Confirm password">
                <div class="form_input-error-msg"></div>
            </div>
            <button class="form_button" type="submit">Continue</button>
            <p class="form_text">
                <span>Already have an account?<a class="form_link" href="./" id="linkLogin">Sign in</a></span>
            </p>
        </form>

        <!--
        <div class="row">
            <label>Username</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
              <input type="text" class="form-control" placeholder="First name" required>
            </div>
        </div>
        <div class="row">
          <div class="col">
            <label>First Name</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
              <input type="text" class="form-control" placeholder="First name" required>
            </div>
          </div>
          <div class="col">
            <label>Last Name</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
              <input type="text" class="form-control" placeholder="First name" required>
            </div>
          </div>
        </div>-->
    </div>
    <script src="main.js"></script>

</body>
