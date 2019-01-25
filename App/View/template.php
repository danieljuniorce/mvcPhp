<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../src/css/style.css"/>
    <title>Inclusão Digital - <?php echo ''; ?></title>
</head>
<body>
  <div class="bg-dark py-4">
  </div>
    <div class="container my-5">
        <?php
          //Carregando o a view;
            $this->LoadViewTemplate($viewPaste, $viewName, $viewData);
        ?>
    </div>
    
</body>
<script src="../../src/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</html>