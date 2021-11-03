<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT Activities</title>
    <link rel="stylesheet" href="assets/bootstrap-4.6.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">Navbar</span>
    </nav>


    <div id="main-body">

        <div id="viewer" class="m-auto">
            <div class="d-flex justify-content-between border border-bottom-0 rounded-top py-2">
                <span class="my-auto mx-3">Select activity</span>
                <div id="file-selection" class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                        Select activity
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li class="dropdown-item">req1.php</li>
                        <li class="dropdown-item">req2.php</li>
                        <li class="dropdown-item">req3.php</li>
                        <li class="dropdown-item">req4.php</li>
                    </div>
                </div>
                <ul class="nav nav-pills flex-fill d-flex flex-row-reverse mr-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Code</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Output</a>
                    </li>
                </ul>
            </div>
            <div id="viewers" class="w-100 h-100 border">
                <iframe id="html-view" class="w-100 h-100" src="" frameborder="0"></iframe>
                <div id="code-view" class="w-100 h-100 d-none"></div>
            </div>
        </div>

    </div>

    <script src="assets/jQuery/jQuery.js"></script>
    <script src="assets/bootstrap-4.6.1-dist/js/bootstrap.bundle.js"></script>
    <script src="assets/scripts/script.js"></script>
</body>

</html>