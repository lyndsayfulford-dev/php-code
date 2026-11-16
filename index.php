<?php include_once("variables.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($company_name); ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php include("navbar.php"); ?>

    <main class="container mt-4">
      <h1><?php echo htmlspecialchars($company_name); ?></h1>
      <p class="lead"><?php echo htmlspecialchars($tagline); ?></p>
    </main>

    <?php include("footer.php"); ?>
  </body>
</html>
