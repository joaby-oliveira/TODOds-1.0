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
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/1dd3967cff.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="photos/TODOds-transparente.png" type="image/x-icon">
    <link rel="stylesheet" href="frontend/events.css">
    <link rel="stylesheet" href="frontend/global.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <style>

    </style>
    <title>TODOds</title>
</head>
<body class="fadeIn">
    <header>
        </header>
        <?php
        include_once 'backend/connect.php';
        //Which week day
        $weekDay = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
        $date = date('Y-m-d');
        $numberWeekDay = date('w', strtotime($date));

        $query = "SELECT date, subject, link, description FROM events ORDER BY date ASC";
        $result = mysqli_query($connection, $query);
        $queryClasses = "SELECT aulaDia, aulaProfessor, aulaNome, aulaHorario, aulaTurma FROM aulas WHERE aulaDia LIKE '%$weekDay[$numberWeekDay]%'";
        $resultClasses = mysqli_query($connection, $queryClasses);
        

        
        ?>
    <div class="container">
        <header>
            <h1 class="gradient-text no-select">TODOds</h1>
            <h4 class="no-select">O sistema que você pediu ao papai noel</h4>
            <hr style="width: 140px;">
            <h2 class="no-select"><?php echo "Seja bem-vindo " . $_SESSION['firstname']; ?></h2>
        </header>
        <table>
            <thead>
                <tr>
                    <th>Matéria</th>
                    <th>Descrição</th>
                    <th>Link</th>
                    <th>Prazo</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_assoc($result)):?>
                <tr>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php if(empty($row['link']))
                    { echo "<a class='no-access'>ACESSAR</a>";}
                    else{ echo "<a href=". $row['link'] ." class='access' target='_blank'>ACESSAR</a>";} ?></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
            <?php endwhile ?>
            </tbody>
        </table>

        <table>
            <thead>
            <?php $row = mysqli_fetch_assoc($resultClasses)?>
                <tr class="classDay">
                    <?php echo $row['aulaDia']; ?>
                    <th>Matéria</th>
                    <th>Professor</th>
                    <th>Horário</th>
                    <th>Turma</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_assoc($resultClasses)):?>
                <tr>
                    <td><?php echo $row['aulaNome']; ?></td>
                    <td><?php echo $row['aulaProfessor']; ?></td>
                    <td><?php echo $row['aulaHorario']; ?></td>
                    <td><?php echo $row['aulaTurma']; ?></td>
                </tr>
            <?php endwhile ?>
            </tbody>
        </table>
        <nav class="img-txt" onmouseleave="hide()">
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
