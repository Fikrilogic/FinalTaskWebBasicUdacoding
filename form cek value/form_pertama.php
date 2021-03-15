<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["number"] > 60 && $_POST["number"] <= 80) {
        $result = "memuaskan";
    } elseif ($_POST["number"] > 80 && $_POST["number"] <= 90) {
        $result = "sangat memuaskan";
    } elseif ($_POST["number"] > 90 && $_POST["number"] <= 100) {
        $result = "terpuji";
    } elseif ($_POST["number"] <= 60) {
        $result = "tidak lulus";
    } else {
        $result =  "nilai tidak valid";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pertama</title>
    <style>
        .form {
            text-align: center;
            width: 100%;
            height: 300px;
            background-color: red;
        }

        .form form {
            width: 50%;
            margin: 0 auto;
            height: 150px;
            padding: 30px;
            display: flex;
            flex-direction: column;
        }

        .form form input {
            width: 200px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <div class="form">
        <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
            <input type="number" name="number" placeholder="input angka mu!">
            <input type="submit">
            <div><?php echo $result ?></div>
        </form>
    </div>

</body>

</html>