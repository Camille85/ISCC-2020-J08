<html>
<head>
    <link type="text/css" rel="stylesheet" href="vitrine.css">
</head>
 <?php
 include('header.php');
 ?>
     <a href= "http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/ex_02/index.php"> <?php $_GET?> </a>
  </head>
    <nav>
    <a href= "http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/ex_02/index.php?page=1" class="navigation", class= "lien", class= "lienpageactuel">Accueil </a>
    <a href= "http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/ex_02/index.php?page=2" class="navigation" class= "lien", class= "lienpageactuel">Contacts </a>
    <a href= "http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/ex_02/index.php?page=3" class="navigation" class= "lien", class= "lienpageactuel">Programme </a>
    </nav>
<body>
    <?php
    if ($_GET["page"] == "1"){
        echo "<h1> Accueil </h1>";
        include("vitrine-accueil.php");
    }
    elseif ($_GET["page"] == "2"){
        echo " <h1> Contacts </h1>";
        include("vitrine-contacts.php");
    }
    elseif ($_GET["page"] == "3"){
        echo " <h1> Programme </h1>";
        include("vitrine-programme.php");
    }
    
    ?>
    <?php
    http_response_code(404);
    include('404.php');
    ?>
  </body>

  <?php include('footer.php');
    ?>

  </html>