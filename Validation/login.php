<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<style>
    body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
    background: linear-gradient(120deg, #2980b9, #8e44ad);
    height: 100vh;
    overflow: hidden;
}

.form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background: #fff;
    border-radius: 10px;
}

.form h1 {
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
}

.form form {
    padding: 0 40px;
    box-sizing: border-box;
}

form .txt_field {
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
}

.txt_field input {
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    outline: none;
    background: none;
}

.txt_field label {
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
    transition: .5s;
}

.txt_field span::before {
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 100%;
    height: 2px;
    background: #2691d9;
}

.txt_field input:focus~label,
.txt_field input:valid~label {
    top: -5px;
    color: #2691d9;
}

.txt_field input:focus~span::before,
.txt_field input:valid~span::before {
    width: 100%;
}

.pass {
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
}

.pass:hover {
    text-decoration: underline;
}

input[type='submit'] {
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    cursor: pointer;
    outline: none;
}

.signup_link {
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
}

.signup_link a {
    color: #2691d9;
    text-decoration: none;
}

.signup_link a:hover {
    text-decoration: underline;
}

@media screen and (max-width:910px) {
    .form {
        width: 350px;
        top: 58%;
    }

    @media screen and (max-width:480px) {
        .form {
            width: 280px;
        }
    }

    @media screen and (max-width:320px) {
        .form {
            width: 250px;
        }

        .signup_link {
            font-size: 15px;
        }
    }
</style>
<body>   
    <div class="form">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <div class="txt_field">
                <input type="text" name="user_email" id="user_email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="user_pass" id="user_pass" required>
                <span></span>

                <label>Password</label>
            </div>
            <div class="pass">Forget Password?</div>
            <input type="submit" value="Login">
            <p id="errorMessage" hidden></p>
            <div class="signup_link">
                Not a member? <a href="signup.php">Sign Up</a>
            </div>
        </form>
    </div>
</body>

</html>