<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REKRUTO_task</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<style>
    body{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: rgb(255, 255, 255);
        background-color: #202731;
        min-height: 90vh;
        margin: 0px;
        max-width:90vw;
        max-height: 90vh;
    }

    section {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        
    }
    .spacer {
        aspect-ratio: 600/200;
        width: 150%;
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: cover;
    }
    .layer {
        background-image: url('https://github.com/Fr4N7OsTOPG/websit/blob/main/pic.svg');
    }


</style>

</head>
<body>
<?php
    if (isset($_GET['submit_form'])) {
        echo "Привет,".$_GET['name']."!";
        echo "Давай дружить".$_GET['message']."!";    
    }

    <section>
        <h1>Rekruto! Давай дружить!</h1>
        <p>
            <Makima></Makima>
        </p>
    </section>
    
    <section>
        <h1>Ввод</h1>
        <form method="get">
      <div>
        <label for="to">Ваше имя</label>
        <input name="name">
      </div>
      <div>
        <label for="to">Твое сообщение</label>
        <input name="message">
      </div>
      
        <input type="submit" name="submit_form" value="отправить" />
?>                     
        
        

    </section>
    <div class = 'spacer layer'></div>
    
</body>
</html>
