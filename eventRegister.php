<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/1dd3967cff.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="photos/TODOds-transparente.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        body{
            height: calc(100vh - 40px);
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding: 0;
        }
        *{
            font-family: Oswald, sans-serif;
            /*color: rgb(20, 20, 20);*/
            font-size: 25px;
            text-align: center;
        }
        div.insert{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.40);
            border-radius: 20px;
            border: solid white 2px;
        }
        input, input.button{
            width: 200px;
            height: 30px !important;
            margin: 1px;
            padding: 0;
            border: solid gray 1px;
            border-radius: 3px;
        }
        div.button{
            display: flex;
            align-items: flex-end;
        }
        input.button{
            height: 40px !important;
            width: 204px;
            background: gray;
        }
        h1{
            font-size: 3rem;
            color: rgb(214, 34, 34);
            margin-bottom: 0;
            margin-top: 0;
            padding-bottom: 0;
        }
        h4{
            font-weight: 100;
            margin-top: 0;
        }
        h2 {
            color: rgb(245, 255, 179);
            font-weight: 100;
            margin: 20px;
        }
        form p{
            color: palegoldenrod;
            margin: 0;
        }
        a{
            text-decoration: none;
            color: black;
        }
        body{
            background: linear-gradient(180deg, #101B3F 0%, #A31831 100%);
        }

        .img-txt{
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgb(55, 10, 30);
            padding: 10px 0;
            border-bottom: 2px solid white;
        }
        ul{
            width: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        li{
            list-style: none;
        }
        i{
            color: rgb(255, 255, 255);
            transition: 0.2s ease;
        }
        i:hover{
            transform:scale(1.1);
        }
        .menu{
            width: 20%;
            height: calc(100vh - 73px);
            display: none;
            position: absolute;
            background: black;
            top: 0;
            right: 0;
            transition: ease 0.4s;
            display: flex;
            justify-content: center;
        }
        .menu a{
            height: 40px;
            width: 100%;
            text-decoration: none;
            padding: 10px;
            background: red;
            border-radius: 10px;
        }
        
        </style>
    <title>TODOds</title>
</head>
<body>
    <div class="container">
        <h1>TODOds</h1>
        <h4>O sistema que você pediu ao papai noel</h4>
        <hr style="width: 140px;">
        <h2>Adcionar tarefas</h2>
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
            <div class="button">
                <input type="submit" value="Enviar" class="button">
            </div>
        </form>
    </div>
    <nav class="img-txt">
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
                <a href="">
                    <li>
                        <i class="fas fa-address-card fa-2x" onmouseover="a()"></i>
                    </li>
                </a>
            </ul>
        </nav>
        <div class="menu" id="menu" onmouseleave="b()">
            <a href="backend/logout.php" >
                Sair
            </a>
        </div>
        <script>
            var menu;
            menu = document.getElementById("menu");
            menu.style.display="none";
            function a(){
                menu.style.display="flex";
            }
            function b(){
                menu.style.display="none";
            }
        </script>
    <!--<footer>
        <h4>Desenvolvido por <a href="https://github.com/joaby-oliveira">Joaby Oliveira</a> e <a href="https://github.com/GabrielRagonhaRodrigues">Gabriel Rodrigues</a></h4>
        <h5>Todos direitos reservados &copy</h5>
    </footer> -->
</body>
</html>