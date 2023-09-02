<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Resume</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Create Your Resume</h1>

    <form action="submit.php" method="post">
        <h2>Personal Information</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <h2>Education</h2>
        <label for="education">Education:</label>
        <textarea name="education" rows="4" cols="50" required></textarea><br>

        <h2>Work Experience</h2>
        <label for="experience">Work Experience:</label>
        <textarea name="experience" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
