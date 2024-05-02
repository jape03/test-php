<?php
session_start();

if (isset($_POST["confirm"])) {
    if (isset($_POST["firstName"]) && isset($_POST["lastName"])) {
        $_SESSION["firstName"] = $_POST["firstName"];
        $_SESSION["lastName"] = $_POST["lastName"];
    }

    if (isset($_POST["gender"])) {
        $_SESSION["gender"] = $_POST["gender"];
    }

    if (isset($_POST["placeOfBirth"])) {
        $_SESSION["placeOfBirth"] = $_POST["placeOfBirth"];
    }

    if (isset($_POST["birthday"])) {
        $_SESSION["birthday"] = $_POST["birthday"];
    }

    if (isset($_POST["previousSchool"])) {
        $_SESSION["previousSchool"] = $_POST["previousSchool"];
    }

    if (isset($_POST["levelAtPreviousSchool"])) {
        $_SESSION["levelAtPreviousSchool"] = $_POST["levelAtPreviousSchool"];
    }

    if (isset($_POST["language"])) {
        $_SESSION["language"] = $_POST["language"];
    }

    if (isset($_POST["medical"])) {
        $_SESSION["medical"] = $_POST["medical"];
    }


    header("Location: display.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical 1 - Index </title>
</head>
<style>
    form {
        margin-bottom: 20px;
        width: 80%;
        margin: auto;
    }

    /* Style for form headings */
    h2 {
        margin-bottom: 10px;
    }

    /* Style for labels */
    label {
        display: inline-block;
        margin-bottom: 5px;
        vertical-align: top;
        /* Align labels with radio buttons */
    }

    /* Style for text inputs */
    input[type="text"],
    input[type="date"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Style for radio inputs */
    input[type="radio"] {
        display: inline-block;
        margin-right: 5px;
        vertical-align: top;
        /* Align radio buttons with labels */
    }

    /* Style for submit button */
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Style for form container */
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Personal Information</h2>
        <label for="firstName"> First Name: </label>
        <input id="firstName" type="text" name=firstName placeholder="First Name"></input>
        <br>

        <label for="lastName"> Last Name: </label>
        <input id="lastName" type="text" name="lastName" placeholder="Last Name"></input>
        <br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male">Male</input>
        <input type="radio" name="gender" value="female">Female</input>
        <br>

        <label for=placeOfBirth>Place of Birth:</label>
        <input id="placeOfBirth" type="text" name="placeOfBirth" placeholder="City"></input>
        <br>

        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">
        <br>
        <h2>Previous School</h2>
        <label for="previousSchool"> Previous School: </label>
        <input id="previousSchool" type="text" name="previousSchool" placeholder="Previous School"></input>
        <br>

        <label for="levelAtPreviousSchool"> Year Level at Previous School: </label>
        <input id="levelAtPreviousSchool" type="text" name="levelAtPreviousSchool" placeholder="Year Level"></input>
        <br>

        <label for="languageOfInstruction">Language of Instruction:</label>
        <input type="radio" name="language" value="English">English</input>
        <input type="radio" name="language" value="Tagalog">Tagalog</input>
        <input type="radio" name="language" value="Other">Other</input>
        <br>
        <br>
        <h2>Medical Record</h2>
        <label for="medical">Medical Records (if there's any):</label>
        <br>
        <textarea type="text" name="medical" value="medical" rows="4" cols="50"></textarea>
        <br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>

</html>