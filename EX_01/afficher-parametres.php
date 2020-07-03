<a href= "http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/afficher-parametres.php?param1=valeur1&param2=valeur2"> <?php $_GET?> </a>



 <?php
foreach($_GET as $key => $value){
    echo "<ul>";
        echo "<li>";
        echo "clé :" . $key . ", valeur : " . $value;
        echo "</li>";
    echo "</ul>";
}
?>