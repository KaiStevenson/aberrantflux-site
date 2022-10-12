<h1><?php echo $title; ?></h1>

<?php if (getcwd() == $_SERVER["DOCUMENT_ROOT"]) { ?>
    <h3 class="nav"><a href="/">[Home]</a> | <a href="/about.php">[About]</a></h3>
<?php } else if (basename($_SERVER['PHP_SELF']) == "index.php") { ?>
    <h3 class="nav"><a href="/">[Home]</a> | <a href="/about.php">[About]</a> | <a href="..">[Back]</a></h3>
<?php } else { ?>
    <h3 class="nav"><a href="/">[Home]</a> | <a href="/about.php">[About]</a> | <a href=".">[Back]</a></h3>
<?php } ?>
