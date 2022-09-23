<?php 
    session_start(); 
    if (isset($_POST['prenom']) AND isset($_POST['nom'])AND isset($_POST['sexe']) AND isset($_POST['mail']))
       {
       $_SESSION['prenom'] = $_POST['prenom'];
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['sexe'] = $_POST['sexe'];
        $_SESSION['mail'] = $_POST['mail'];
       }
        if (isset($_GET['deconnexion']))
         {  
             session_destroy(); 
             
        }
        ?>


<!DOCTYPEE html>
<html>
<head>
    <title> J'ai de la valeur! </title>
    <meta charset="UTF-8" />
    <style>
    html 
    {
        text-align: center;
    }
    strong 
    {
        color: red;
    }
    header 
    {
        color: red;
    }
    h2 
    {
        font-size: 12px;
    }
    a 
    {
        color: red;
    }
    section 
    {
        background-color: rgba(255, 0, 0, 0.2);
			border-radius: 10px;
           
    }
    q 
    {
        color: red;
    }
    footer 
    {
        background-color: rgba(255, 0, 0, 0.5);
        width: 50%;
			border-radius: 10px;
            text-align: left;
            
    }
    input[type="submit"]
    {
        color: white;
        background-color: red;
    }

    </style>
</head>
<body>
<header>
    <h1>J'ai de la valeur!</h1>
    <h2>
    <?php
                $jour = date('d');
                $mois = date('m');
                $annee = date('Y');
                $heure = date('H');
                $minute = date('i');
                echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute  .' (T.U.) <br />';
             ?>
    </h2>
    </header>
        <section>
            <?php
            
               if (isset($_SESSION['sexe']) AND $_SESSION['sexe'] != NULL)
                    {echo 'Felicitations '. $_SESSION['sexe'] . " " . $_SESSION['prenom'] . " ". $_SESSION['nom'] .' ! <br /> Votre adresse mail a été verifiée avec succèes et trouvée valide! <br /> Nous vous y tiendrons donc au courant de toutes nos nouvelles améliorations. <br /> Pour l\'instant, nous vous laissons decouvrir le resultat de votre test; A plus!<br /><br />';}
                    else
                    {echo 'Felicitations ' . $_SESSION['prenom'] . " ". $_SESSION['nom'] .' ! <br /> Votre adresse mail a été verifiée avec succèes et trouvée valide! <br /> Nous vous y tiendrons donc au courant de toutes nos nouvelles améliorations. <br /> Pour l\'instant, nous vous laissons decouvrir le resultat de votre test; A plus!<br /><br />';}
                    
                    if (preg_match("#[aeiou]#i", $_SESSION['prenom']))
                        {
                    if (preg_match("#a#i", $_SESSION['prenom']))
            {
                echo 'Vous avez un prénom <strong>A</strong>ngélique. <br />';
            }
            if (preg_match("#e#i", $_SESSION['prenom']))
            {
                echo 'Vous êtes une <strong>E</strong>toile. <br />';
            }
            if (preg_match("#i#i", $_SESSION['prenom']))
            {
                echo 'Vous êtes né(e) pour <strong>I</strong>lluminner. <br />';
            }
            if (preg_match("#o#i", $_SESSION['prenom']))
            {
                echo 'Vous menez une vie en <strong>O</strong>r. <br />';
            }
            if (preg_match("#u#i", $_SESSION['prenom']))
            {
                echo 'Vous êtes quelqu\'un d\'<strong>U</strong>tile! <br /><br />';
            }
            }
            else
            {
            echo 'Vous n\'avez qu\'à changer de prénom; c\'est mieux!  <br />';
             }
             echo '<br /> Commentaire: <q> '. $_POST['comment'] . ' </q><br />';
             echo    '<footer>
             <form method="POST" action="result.php">
             <p>
                <label for="comme">Laissez votre commentaire: </label>
                <input id="comme" name="comment" type="text" />
                <input type="submit" value="Soumettre" /><br />
                </p>
                </form>
                <br />
                </footer>
             Veuillez cliuquer <a href="index.php?deconnexion=1">ici</a> pour retourner à la page d\'accueil.';
            
            
            ?>
            </section>
            
            </body>
            </html>