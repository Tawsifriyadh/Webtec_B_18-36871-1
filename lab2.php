<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php

    $nameErr = $emailErr = $genderErr = "";
    $name = $email = $birthday = $gender = $degree = $blood =  "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["bithday"])) {
            $birthday = "";
        } else {
            $birthday = test_input($_POST["birthday"]);
        }


        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        if (empty($_POST["degree"])) {
            $degree = "";
        } else {
            $degree = test_input($_POST["degree"]);
        }

        if (empty($_POST["blood"])) {
            $blood = "";
        } else {
            $blood = test_input($_POST["blood"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <p><span class="error"> </span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <legend>NAME</legend>
            <input type="text" id="name" name="name" value=" ">
            <span class="error">* </span> <br><br>

        </fieldset>
        <br>
        <fieldset>
            <legend>EMAIL</legend>
            <input type="text" id="email" name="email" value=" ">
            <span class="error">* <?php echo $emailErr; ?></span>
            <br>

        </fieldset>
        <br>
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            <label for="birthday"></label>
            <input type="date" id="birthday" name="birthday">
        </fieldset>
        <br>
        <fieldset>
            <legend>GENDER</legend>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
            <span class="error">* <?php echo $genderErr; ?></span>
            <br>
        </fieldset>
        <br>
        <fieldset>
            <legend>DEGREE</legend>
            <input type="checkbox" id="degree" name="degree" value="SSC">
            <label for="SSC"> SSC </label>
            <input type="checkbox" id="degree" name="degree" value="HSC">
            <label for="HSC"> HSC </label>
            <input type="checkbox" id="degree" name="degree" value="BSc">
            <label for="BSc">BSc</label>
            <input type="checkbox" id="degree" name="degree" value="MSc">
            <label for="MSc">MSc</label><br>

        </fieldset>
        <br>
        <fieldset>
            <legend>BLOOD GROUP</legend>
            <select id="blood" name="blood">
                <option value="O+">O+</option>
                <option value="A+">A+</option>
                <option value="O- ">O-</option>
                <option value="AB+">AB+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B- </option>
                <option value="AB-">AB-</option>
            </select>
            <br>

        </fieldset>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $birthday;
    echo "<br>";

    echo $gender;
    echo "<br>";
    echo $degree;
    echo "<br>";
    echo $blood;
    echo "<br>";
    ?>

</body>

</html>