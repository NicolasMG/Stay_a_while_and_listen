<?php
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
?>


<?php
     $reponse2 = $bdd->query('SELECT * FROM profil ORDER BY id DESC'); 
?>
        

            <!doctype html>
<html lang="fr">

	<head> 
		<meta charset="utf-8"/>
		<title>Craquette - Connexion</title>
		<link rel="stylesheet" href="bootstrap.css"/>
	</head>
	<body>
		<header> <!-- header = en tête page -->
            <p>
                <img src="Images/logo.jpg" alt="logo" title="Logo de Craquette" height=100px width=100px/>
            </p>
            <p>Craquette</p>
		</header>
		
		<section id="contenu"> <!-- Contenu principal de la page -->
	
            <h2>Inscription</h2>
				
                
            <form class="form-horizontal" method="post" action="traitement.php" >
             
                <div class="form-group">
					<label for="nom">
						Nom:
					</label>
					<input type="text" class="input-medium search-query" name="nom" placeholder= "Votre nom" />  
				</div>
                
                <div class="form-group">
					<label for="prenom">
						Prénom:
					</label>
					<input type="text" class="input-medium search-query" name="prenom" placeholder= "Votre prénom" />
                </div>
                
                <div class="form-group">
					<label for="mail">
						Mail:
					</label>
					<input type="email" class="input-medium search-query" class="form-control" name="mail" placeholder= "Votre email" />
				</div>
                
                  <div class="form-group">
					<label for="adresse">
						Adresse:
					</label>
					<input type="text" class="input-medium search-query" name="adresse" placeholder= "Votre adresse" />
                </div>
                
           
				<p>
                <label for="filiere">
						Filiere:
					</label>
				<select name="filiere">
					<option value="IR"> IR </option>
					<option value="AS"> AS </option>
                    <option value="TF"> TF</option>
                    <option value="Méca"> Méca </option>
                    <option vallue="Fip"> FIP</option>
                    <option value="enseignant"> enseignant</option>
                    <option value="autre"> autre</option>    
                    
				</select>
                </p>
                <p>
                    <label for="promo">
						Année d'etude:
					</label>
                    <select name="promo">
                        <option value="1A">1A</option>
                        <option value="2A">2A</option>
                        <option value="3A">3A</option>
                        <option value="sortie d'ecole"> sortie d'ecole</option>
                        <option value="autre"> autre</option>
                    </select>
                </p>
                
                
                
                <div class="form-group">
					<label for="datenaissance">
						Date de naissance:
					</label>
					<input type="date" class="input-medium search-query" name="datenaissance" placeholder= "jour/mois/année" />
				</div>
				
                
                <div class="form-group">
				    <label>
					 <a href='profil.php'><button type="submit" class="btn" name="inscription">Inscription</button></a>
					 <a href='inscription.php'><button type="reset" class="btn">Effacer</button></a>
				
                    </label>
                </div>
                <div class="form-group">
					<label for="bla">
						C'est fini 
					</label> 
				</div>
			</form>
            
                         
    
 <?php 

    include('footer.php'); 
?>