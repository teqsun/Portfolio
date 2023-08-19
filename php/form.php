<?php 
/*
if (isset($_POST['sendmail'])){
            
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
    
           header('Location: ./index.html');
            
        }

        */
        if (isset($_POST['submit'])){
$name = $_POST['name'];
$visitor_mail = $_POST['email'];
$message = $_POST['message'];

$email_from ='teqsun614@gmail.com';
$email_subject ="New form Submission";
$email_body = "User Name: $name.\n". 
                "User Email: $visitor_email.\n". 
                    "User Message: $message.\n";

            $to ="yohan.violes@gmail.com";

            $headers = "From : $email_from \r\n";
            $headers .="Reply-To: $visitor_email \r\n";

            mail($to,$email_subject,$email_body,$headers);



            header('Location: ../index.html');
        }
?>

     