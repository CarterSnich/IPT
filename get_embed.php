<?php

$embeds = array(
    'req1.php' => '<script src="https://emgithub.com/embed.js?target=https%3A%2F%2Fgithub.com%2FCarterSnich%2FIPT%2Fblob%2Fmaster%2Freq1.php&style=atom-one-dark&showBorder=on&showLineNumbers=on&showFileMeta=on&showCopy=on"></script>',
    'req2.php' => '<script src="https://emgithub.com/embed.js?target=https%3A%2F%2Fgithub.com%2FCarterSnich%2FIPT%2Fblob%2Fmaster%2Freq2.php&style=atom-one-dark&showBorder=on&showLineNumbers=on&showFileMeta=on&showCopy=on"></script>',
    'req3.php' => '<script src="https://emgithub.com/embed.js?target=https%3A%2F%2Fgithub.com%2FCarterSnich%2FIPT%2Fblob%2Fmaster%2Freq3.php&style=atom-one-dark&showBorder=on&showLineNumbers=on&showFileMeta=on&showCopy=on"></script>',
    'req4.php' => '<script src="https://emgithub.com/embed.js?target=https%3A%2F%2Fgithub.com%2FCarterSnich%2FIPT%2Fblob%2Fmaster%2Freq4.php&style=atom-one-dark&showBorder=on&showLineNumbers=on&showFileMeta=on&showCopy=on"></script>'
);

$file_name = $_GET['fileName'];
echo $embeds[$file_name];
