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

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/1dd3967cff.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @media (max-width: 674px) {
            * {
                font-size: 0.8rem !important;
            }
            h1{
                font-size: 3rem !important;
            }
            .desc{
                font-weight: 100;
                font-size: 0.6rem !important;
            }
        }
        *{
            font-family: Oswald, sans-serif;
            color: rgb(245, 255, 179);
            font-size: 25px;
            text-align: center;
        }
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        body{
            background: linear-gradient(180deg, #101B3F 0%, #A31831 100%);
            padding: 0;
            margin: 0;
        }
        table{
            background-color: #400133;
            padding: 10px;
            overflow: scroll;
        }
        .tab{
            border-radius: 5px;
        }
        th{
            box-shadow: 0px 0px 5px black;
            background-color: rgb(212, 65, 92);
            color: rgb(0, 0, 0);
            border: 1px solid black;
            border-radius: 5px;
            transition: ease-in-out 0.1s;
        }
        td{
            background-color: rgb(163, 24, 49);
            border: 1px solid black;
            margin: 10px;
            border-radius: 5px;
            font-weight: 100;
        }
        h1{
            font-size: 3rem;
            text-align: center;
            color: rgb(214, 34, 34);
            margin-bottom: 0;
            margin-top: 0;
            padding-bottom: 0;
        }
        h4{
            font-weight: 100;
            text-align: center;
            color: #FFF;
            margin-top: 0;
        }
        hr{
            margin-top: 0;
        }
        td{
            word-wrap: break-word;
            transition: ease-in-out 0.6s;
        }
        td.desc{
            font-size: 0.6rem;
        }
        .necessary{
            color: black;
            background-color: rgb(230, 182, 50) !important;
        }
        .unnecessary{
            background-color: rgb(77, 216, 84) !important;
            color: black;
        }
        th:hover{
            background-color: rgb(110, 0, 20);
        }
        img{
            margin-top: 8px;
            border-radius: 5px;
            transition: ease-in-out 0.3s;
            max-width: 250px;
        }
        a img:hover{
            transform: scale(1.1);
        }
        .desc{
            font-size: 1rem !important;
        }
        td:hover{
            color: rgb(255, 255, 255);
        }

        .p td{
            background-color: rgb(133, 19, 40);
        }
        h2{
            color: rgb(245, 255, 179);
            font-weight: 100;
        }
        
        .img-txt{
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
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
            width: 32%;
            height: calc(100vh - 73px);
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            background: black;
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
        table{
            margin: 10px;
            box-shadow: 0px 0px 20px black;
            border-radius: 10px;
        }
        td{
            width: 25% !important;
            overflow: hidden;
            
        }
    </style>
    <title>TODOds</title>
</head>
<body>
    <?php
        include_once 'backend/connect.php';
        $query = "SELECT date, subject, link, description FROM events ORDER BY date ASC";
        $result = mysqli_query($connection, $query);
//        $register = [];
    ?>
    <div class="container">
        <header>
            <h1>TODOds</h1>
            <h4>O sistema que você pediu ao papai noel</h4>
            <hr style="width: 140px;">
            <h2><?php echo "Seja bem-vindo " . $_SESSION['firstname']; ?></h2>
        </header>
        <table>
            <thead>
                <th>Matéria</th>
                <th>Descrição</th>
                <th>Link</th>
                <th>Prazo</th>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_assoc($result)):?>
                <tr>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php if(empty($row['link']))
                    { echo "Nenhum link encontrado";}
                    else{ echo "<a href=". $row['link'] .">ACESSAR</a>";} ?></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
            <?php endwhile ?>
            
            </tbody>
        </table>
        <nav class="img-txt">
            <ul>
                <a href="eventRegister.php">
                    <li>
                        <i class="fas fa-pen fa-2x"></i>
                    </li>
                </a>
                <a href="">
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
<!--        <table class="tab">
            <caption>TABELA DE AULAS</caption>
            <thead>
                <tr>
                    <th>DIA</th>
                    <th>MATÉRIA</th>
                    <th id="desc">DESCRIÇÃO</th>
                    <th>URGÊNCIA</th>
                    <th>FOTOS</th>
                </tr>    
            </thead>
            <tbody>
                <tr class="p">
                    <td>09/03 <br> Segunda</td>
                    <td>Matemática</td>
                    <td class="desc">Tarefa de Matemática sobre sistemas lineares</td>
                    <td class="necessary">NECESSÁRIO!</td>
                    <td> 
                        <a href="fotos/math1.jpg">
                            <img src="fotos/math1.jpg" alt="photo homework" style="width:50%">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>09/03 <br> Segunda</td>
                    <td>Ética</td>
                    <td class="desc">Fazer o trabalho sobre ética na área da informática</td>
                    <td class="necessary">NECESSÁRIO!</td>
                    <td> 
                        <a href="photo/default.png">
                            <img src="photo/default.png" alt="default photo" style="width:50%">
                        </a>
                    </td>
                </tr>
                <tr class="p">
                    <td>13/03 <br> Sexta</td>
                    <td>Matemática</td>
                    <td class="desc">Prova de matemática - Determinante, matrizes, sistemas lineares...</td>
                    <td class="unnecessary">NÃO NECESSÁRIO!</td>
                    <td>
                        <a href="photo/default.png">
                            <img src="photo/default.png" alt="default photo" style="width:50%">
                        </a>
                    </td>
                </tr>    
                <tr>
                    <td>16/03 <br> Segunda</td>
                    <td>Lingua Portuguesa</td>
                    <td class="desc">Redação de Língua Portuguesa - Fazer também a pesquisa norteadora sobre a vacinação.</td>
                    <td class="necessary">NECESSÁRIO!</td>
                    <td>
                        <a href="photos/math1.jpg">
                            <img src="photos/default.png" alt="default photo style="width:50%">
                        </a>
                    </td>
                </tr>    

            </tbody>
        </table>-->
    </div>
    


</body>
</html>
<!-- 674 -->
