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
    <form name="form" class="register" action="backend/register.php" method="post">
        <!--<h1>Faça seu registro</h1>-->
        <img src="photos/TODOds-transparente.png" alt="logo-img">

        <div class="container-input-container">
            <div class="name-lastname">
                <div class="input-container">
                    <i class="far fa-user-circle"></i>
                    <div class="label-input-container">
                        <label for="name">Nome</label>
                        <input id="name" class="input-field" type="text" name="first" placeholder="Ex: João">
                    </div>
                </div>

                <div class="input-container">
                    <i class="far fa-user-circle"></i>
                    <div class="label-input-container">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" class="input-field" type="text" name="last" placeholder="Ex: Silva Santos">
                    </div>
                </div>
            </div>

            <div class="input-container">
                <i class="fas fa-venus-mars"></i>
                <div class="label-input-container">
                    <label for="gender">Gênero</label>
                    <select id="gender" name="gender" class="input-field">
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
                    <input class="input-field" id="email" type="text"  name="email" placeholder="abc@email.com">
                </div>
            </div>

            <div class="input-container">
                <i class="fas fa-key"></i>
                <div class="label-input-container">
                    <label for="password">Senha</label>
                    <input id="password" class="input-field" id="password" type="password"  name="password" placeholder="**********">
                </div>
            </div>
        </div>
        <div id="error">
        <?php
            //include_once 'backend/register.php';
            session_start();
            if(!empty($_SESSION['errors'])){
                echo "<p style='margin: 10px;'>". $_SESSION['errors']. "</p>";
            }
        ?>
        </div>
        <input type="submit" name="submit" class="submit-btn" value="Cadastrar">
        <a class="back" href="index.php">Voltar</a>
    </form>
    <script>

        const inName = document.getElementById("name");
        const inLastname = document.getElementById("lastname");
        const inGender = document.getElementById("gender");
        const inEmail = document.getElementById("email");
        const inPassword = document.getElementById("password");
        const errorElement = document.getElementById("error");
        
        // document.getElementById('form').submit();
        form.addEventListener('submit', e => {
            // e.preventDefault();

            let messages = [];
            console.log(validatePassword(inPassword));
            if(inName.value == ""){
                messages.push("Preencha o campo de nome");
                inName.style.borderBottom = "2px solid red";
            }
            
            if(inGender.value == "default"){
                messages.push("Selecione um gênero");
                inGender.style.borderBottom = "2px solid red";
            }
            
            if(inLastname.value == ""){
                messages.push("Preencha o campo de sobrenome");
                inLastname.style.borderBottom = "2px solid red";
            }
            
            
            if(inPassword.value == ""){
                messages.push("Preencha o campo de senha");
                inPassword.style.borderBottom = "2px solid red";
            }

            if(inPassword.value.length < 8 && inPassword.value.length > 0){
                messages.push("A senha dever ter no mínimo 8 dígitos");
                inPassword.style.borderBottom = "2px solid red";
            }

            if(inPassword.value.length > 20){
                messages.push("A senha dever ter no máximo 20 dígitos");
                inPassword.style.borderBottom = "2px solid red";
            }

            if(inEmail.value.length == ""){
                messages.push("Preencha o campo de e-mail");
                inEmail.style.borderBottom = "2px solid red";
            }

            if(messages.length > 0){
                e.preventDefault();
                errorElement.style.margin = "10px";
                errorElement.style.textAlign = "center";
                errorElement.innerText = "" + messages.join('\n ');
            }

        });

        function validatePassword(password) {
            const regex = /(?=(?:.*?[A-Z]){1})(?=(?:.*?[0-9]){1})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})/;
            return regex.test(password);
        }

        console.log(validatePassword(inPassword));

    </script>
</body>

</html>