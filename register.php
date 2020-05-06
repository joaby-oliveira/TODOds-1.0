<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script src="https://kit.fontawesome.com/1dd3967cff.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="photos/TODOds-transparente.png" type="image/x-icon">
    <link rel="stylesheet" href="frontend/register.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto+Condensed&display=swap" rel="stylesheet">

</head>

<body>
    <form class="register" action="backend/register.php" method="post">
        <!--<h1>Faça seu registro</h1>-->
        <img src="photos/TODOds-transparente.png" alt="paunocudojoaby">
        
        <div class="input-container">
            <i class="far fa-user-circle"></i>
            <input class="input-field" type="text" name="first" placeholder="Nome">
        </div>

        <div class="input-container">
            <i class="far fa-user-circle"></i>
            <input class="input-field" type="text" name="last" placeholder="Sobrenome">
        </div>

        <div class="input-container">
            <i class="fas fa-venus-mars"></i>
            <input class="input-field" type="text" name="gender" placeholder="Gênero">
        </div>

        <div class="input-container">
            <i class="far fa-envelope"></i>
            <input class="input-field" type="text" name="email" placeholder="Email">
        </div>

        <div class="input-container">
            <i class="fas fa-key"></i>
            <input class="input-field" type="password" name="password" placeholder="Senha">
        </div>
        <button type="submit" class="submit-btn">Registrar</button>
        <a href="index.php">Voltar</a>
    </form>
</body>

</html>