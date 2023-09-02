<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Resume</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <h1>Your Resume</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $education = $_POST["education"];
        $experience = $_POST["experience"];

        // Display the submitted resume data
        echo "<h2>Personal Information</h2>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";

        echo "<h2>Education</h2>";
        echo nl2br($education) . "<br>";

        echo "<h2>Work Experience</h2>";
        echo nl2br($experience) . "<br>";
    } else {
        echo "Invalid request.";
    }
    ?>
</body>
</html>
