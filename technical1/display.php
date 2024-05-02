<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical 1 - Display</title>
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
        <label for="firstName">First Name:</label>
        <input id="firstName" type="text" name="firstName" value="<?php
                                                                    if (isset($_SESSION['firstName'])) {
                                                                        echo $_SESSION['firstName'];
                                                                    } else {
                                                                        echo '';
                                                                    }
                                                                    ?>" disabled>
        <br>

        <label for="lastName"> Last Name: </label>
        <input id="lastName" type="text" name="lastName" value="<?php
                                                                if (isset($_SESSION['lastName'])) {
                                                                    echo $_SESSION['lastName'];
                                                                } else {
                                                                    echo '';
                                                                }
                                                                ?>" disabled>
        <br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male" <?php
                                                        if (isset($_SESSION['gender']) && $_SESSION['gender'] == 'male') {
                                                            echo 'checked';
                                                        }
                                                        ?> disabled> Male
        <input type="radio" name="gender" value="female" <?php
                                                            if (isset($_SESSION['gender']) && $_SESSION['gender'] == 'female') {
                                                                echo 'checked';
                                                            }
                                                            ?> disabled> Female
        <br>

        <label for=placeOfBirth>Place of Birth:</label>
        <input id="placeOfBirth" type="text" name="placeOfBirth" value="<?php
                                                                        if (isset($_SESSION['placeOfBirth'])) {
                                                                            echo $_SESSION['placeOfBirth'];
                                                                        } else {
                                                                            echo '';
                                                                        }
                                                                        ?>" disabled>
        <br>

        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday" value="<?php
                                                                if (isset($_SESSION['birthday'])) {
                                                                    echo $_SESSION['birthday'];
                                                                } else {
                                                                    echo '';
                                                                }
                                                                ?>" disabled>

        <br>

        <h2>Previous School</h2>
        <label for="previousSchool"> Previous School: </label>
        <input id="previousSchool" type="text" name="previousSchool" value="<?php
                                                                            if (isset($_SESSION['previousSchool'])) {
                                                                                echo $_SESSION['previousSchool'];
                                                                            } else {
                                                                                echo '';
                                                                            }
                                                                            ?>" disabled>

        <br>

        <label for="levelAtPreviousSchool"> Year Level at Previous School: </label>
        <input id="levelAtPreviousSchool" type="text" name="levelAtPreviousSchool" value="<?php
                                                                                            if (isset($_SESSION['levelAtPreviousSchool'])) {
                                                                                                echo $_SESSION['levelAtPreviousSchool'];
                                                                                            } else {
                                                                                                echo '';
                                                                                            }
                                                                                            ?>" disabled>
        <br>

        <label for="languageOfInstruction">Language of Instruction:</label>
        <input type="radio" name="language" value="English" <?php
                                                            if (isset($_SESSION['language']) && $_SESSION['language'] == 'English') {
                                                                echo 'checked';
                                                            }
                                                            ?> disabled> English
        <input type="radio" name="language" value="Tagalog" <?php
                                                            if (isset($_SESSION['language']) && $_SESSION['language'] == 'Tagalog') {
                                                                echo 'checked';
                                                            }
                                                            ?> disabled> Tagalog
        <input type="radio" name="language" value="Other" <?php
                                                            if (isset($_SESSION['language']) && $_SESSION['language'] == 'Other') {
                                                                echo 'checked';
                                                            }
                                                            ?> disabled> Other
        <br>
        <br>

        <h2>Medical Record</h2>
        <label for="medical">Medical Records (if there's any):</label>
        <br>
        <textarea name="medical" rows="4" cols="50" disabled><?php
                                                                if (isset($_SESSION['medical'])) {
                                                                    echo $_SESSION['medical'];
                                                                } else {
                                                                    echo '';
                                                                }
                                                                ?></textarea>
        <br>

        <input type="submit" name="goback" value="Go Back">
    </form>
</body>

</html>

<?php
if (isset($_POST['goback'])) {
    header("Location: index.php");
    exit;
}
?>