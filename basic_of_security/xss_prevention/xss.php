<?php
    echo "Raw Text :";
    $raw_text = fgets(STDIN);
    $secure_text = htmlspecialchars($raw_text,ENT_QUOTES,'UTF-8').PHP_EOL;

    echo $secure_text;
;?>