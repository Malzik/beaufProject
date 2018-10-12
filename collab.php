<!DOCTYPE html>
<html>
<head>
	<title>Collab</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="style/img/f1.png" />
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<link rel="stylesheet" type="text/css" href="style/css/collab.css">
</head>
<body>
<?php
	include 'fonction/function.php';
		echo headerNav(); 
	?>
	<div id="centerDiv">
		FAIRE UN MODAL POUR AFFICHER CA
		<div class="row">
	  		<div class="column" style="background-color:#aaa;">
	    	<h2>Inscrire</h2>
		    <label>
		    	Nom : <input type="text" name="name" id="name">
		    </label>
		    <label>
		    	Ecole : <select name="ecole" id="ecole">
	                    <option value="0" selected>-- --</option>
	                    <option value="1" >EPSI (lol)</option>
	                    <option value="2" >Sup de Com</option>
	                    <option value="3" >Ifag</option>
	                    <option value="4" >Idrac</option>
	                    <option value="5" >Wis</option>
	                </select>
		    </label>
		    <label>
		    	Classe : <select name="classe" id="classe">
	                    <option value="0" selected>-- --</option>
	                    <option value="1" >B1</option>
	                    <option value="2" >B2</option>
	                    <option value="3" >B3</option>
	                    <option value="4" >I4</option>
	                    <option value="5" >I5</option>
	                </select>
		    </label>	
		    <label id="space">
		    	Description : <textarea style="resize: none;"></textarea>
		    </label>
		    <label>
		    	Photo : <input type="file" accept=".jpg, .jpeg, .png" name="photo" id="photo">
		    </label>
		    <input type="submit" name="Envoyez">
	  	</div>
		 <div class="column" style="background-color:#bbb;">
			<h2>Column 2</h2>
		    <div class="card">
			    <img src="style/img/f1.png" alt="Avatar" class="imgprofil">
			 	<div class="container">
				    <h4>Dams Dick</h4> 
				</div>
			</div>
			<div class="card">
			    <img src="style/img/f1.png" alt="Avatar" class="imgprofil">
			 	<div class="container">
				    <h4>Dams Dick</h4> 
				</div>
			</div>
			<div class="card">
			    <img src="style/img/f1.png" alt="Avatar" class="imgprofil">
			 	<div class="container">
				    <h4>Dams Dick</h4> 
				</div>
			</div>
			<div class="card">
			    <img src="style/img/f1.png" alt="Avatar" class="imgprofil">
			 	<div class="container">
				    <h4>Dams Dick</h4> 
				</div>
			</div>
		  </div>
		  <div class="column" style="background-color:#ccc;">
		    <h2>Column 3</h2>
		    <p>Some text..</p>
		  </div>
	</div>
</div>
</body>
</html>