<?php
$pageTitle = 'Index File';
$currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
</head>
<body>
    <main>
        <h1><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
        <p>This page has been converted to PHP.</p>
        <footer>
            &copy; <?php echo $currentYear; ?> <?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>
        </footer>
    </main>
</body>
</html>
