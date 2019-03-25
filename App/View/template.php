<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?=$this->asset('src/css/materialize.css');?>"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?=$this->asset('src/css/style.css');?>"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
    <?php
        //Carregando o a view;
        $this->LoadViewTemplate($viewPaste, $viewName, $viewData);
    ?>
<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?=$this->asset('src/js/ajax.js');?>"></script>
<script type="text/javascript" src="<?=$this->asset('src/js/materialize.js');?>"></script>
<script type="text/javascript" src="<?=$this->asset('src/js/script.js');?>"></script>
</body>
</html>

