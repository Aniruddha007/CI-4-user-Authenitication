<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $title ?? getenv('APP_NAME') ?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/assets.css">
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/custom.js"></script>
</head>
<body>

<?=$this->include("partials/header")?>

<?=$this->renderSection("body")?>

<?=$this->include("partials/footer")?>

</body>
</html>