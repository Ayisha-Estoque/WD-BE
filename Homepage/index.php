<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayisha's Portfolio</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets\style.css">
    <link rel="icon" href="assets\image\officialIcon.png">
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif&display=swap" rel="stylesheet">

</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <span class="navbarHeader">
                <img src="assets/image/officialIcon.png" alt="Icon" class="navbarIcon">
                Ayisha
            </span>
        </div>
    </nav>

    <div class="container introSection">
        <?php include "assets/content.php" ?>
    </div>

    <!-- Projects Section -->
    <div class="container projectsSection">
        <?php include "assets/projects.php" ?>
    </div>

    <?php include "assets/shared/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>