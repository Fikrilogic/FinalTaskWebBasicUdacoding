<?php
include "captcha.php";

$nameValid = "udacodingid";
$passValid = "udacodingJaya2021";
$namaErr = $passErr = "";
$namaTest = $passTest = "";
$nameValid = "udacodingid";
$passValid = "udacodingJaya2021";
$loginSuccess = "login berhasil";
$captchaErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $namaErr = "Username Required";
    }

    if (empty($_POST["password"])) {
        $passErr = "password required";
    }

    if (strlen($_POST["password"]) >= 1 && strlen($_POST["password"]) < 6) {
        $passErr = "password must containt min 6 character length!";
    }

    if ($_POST["name"] == $nameValid && $_POST["password"] == $passValid) {
        if (empty($_POST["g-recaptcha-response"])) {
            $namaTest = "login ditolak!";
        } else {
            $namaTest = "Anda berhasil login";
        }
    } else {
        $namaTest = "Username or Password not valid";
    }
    // if (empty($_POST["g-recaptcha-response"])) {
    //     $captchaErr = "login ditolak!";
    // }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        body {
            width: 100%;
            height: auto;
            background-color: blue;
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        .login-form {
            width: 350px;
            height: 450px;
            background-color: #fff;
            position: absolute;
            left: 35%;
            top: 10%;
            border-radius: 7px;
        }

        .login-form h1 {
            background-color: #f5bf42;
            width: 100%;
            height: 50px;
            padding-top: 10px;
            margin-top: 0px;
            border-radius: 5px 5px 0px 0px;
            text-align: center;
            color: #fff;
            font-size: 25px;
        }

        .form-input {
            width: 100%;
            display: flex;
            padding: 10px 15px;
            flex-direction: column;
        }

        .txtfield {
            width: 300px;
            margin-bottom: 20px;
            outline: none;
            border: 1px solid blue;
            padding: 5px;
            border-radius: 7px;
            height: 30px;
        }


        .form-input form p {
            text-align: end;
            font-size: 15px;
            margin-right: 30px;
            font-weight: 800;
            cursor: pointer;
        }

        .button {
            height: 40px;
            width: 250px;
            margin-left: 30px;
            background-color: rgba(176, 245, 66, 0.7);
            border: none;
            border-radius: 5px;
            font-size: 17px;
            font-weight: 800;
            color: #fff;
            cursor: pointer;
        }

        .button:hover {
            background-color: rgba(176, 245, 66);
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="page">
        <div class="login-form">
            <h1>SIGN IN NOW</h1>
            <div class="form-input">
                <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
                    <div class="error">*<?php echo $namaErr; ?></div>
                    <input type="text" name="name" placeholder="Username" class="txtfield">
                    <div class="error">*<?php echo $passErr; ?></div>
                    <input type="password" name="password" placeholder="Password" class="txtfield">
                    <div class="captcha">
                        <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
                        <div><?php echo $captchaErr ?></div>
                    </div>
                    <span class="error"></span>
                    <p>Forget Password?</p>
                    <input type="submit" value="Login" class="button">
                    <div><?php echo $namaTest ?></div>
                </form>
            </div>
        </div>
    </div>

    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>

</html>