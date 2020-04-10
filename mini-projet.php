<html>
    <head>
    
       <meta charset="utf-8">
       
        <link rel="stylesheet" href="mini-projet.css" media="screen" type="text/css" />
    </head>
    <body>
                <h2>Le plaisir de jouer</h2>          
        <div id="container">
           
            
            <form action="verification.php" method="POST">
         
                <h3>Login Form </h3>
                </br>
                </br>
                <!-- <label><b>Nom d'utilisateur</b></label> -->
                <div >
                <input class="InputLogin" type="text" placeholder="Login" name="Login" required>
            </div>  
                </br>
                </br>
               <!--  <label><b>Mot de passe</b></label> -->
                <input class="InputPassword" type="password" placeholder="Password" name="Password" required>
                </br>
                </br>
                <input class="submit" type="submit" value='Connexion' >
                <h4>S'inscrire pour jouer ?</h4>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>