<?php

/*************************************************************************************************
 * index.php
 *
 * Main page for the Green Bag application.
 *
 * This page will use the optional 'content' request parameter to include a specific page. If the
 * parameter is not specified then the default list page will be included.
 *************************************************************************************************/

include('library.php');

?>

<!DOCTYPE html>
<html lang="en">
    <header>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GreenBag</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <link rel="stylesheet" href="style.css?v=<?php echo rand(); ?>">
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
             function showAlert(type, title, message) {
                $('#alert').hide();
                $('#alert').removeClass('alert-success alert-info alert-warning alert-danger').addClass('alert-' + type);
                $('#alertTitle').text(title);
                $('#alertMessage').html(message);
                $('#alert').fadeIn();
            }
        </script>
    </header>
<body>
    <!-- Main Content -->
    <?php
    print_r($_SESSION);
    ?>
    <div class="container-fluid mt-3">
            <?php include(get_content() . '.php'); ?>
    </div>
</body>
</html>