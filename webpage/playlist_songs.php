<?php
    $playlist = $_REQUEST['playlist'];
    $lines = file("songs/".$playlist);

    foreach ($lines as $line) {
?>
        <li class="mp3item">
            <?= $line ?>
        </li>
    <?php
    }
    ?>