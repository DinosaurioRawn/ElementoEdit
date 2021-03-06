<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="./scripts/index.js"></script>
    <!--<link rel="stylesheet" href="./estilos/index.css">
    <link rel="stylesheet" href="./estilos/login.css"> commet -->
    
    <link rel="stylesheet" href="estilos/style.css" />
    
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <title>Dino´s blog</title>
</head>

<body>
    <?php include './views/header.php'?>
    <main>
        <div class="conteiner">
        <?php include 'controller/router.php' ?>
        </div>
    </main>
    <?php include './views/footer.php'?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>