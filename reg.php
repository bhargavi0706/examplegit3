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
            <!--sigin form-->
            <form class="form form-hidden" id="createAccount">
                <h1 class="form_title">Create Account</h1>
                <div class="form_message form_message-error"></div>
                <div class="form_input-group">
                    <input type="text" id="firstname" class="form_input" autofocus placeholder="First Name">
                    <div class="form_input-error-msg"></div>
                </div>
                <div class="form_input-group">
                    <input type="text" id="lastname" class="form_input" autofocus placeholder="Last Name">
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
                    <input type="password" class="form_input-password form_input"  autofocus placeholder="Confirm Password">
                    <div class="form_input-error-msg"></div>
                </div>
                <button class="form_button" type="submit">Continue</button>
                <p class="form_text">
                    <span>Already have an account?<a class="form_link" href="./" id="linkLogin">Sign in</a></span>
                </p>
            </form>
        </div>
        <script src="main.js"></script>
    </body>
</html>
