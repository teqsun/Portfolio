<?php if (isset($_POST['sendmail'])){
            
            $lastName = htmlspecialchars($_POST['lastname']);
            $firstName = htmlspecialchars($_POST['firstname']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $msg = htmlspecialchars($_POST['message']);
            
             $to      = 'yohan.violes@gmail.com';
            $subject = $subject;
            $message = "$msg + $email + $lastName + $firstName" ;
            
            
            if(mail($to, $subject, $message)) {
                $message = "Votre message à bien été envoyé, à bientôt !";
                return $message;
            }
            else {
                $message = "Oups, une erreur est survenue lors de l'envoie de votre message, n'hésitez pas à me contacter par mail";
                return $message;
            }
    
           // header('Location: https://agathe-plunian.com/');
            
        }
        ?>

     