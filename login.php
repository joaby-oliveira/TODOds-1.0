<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu login</title>
    <script src="https://kit.fontawesome.com/1dd3967cff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="frontend/login.css">
</head>
<body>
    <div class="container">
        <form id="form" name="form" action="backend/auth.php" method="POST">
            <div class="box">
                <i class="fas fa-user fa-7x"></i>
                <div class="input-box">
                    <div class="input input-email">
                        <p>Email</p>
                        <input type="email" id="email" name="user" placeholder="abc@email.com">
                    </div>
                    <div class="input input-password">
                        <p>Senha</p>
                        <input type="password" id="password" name="password" placeholder="********">
                    </div>
                    <div class="input input-submit">
                        <input onclick="" type="submit" id="submit" name="submit" value="Enviar">
                    </div>
                    <div style="text-align:center" id="error">
                        <?php include_once('backend/auth.php'); foreach($erros as $erro): ?>
                            <p><?=$erro?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        const inEmail = document.getElementById("email");
        const inPassword = document.getElementById("password");
        const errorElement = document.getElementById("error");
        
        form.addEventListener('submit', (e)=>{
            let messages = [];

            if(inPassword.value == ""){
                messages.push("Preencha o campo de senha");
                inPassword.style.borderBottom = "2px solid red";
            }

            if(inPassword.value.length < 6 && inPassword.value.length > 0){
                messages.push("A senha é muito curta");
                inPassword.style.borderBottom = "2px solid red";
            }

            if(inPassword.value.length > 20){
                messages.push("A senha é muito longa");
                inPassword.style.borderBottom = "2px solid red";
            }

            if(inEmail.value.length == ""){
                messages.push("O email não pode ser nulo");
                inEmail.style.borderBottom = "2px solid red";
            }

            if(messages.length > 0){
                e.preventDefault();
                errorElement.innerText = messages.join('\n ');
                alert("Calma la amigão, c fez merda");
            }
        });

        function validatePassword(password) {
            const regex = /(?=(?:.*?[A-Z]){1})(?=(?:.*?[0-9]){1})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})/;
            return regex.test(password);
        }

    </script>
</body>
</html>