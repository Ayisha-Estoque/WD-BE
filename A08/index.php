<?php include("assets/process.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <?php include("assets/shared/header.php"); ?>

    <style>
        <?php include('assets/style.css'); ?>
    </style>
</head>

<body class="w3-black">

    <?php include('assets/sidebar.php'); ?>

    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
        <?php include('assets/mainHeader.php'); ?>

        <!-- About Section -->
        <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
            <?php include('assets/about.php'); ?>

            <!-- Portfolio Section -->
            <?php include('assets/personality.php'); ?>

            <?php include('assets/contents.php'); ?>

        </div>

        <!-- Footer -->
        <?php include('assets/shared/footer.php'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

</body>

</html>