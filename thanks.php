<?php

$errors= [] ;

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    if(empty($_POST['user_name']) || trim($_POST['user_name']) === '' ){
        $errors[] = "le nom d'utilisateur est obligatoire !";
    }  

    if (empty($_POST['user_firstname']) || trim($_POST['user_firstname']) === '') {
        $errors[] = "le  prénom de l'utilisateur est obligatoire !";
    } 
    if (empty($_POST['user_email']) || trim($_POST['user_email']) === '') {
        $errors[] = "l'email est obligatoire !";
    }
    if (empty($_POST['phone'])|| trim($_POST['phone']) === '' ) {
        $errors[] = "le numéro de téléphone est obligatoire !";
    } 
    if (empty($_POST['theme']) ) {
        $errors[] = "le sujet est obligatoire";
    }  
    if (empty($_POST['user_message']) || trim($_POST['user_message']) === '') {
        $errors[] = "Le message est obligatoire !";
    }
    if (count($errors) > 0)
     {
         foreach ($errors as $error) {
           echo "<p style ='text-align:center; color:red;'>$error</p>";
            
        }

        
    }
    
    
    if (empty($errors)) {
        $lastname = htmlspecialchars($_POST['user_name']);
        $firstname = htmlspecialchars($_POST['user_firstname']);
        $email = filter_var(($_POST['user_email']), FILTER_VALIDATE_EMAIL);
        $phone = htmlspecialchars($_POST['phone']);
        $sujet= $_POST['theme'];
        $message = htmlspecialchars($_POST['user_message']);
    
        echo '<p style ="text-align:center;">Merci ' ."<strong>$firstname</strong>".' '."<strong>$lastname</strong>".' '.'de nous avoir contacté à propos de '.'"'.$sujet.'"<br></p>';
        echo "<p style ='text-align:center;'>Un de nos conseiller vous contactera soit à l’adresse <strong>$email</strong> ou par téléphone au <strong>$phone</strong> 
        dans les plus<br>brefs délais pour traiter votre demande :<br><br>
        $message</p>";
    }
}
        
        

    







   
    
