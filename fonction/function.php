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
				<div class="rows">Se connecter</div>
			</nav>';
	}
}
?>