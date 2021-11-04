<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today is <?php echo date("M. d, Y") ?></title>
    <link rel="stylesheet" href="assets/bootstrap-4.6.1-dist/css/bootstrap.css">
    <script src="assets/jQuery/jQuery.js"></script>
    <script src="assets/bootstrap-4.6.1-dist/js/bootstrap.bundle.js"></script>
</head>

<body class="p-4">
    <p>When was this webpage created? Check page's title for the answer.</p>
    <script>
        if (window.location !== window.parent.location) {
            $('body').append('<a href="req4.php" target="_blank" class="text-decoration-none">Open in new tab to see result</a>')
        }
    </script>
</body>

</html>