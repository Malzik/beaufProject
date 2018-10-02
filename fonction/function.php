<?php
function headerNav()
{
	if($_SESSION['connected'] == 1)
	{
		return 
			'<nav class="navbarColor">
				<div class="rows">Go to un peu plus bas</div>
				<div class="rows">Logo</div>  	
				<div class="rows">Connecté en temps que Nao (PP)</div>
			</nav>';
	}
	else if ($_SESSION['connected'] == 0)
	{
		return 
			'<nav class="navbarColor">
				<div class="rows">Go to un peu plus bas</div>
				<div class="rows">Logo</div>  	
				<div class="rows" id="myBtn">Se connecter</div>

				<!-- The Modal -->
				<div id="myModal" class="modal">

				  <!-- Modal content -->
				  <div class="modal-content">
				    <span class="close">&times;</span>
				    <div id="modalFlex">
				    	<div class="divModalFlex" id="modalSignUp" onclick=switchfocus("signup")>Connexion</div>
				    	<div class="divModalFlex" id="modalRegister" onclick=switchfocus("register")>Inscription</div>
				    </div>
				  </div>

				</div>
			</nav>';
	}
}
?>