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
    <form name="register" class="register" action="backend/register.php" method="post">
        <!--<h1>Faça seu registro</h1>-->
        <img src="photos/TODOds-transparente.png" alt="logo-img">

        <div class="container-input-container">
            <div class="input-container">
                <i class="far fa-user-circle"></i>
                <div class="label-input-container">
                    <label for="name">Nome</label>
                    <input id="name" class="input-field" type="text" name="first" placeholder='"João"'>
                </div>
            </div>

            <div class="input-container">
                <i class="far fa-user-circle"></i>
                <div class="label-input-container">
                    <label for="lastname">Sobrenome</label>
                    <input id="lastname" class="input-field" type="text" name="last" placeholder='"Paulo"'>
                </div>
            </div>

            <div class="input-container">
                <i class="fas fa-venus-mars"></i>
                <div class="label-input-container">
                    <label for="gender">Gênero</label>
                    <select id="gender" class="input-field">
                        <option value="default" class="input-field">Selecione um gênero</option>
                        <option value="M" class="input-field">Masculino</option>
                        <option value="F" class="input-field">Feminino</option>
                        <option value="O" class="input-field">Outro</option>
                    </select>
                </div>
            </div>

            <div class="input-container">
                <i class="far fa-envelope"></i>
                <div class="label-input-container">
                    <label for="email">Email</label>
                    <input class="input-field" type="text" name="email" placeholder="abc@email.com">
                </div>
            </div>

            <div class="input-container">
                <i class="fas fa-key"></i>
                <div class="label-input-container">
                    <label for="password">Senha</label>
                    <input id="password" class="input-field" type="password" name="password" placeholder="**********">
                </div>
            </div>
        </div>

            <button type="submit" class="submit-btn">Registrar</button>
            <a class="back" href="index.php">Voltar</a>
    </form>
</body>

</html>