<!doctype html>
<html lang="fr">

<head>


    <title>Yohan Violes portfolio</title>
    <meta charset="utf-8" />

    <link rel="icon" type="image/png" sizes="19x19" href="img/nav/yvphotoprofil.png">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d442715d54.js" crossorigin="anonymous"></script>
    <!--OG data-->
    <meta property="og:site_name" content="Yohan Violes portfolio" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:title" content="Yohan Violes portfolio" />
    <meta property="og:description" content="Portfolio développeur front-end et graphiste" />
    <meta property="og:image" content="" />
</head>

<body>
    <header>

    </header>
    <nav class="flex-nav">
        <div class="main-nav large-nav-menu">
            <div class="logo-container"><img class="b-radius" src="img/nav/yvphotoprofil.png"></div>
            <div>
                <ul class="nav-lien">
                    <li id="nav-a-propos" class="nav-format">À propos</li>

                    <li id="nav-travaux" class="nav-format">Mes travaux</li>
                    <li id="nav-competences" class="nav-format">Mes compétences</li>
                    <li id="nav-contact" class="nav-format">Contact</li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="format-banner ">
        <div id="bandeau_horizontal">
        </div>

    </div>
    <section class="a-propos">
        <div>
            <h2>À propos</h2>
            <div>
                <p>bloque de texte a compléter</p>
                <p>bloque de texte a compléter</p>
            </div>
            <img src="img/banniere/yv_small.png" class="small-profil" alt="">
            <div class="bloc-media">
                <a class="media-format" href="https://github.com/teqsun">
                    <i class="fa-brands fa-github  media-github icone-format"></i>

                </a>
                <a class="media-format" href="https://www.linkedin.com/in/yohan-violes/">
                    <i class="fa-brands fa-linkedin-in media-linkedin icone-format"></i>

                </a>


            </div>
        </div>
    </section>
    <section class="mes-travaux"></section>


    <section class="mes-competences">
        <div class="bloc-skill">
            <h2 class="title-skill">Mes compétences</h2>
            <div class="wrap">
                <div class="skill-format-box">
                    <div class="card-service">
                        <div class="rond-card-service card-rond-webdev">
                            <i class="fa-solid fa-desktop fa-2x icone-skill-color"></i>
                        </div>
                        <h3 class="title-card-service">Web développement</h3>
                        <p class="p-margin-bottom">Développement d'applications web front-end, sites vitrines</p>
                        <p class="title-card-rond">Langages utilisés</p>
                        <ul class="list-skills">
                            <li class="items-skill">HTML</li>
                            <li class="items-skill">CSS</li>
                            <li class="items-skill">SASS</li>
                            <li class="items-skill">Javascript</li>
                            <li class="items-skill">PHP</li>
                        </ul>
                    </div>
                </div>

                <div class="skill-format-box">
                    <div class="card-service">
                        <div class="rond-card-service rond-illuskill">
                            <i class="fa-regular fa-pen-to-square fa-2x icone-skill-color"></i>
                        </div>
                        <h3 class="title-card-service">Illustration & Game design</h3>
                        <p class="p-margin-bottom">Développement d'applications web front-end, sites vitrines</p>
                        <p class="title-card-rond">Outils utilisés</p>
                        <ul class="list-skills">
                            <li class="items-skill">Illustrator</li>
                            <li class="items-skill">InDseign</li>
                            <li class="items-skill">After effect</li>
                            <li class="items-skill">Photoshop</li>
                            <li class="items-skill">Cinéma 4D</li>
                            <li class="items-skill">Audition</li>
                            <li class="items-skill">Unity</li>
                        </ul>
                    </div>
                </div>

                <div class="skill-format-box">
                    <div class="card-service">
                        <div class="rond-softskill rond-card-service ">
                            <i class="fa-solid fa-people-carry-box fa-2x icone-skill-color"></i>
                        </div>
                        <h3 class="title-card-service">soft skills</h3>
                        <p class="p-margin-bottom">Développement d'applications web front-end, sites vitrines</p>
                        <p class="title-card-rond">Compétences maitrisées</p>
                        <ul class="list-skills">
                            <li class="items-skill">Gestion d'équipe</li>
                            <li class="items-skill">polyvalent</li>
                            <li class="items-skill">assidu</li>
                            <li class="items-skill">curieux</li>
                            <li class="items-skill">PHP</li>
                        </ul>
                    </div>
                </div>

            </div>
            <a href="img/cv/cv_Yv.webp" download="cv_Yv" class="btn-cv margin-btn-cv">Mon CV ici</a>
    </section>



    <section class="contact">


        <?php if (($_SERVER["REQUEST_METHOD"] == "POST")) {

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $lastName = htmlspecialchars($_POST['lastname']);
            $firstName = htmlspecialchars($_POST['firstname']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $msg = htmlspecialchars($_POST['message']);

            $to      = 'yohan.violes@gmail.com';
            $subject = $subject;
            $message = "<html><p>Message : $msg </p><p>Email : $email</p><p>Nom: $lastName $firstName</p></html>";

            $successMessage = "Message bien envoyé, vous aurez bientot une réponse, merci de patienter !";
            $failureMessage = "Hello, on dirait que votre message n'a pas réussit à aboutir, veuillez retentez votre chance";

            if (mail($to, $subject, $message, $headers)) {
                echo '<div class="message-success"><p>' . $successMessage . '</p></div>';
            } else {
                echo '<div class="message-failure"><p class="message-failure">' . $failureMessage . '</p></div>';
            }
        }
        ?>

        <div>
            <form class="formulaire" action="#contact" method="post" id="form" name="sendmail" onsubmit="return validate(event);">

                <div class="names-input">
                    <div class="form-input form-lastname  formData">
                        <label>Nom</label>
                        <input class="text-control" type="text" id="lastname" name="lastname" placeholder="Nom">
                    </div>
                    <div class="form-input form-firstname formData">
                        <label>Prénom</label>
                        <input class="text-control" type="text" id="firstname" name="firstname" placeholder="Prénom">
                    </div>
                </div>

                <div class="form-input formData">
                    <label>Email</label>
                    <input class="text-control" type="text" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-input formData">
                    <label>Sujet</label>
                    <input class="text-control" type="text" id="subject" name="subject" placeholder="Sujet">
                </div>
                <div class="form-input formData">
                    <label>Votre message</label>
                    <textarea class="message text-control" id="message" name="message" placeholder="Votre message"></textarea>
                </div>

                <button id="submit-message-form" name="sendmail" value="sendmail" class="submit-message" type="submit">Envoyer mon message</button>
            </form>
        </div>
    </section>


    <footer class="footer-format">
        <div class="bloc-footer">
            <div class="bloc-media">
                <a class="media-format" href="https://github.com/teqsun">
                    <i class="fa-brands fa-github  media-github icone-format"></i>

                </a>
                <a class="media-format" href="https://www.linkedin.com/in/yohan-violes/">
                    <i class="fa-brands fa-linkedin-in media-linkedin icone-format"></i>

                </a>


            </div>
        </div>

    </footer>
    <script src="js/index.js"></script>
</body>

</html>