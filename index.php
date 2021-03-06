<?php
    require_once('embeds.php');
?>

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

    <nav class="navbar navbar-dark">
        <span class="navbar-brand mb-0 h1">Network Programming activites</span>
        <div class="form-inline">
            <a class="btn btn-outline-dark" href="https://github.com/CarterSnich/IPT" target="_blank">
                <p class="my-auto">
                    Github
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#282828" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                </p>
            </a>
        </div>
    </nav>

    <div id="main-body">

        <div id="viewer" class="my-auto mx-5 h-75">
            <div id="viewer-controls" class="d-flex justify-content-between border border-bottom-0 rounded-top py-2">
                <span class="my-auto mx-3 text-light">Select activity</span>
                <div id="file-selection" class="dropdown">
                    <button class="btn btn-dark p-2 dropdown-toggle active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                        Select activity
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li class="dropdown-item text-light">req1.php</li>
                        <li class="dropdown-item text-light">req2.php</li>
                        <li class="dropdown-item text-light">req3.php</li>
                        <li class="dropdown-item text-light">req4.php</li>
                    </div>
                </div>
                <ul class="nav nav-pills flex-fill d-flex flex-row-reverse mr-3">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-dark" href="#">Code</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-dark active" href="#">Output</a>
                    </li>
                </ul>
            </div>
            <div id="viewers" class="w-100 h-100 border rounded-bottom">
                <iframe id="html-view" class="w-100 h-100" src="" frameborder="0"></iframe>
                <div id="code-view" class="w-100 h-100 d-none">
                    <?php foreach ($embeds as $key => $url) : ?>
                        <div id="<?= $key; ?>" class="d-none">
                            <?= $url; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <p class="text-light text-center m-3">Joe Mar Closa</p>
    </div>

    <script src="assets/jQuery/jQuery.js"></script>
    <script src="assets/bootstrap-4.6.1-dist/js/bootstrap.bundle.js"></script>
    <script src="assets/scripts/script.js"></script>
</body>

</html>