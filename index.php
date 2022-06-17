<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wachtwoord Beheer</title>
    <link rel="icon" href="images/slotje.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <!-- <?php include 'functies/db_functions.php';
    
    $gebruiker = null;
    if (isset($_POST['login']))
    {
        $gebruiker = getUser($_POST['gebruikersnaam'], $_POST['wachtwoord']);
        // hier wordt de eigenaar gecheckt of hij toestemming heeft tot alle bestemmingen

        if($gebruiker != 'No user found') {

            // en dan wordt hij doorgestuurd naar de resultaten
            header("Location: paginas/voorpagina.php");
            exit;
        }
    }
    ?> -->
    <header>
        <nav>
            
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>Inloggen</h1>
            <form method="post">
                <table>
                    <tr>
                        <td><label for="username">Gebruikersnaam:</label></td>
                        <td><input type="text" name="gebruikersnaam" id="gebruikersnaam"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Wachtwoord:</label></td>
                        <td><input type="password" name="wachtwoord" id="wachtwoord" /><i class="bi bi-eye-slash" id="togglePassword"></i></td>
                    </tr> 
                </table>
                <p><button type="submit" nane="login" id="login" class="submit">Log in</button></p>  
                <!-- <p>Druk hier als je wilt <a href="<?php header("Location: paginas/registreren.php");?>">registreren</a></p>                            -->
            </form>
        </div>
    </main>
    <footer>
        <ul>
            <li>
                <img src="images/slotje.png" height="40" width="40" alt="Logo"><span> © 2022 JarnoG, Inc.</span>
            </li>
        </ul>
        <ul>
            <li>
                <a target="_blank" href="https://twitter.com/gombert_jarno"><i class="bi bi-twitter"></i></a>
            </li>
            <li>
                <a target="_blank" href="https://www.linkedin.com/in/jarno-gombert/"><i class="bi bi-linkedin"></i></a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/jarno_gombert/"><i class="bi bi-instagram"></i></a>
            </li>
            <li>
                <a target="_blank" href="https://github.com/JarnoGombert"><i class="bi bi-github"></i></a>
            </li>
        </ul>
    </footer> 
    
    <script src="js/script.js"></script>
</body>
</html>