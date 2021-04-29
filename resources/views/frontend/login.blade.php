@extends('frontend.master')
@section('title')
    Login :: Serve Human Foundation
@endsection
@section('costomcss')
<style>


    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');


    .login_reg h2 {
        text-align: center;
    }

    .overlay-container p {
        font-size: 14px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 20px 0 30px;
    }

    .login_reg span {
        font-size: 15px;
    }

    .login_reg a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        margin: 5px 0;
        width: 100%;
        font-weight: 500;
        font-family: inherit;
        opacity: .85;
        text-align: left;
    }
    .login_reg a:hover{
        opacity: 1;
        color: #fff!important;
    }

    .login_reg button {
        border-radius: 20px;
        border: 1px solid #FF4B2B;
        background-color: #FF4B2B;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
    }

    .login_reg button:active {
        transform: scale(0.95);
    }

    .login_reg button:focus {
        outline: none;
    }

    .login_reg button.ghost {
        background-color: transparent;
        border-color: #FFFFFF;
    }

    .login_reg form {
        background-color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 50px;
        height: 100%;
        text-align: center;
    }

    .login_reg input {
        background-color: #eee;
        border: none;
        padding: 12px 15px;
        margin: 8px 0;
        width: 100%;
    }

    .login_reg{
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25),
        0 10px 10px rgba(0,0,0,0.22);
        position: relative;
        overflow: hidden;
        height: 100vh;
    }

    .form-container {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .container.right-panel-active .sign-in-container {
        transform: translateX(100%);
    }

    .sign-up-container {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .container.right-panel-active .sign-up-container {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: show 0.6s;
    }

    @keyframes show {
        0%, 49.99% {
            opacity: 0;
            z-index: 1;
        }

        50%, 100% {
            opacity: 1;
            z-index: 5;
        }
    }

    .overlay-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
    }

    .container.right-panel-active .overlay-container{
        transform: translateX(-100%);
    }

    .overlay {
        background: #FF416C;
        background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
        background: linear-gradient(to right, #FF4B2B, #FF416C);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0 0;
        color: #FFFFFF;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .container.right-panel-active .overlay {
        transform: translateX(50%);
    }

    .overlay-panel {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 100%;
        width: 50%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
        transform: translateX(-20%);
    }

    .container.right-panel-active .overlay-left {
        transform: translateX(0);
    }

    .overlay-right {
        right: 0;
        transform: translateX(0);
    }

    .container.right-panel-active .overlay-right {
        transform: translateX(20%);
    }

    .social-container {margin-top: 20px;}




    /* add appropriate colors to fb, twitter and google buttons */
    .social-container .fb {
        background-color: #3B5998;
        color: white;
    }

    .social-container .twitter {
        background-color: #55ACEE;
        color: white;
    }

    .social-container .google {
        background-color: #dd4b39;
        color: white;
    }

    .social-container i {padding-right: 25px;}


    /* The message box is shown when the user clicks on the password field */
    #message {
        display:none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 100%;
    }

    #message p {
        font-size: 10px;
        text-align: left;
        padding: 0px 53px;
    }
    div#message h3 {
        font-size: 20px;
        margin: 20px 0px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
        color: green;
    }

    .valid:before {
        position: relative;
        left: -35px;
        content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
        color: red;
    }

    .invalid:before {
        position: relative;
        left: -35px;
        content: "✖";
    }
    #text {display:none;color:red}
    @media(max-width: 768px){
        .sign-in-container {
            left: 0;
            width: 100%;
            z-index: 2;
        }
        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
            display: none;
        }
    }
</style>
@endsection
@section('content')
    <div class="container login_reg" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h3>Create Account</h3>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span style="font-weight: bold;">or Use your Email for Registration</span>
                <input  type="text" placeholder="Name" required />
                <input type="email" placeholder="Email" required />
                <input type="number" placeholder="Phone No" required />
                <input type="password" placeholder="Password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />

                <p id="text">WARNING! Caps lock is ON.</p>
                <div id="message">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>

                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h3>Sign in</h3>
                <div class="social-container">

                    <div class="col-md-12">
                        <a href="#" class="fb btn">
                            <i class="fab fa-facebook fa-fw"></i> Login with Facebook
                        </a>
                        <a href="#" class="twitter btn">
                            <i class="fab fa-twitter fa-fw"></i> Login with Twitter
                        </a>
                        <a href="#" class="google btn"><i class="fab fa-google fa-fw">
                            </i> Login with Google+
                        </a>
                    </div>

                </div>
                <span>or <br> Use Your Account</span>
                <input type="email" placeholder="Email"  required/>
                <input type="password" placeholder="Password" required />

                <a href="#">Forgot your Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h3>Welcome Back!</h3>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h3>Hello, Friend!</h3>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('costomjs')

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });


        function PassShow() {
            var x = document.getElementById("psw");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if(myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if(myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if(myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate length
            if(myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }

        var input = document.getElementById("psw");
        var text = document.getElementById("text");
        input.addEventListener("keyup", function(event) {

            if (event.getModifierState("CapsLock")) {
                text.style.display = "block";
            } else {
                text.style.display = "none"
            }
        });
    </script>
@endsection
