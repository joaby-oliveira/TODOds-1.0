<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" href="photos/TODOds-transparente.png" type="image/x-icon">
    <link rel="stylesheet" href="frontend/eventRegister.css">
    <link rel="stylesheet" href="frontend/global.css">
    <script src="https://kit.fontawesome.com/1dd3967cff.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <style>
    /*
        div.insert{
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        input, textarea{
            border-radius: 5px;
            box-shadow: 0px 0px 9px red;
            border: none;
        }
        p{
            padding: 0;
            margin: 0;
        }
        input[type=submit]{
            margin-top: 15px;

        }
        footer h4, h5 {
            padding-top: 0;
            padding-bottom: 0;
            margin: 0;
            background-color: black;
        }
        footer{
            position: sticky;
            margin-bottom: 0;
            margin-top: 40px;
        }
         html{
            scroll-behavior: smooth;
        }
        :root{
            font-size: 16px;
            font-family: sans-serif;
            --text-primary: #b6b6b6;
            --text-secondary: #ececec;
            --bg-primary: #23232e;
            --bg-secondary: #141418;
        }
        
        body {
            color: black;
            background-color: white;
            margin: 0;
            padding: 0;
            height: 1000px;
            background-color: gray;
        }

        main {
            margin-left: 5rem;
            padding: 0;
        }
        
        body::-webkit-scrollbar {
            width: 0.5rem;
        }
        body::-webkit-scrollbar-track {
            background: black;
        }
        body::-webkit-scrollbar-thumb {
            background: purple;
        }
        .navbar {
            width: 5rem;
            height: 100vh;
            position: fixed;
            background: var(--bg-primary);
            transition: width 200ms ease;
        }
        .navbar-nav{
            display: flex;
            flex-direction: column;
            list-style: none;
            padding: 0;
            margin: 0;
            align-items: center;
            height: 100%;
        }
        .nav-item{
            width: 100%;
        }
        .nav-item:nth-child(1){
            margin-top: 20px;
        }
        i{
            color: rgb(34, 240, 255);
        }
        .nav-item:last-child{
            margin-top: auto;
        }
        .nav-link{
            display: flex;
            align-items: center;
            height: 5rem;
            color: var(--text-primary);
            filter: grayscale(100%) opacity(0.7);
            transition: 200ms;
            text-decoration: none;
            padding: 0 1.5rem;
        }
        .nav-link:hover{
            filter: grayscale(0%) opacity(0.7);
            background: var(--bg-secondary);
            color: var(--text-secondary);    
        }
        .link-text{
            display: none;
            margin-left: 1rem;
            transition: width 200ms ease;
        }
        .navbar:hover{
            width: 16rem;
        }
        .navbar:hover .link-text{
            display: block;
        } */

        </style>
    <title>TODOds</title>
</head>
<body>
<?php

session_start();

if(!$_SESSION['userCode']){
    echo 
    "<script>
            alert('Você não tem permissão a esta página');
        
        window.location.href = 'index.php';
    </script>";
}

?>
    <div class="container">
        <h1>TODOds</h1>
        <h4>O sistema que você pediu ao papai noel</h4>
        <hr style="width: 140px;">
        <h2>Adicionar tarefas</h2>
        <form action="backend/insert.php" method="post">
            <div class="insert">
                <div class="day">
                    <p>DATA</p>
                    <input type="text" name="date">
                </div>
                <div class="subject">
                    <p>MATÉRIA</p>
                    <input type="text" name="subject">
                </div>
                <div class="desc">
                    <p>DESCRIÇÃO</p>
                    <input type="text" name="description">
                </div>                <div class="desc">
                    <p>LINK</p>
                    <input type="text" name="link">
                </div>
<!--            <div class="urgency">
                    <p>URGENTE?</p>
                    <input type="text" name="urgency">
                </div>
                <div class="photo">
                    <p>Foto</p>
                    <input style="width:110px" type="file" name="file">
                </div>      -->
            </div>
                <input type="submit" value="Enviar" class="button">
        </form>
    </div>
    <nav class="img-txt" onmouseleave="hide()">
            <ul>
                <a href="eventRegister.php">
                    <li>
                        <i class="fas fa-pen fa-2x"></i>
                    </li>
                </a>
                <a href="events.php">
                    <li>
                        <i class="fas fa-home fa-2x"></i>
                    </li>
                </a>
                <a>
                    <li>
                        <i class="fas fa-address-card fa-2x" onmouseover="show()"></i>
                    </li>
                </a>
            </ul>
            <div class="menu fadeIn" id="menu" onmouseleave="hide()">
                <a href="backend/profile.php" >
                    <?php echo $_SESSION['firstname']?>
                </a>
                <a href="backend/logout.php" >
                    Sair
                </a>
            </div>
        </nav>
        <script>
            var menu;
            menu = document.getElementById("menu");
            menu.style.display="none";
            function show(){
                menu.style.display="flex";
            }
            function hide(){
                menu.style.display="none";
            }
        </script>
<!--        <table cl
    <!--<footer>
        <h4>Desenvolvido por <a href="https://github.com/joaby-oliveira">Joaby Oliveira</a> e <a href="https://github.com/GabrielRagonhaRodrigues">Gabriel Rodrigues</a></h4>
        <h5>Todos direitos reservados &copy</h5>
    </footer> -->
</body>
</html>