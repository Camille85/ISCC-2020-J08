<!DOCTYPE html> 
<html>
    <head>
    <title> Vitrine-Contacts</title>
    <link type="text/css" rel="stylesheet" href="vitrine.css">
    
    <meta charset="utf-8">
    </head>
    <body>
    
        
        <div class="contenu">
            <div id="accueil">
                <h2>Contacts</h2>
            </div>
    
        
        <form action="/ma-page-de-traitement" method="post" id="formulaire">
            <div>
                <label for="name"> </label>
                <input type="text" id="name" name="user_name" placeholder="Votre nom">
            </div>
            <div >
                <label for="mail"></label>
                <input type="email" id="mail" name="user_mail" placeholder="Votre e-mail">
            </div>
            <div >
                <label for="msg"></label>
                <textarea id="msg" name="user_message" placeholder="Comment améliorer mon site ?"></textarea>
            </div>
            <div >
                <button type="submit" id="button">Envoyer</button>
            </div>
        
        </form>
    
        
    </div>

    </body>
</html>