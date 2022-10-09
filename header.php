<?php if (getcwd() == $_SERVER["DOCUMENT_ROOT"]) { ?>
    <h1><?php echo $title; ?></h1>
<?php } else if (basename($_SERVER['PHP_SELF']) == "index.php") { ?>
    <h1><?php echo $title; ?> | <a class="backbutton" href="..">[Back]</a></h1>
<?php } else { ?>
    <h1><?php echo $title; ?> | <a class="backbutton" href=".">[Back]</a></h1>
<?php } ?>