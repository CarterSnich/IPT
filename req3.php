<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a webpage</title>
    <link rel="stylesheet" href="assets/bootstrap-4.6.1-dist/css/bootstrap.css">
    <script src="assets/jQuery/jQuery.js"></script>
    <script src="assets/bootstrap-4.6.1-dist/js/bootstrap.bundle.js"></script>
</head>

<body class="p-4">
    <script>
        if (window.location !== window.parent.location) {
            $('body').html('<a href="req3.php" target="_blank" onload="" class="text-decoration-none">Open in new tab to see result</a>')
        }
    </script>
</body>

</html>