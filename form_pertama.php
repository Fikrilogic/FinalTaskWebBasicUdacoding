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
        <form method="get">
            <input type="number" name="number" placeholder="input angka mu!">
            <input type="submit">

        </form>
        <?php

        function checknumber($check)
        {
            if ($check > 60 && $check <= 80) {
                echo "memuaskan";
            } elseif ($check > 80 && $check <= 90) {
                echo "sangat memuaskan";
            } elseif ($check > 90 && $check <= 100) {
                echo "terpuji";
            } elseif ($check <= 60) {
                echo "tidak lulus";
            } else {
                echo "nilai tidak valid";
            }
        }

        echo checknumber($_GET["number"]);
        ?>
    </div>

</body>

</html>