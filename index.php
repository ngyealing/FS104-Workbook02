<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }

        .wrap {
            border: 1px solid black;
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            margin: 20px 500px 20px 500px;
            justify-content: center;
        }

        input[type="text"],
        input[type="email"] {
            height: 20px;
        }

        form {
            padding: 10px;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        input[type='submit'] {
            background: #4AB0E9;
            width: 100px;
            height: 40px;
            color: white;
            border: none;
            margin-top: 10px;
        }
    </style>
</head>

<body>


    <?php
    include("functions.php");
    include("config.php");
    ?>
    <div class="wrap">
        <span class="error">* required field</span>
        <form method="post" action="<?php echo constant("url"); ?>">

            <span class="error">* <?php echo $nameErr; ?></span>
            Name: <input type="text" name="name">
            </br>

            <span class="error">* <?php echo $emailErr; ?></span>
            E-mail: <input type="email" name="email">
            </br>

            <span class="error">* <?php echo $phoneErr; ?></span>
            Phone: <input type="tel" name="phone">
            </br>


            Website: <input type="text" name="website">
            </br>


            Age: <input type="text" name="age">
            </br>

            <span class="error">* <?php echo $genderErr; ?></span>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other

            Comments: <textarea name="comment" rows="5" cols="30"></textarea>


            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</body>

</html>