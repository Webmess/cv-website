<?php
// Create a database connection
$conn = mysqli_connect("dev.local", "webmess", "victorious.48", "cv-website");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from database
$result = mysqli_query($conn, "SELECT * FROM personal_info");
$personal_info = mysqli_fetch_assoc($result);

$result = mysqli_query($conn, "SELECT * FROM education");
$education = mysqli_fetch_all($result, MYSQLI_ASSOC);

$result = mysqli_query($conn, "SELECT * FROM skills");
$skills = mysqli_fetch_all($result, MYSQLI_ASSOC);

$result = mysqli_query($conn, "SELECT * FROM projects");
$projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

$result = mysqli_query($conn, "SELECT * FROM contact_form");
$contact_form = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close connection
mysqli_close($conn);
?>

<!-- CV Template -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Website</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add CSS styling -->
</head>
<body>
    <header>
        <h1><?php echo $personal_info['name']; ?></h1>
        <p><?php echo $personal_info['email']; ?></p>
        <p><?php echo $personal_info['phone']; ?></p>
        <p><?php echo $personal_info['bio']; ?></p>
    </header>

    <section id="education">
        <h2>Education</h2>
        <ul>
            <?php foreach ($education as $edu) { ?>
                <li>
                    <h3><?php echo $edu['degree']; ?></h3>
                    <p><?php echo $edu['institution']; ?></p>
                    <p><?php echo $edu['start_date']; ?> - <?php echo $edu['end_date']; ?></p>
                </li>
            <?php } ?>
        </ul>
    </section>

    <section id="skills">
        <h2>Skills</h2>
        <ul>
            <?php foreach ($skills as $skill) { ?>
                <li><?php echo $skill['skill_name']; ?> (<?php echo $skill['description']; ?>)</li>
            <?php } ?>
        </ul>
    </section>

    <section id="projects">
        <h2>Projects</h2>
        <ul>
            <?php foreach ($projects as $project) { ?>
                <li>
                    <h3><?php echo $project['project_name']; ?></h3>
                    <p><?php echo $project['description']; ?></p>
                    <p><?php echo $project['start_date']; ?> - <?php echo $project['end_date']; ?></p>
                </li>
            <?php } ?>
        </ul>
    </section>

    <section id="contact-form">
        <h2>Contact Form</h2>
        <ul>
            <?php foreach ($contact_form as $contact) { ?>
                <li>
                    <p><?php echo $contact['name']; ?></p>
                    <p><?php echo $contact['email']; ?></p>
                    <p><?php echo $contact['message']; ?></p>
                </li>
            <?php } ?>
        </ul>
    </section>

    <script src="script.js"></script> <!-- Add JavaScript file -->
</body>
</html>