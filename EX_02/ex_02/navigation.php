<fieldset class="navigation">

<?php
   echo $_SERVER['REQUEST_URI'];
   ?>
<?php
$path_parts = pathinfo($_SERVER['REQUEST_URI']);

echo $path_parts['filename'], "\n"; // depuis PHP 5.2.0

if ($path_parts['filename'] == "vitrine-accueil")
{
    echo '<a href="vitrine-accueil.php"class="lien lienpageactuel"><b>Accueil</b></a>';
}
else 
{
    echo '<a href="vitrine-accueil.php"class="lien"><b>Accueil</b></a>' ;
}   
?>

<?php
$path_parts = pathinfo($_SERVER['REQUEST_URI']);

echo $path_parts['filename'], "\n"; // depuis PHP 5.2.0

if ($path_parts['filename'] == "vitrine-programme")
{
    echo '<a href="vitrine-programme.php"class="lien lienpageactuel"><b>Programme</b></a>';
}
else 
{
    echo '<a href="vitrine-programme.php"class="lien "><b>Programme</b></a>' ;
}   
?>

<?php
$path_parts = pathinfo($_SERVER['REQUEST_URI']);

echo $path_parts['filename'], "\n"; // depuis PHP 5.2.0

if ($path_parts['filename'] == "vitrine-contacts")
{
    echo '<a href="vitrine-contacts.php" class="lien lienpageactuel"><b>Contacts</b></a>';
}
else 
{
    echo '<a href="vitrine-contacts.php" class="lien"><b>Contacts</b></a>' ;
}   
?>
</fieldset>



