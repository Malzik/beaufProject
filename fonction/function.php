<?php
if(!isset($_SESSION['connected']))
	{
		$_SESSION['connected'] = 1;
	}
function headerNav()
{
	if($_SESSION['connected'] == 1)
	{
		return 
			'<nav class="navbarColor">
				<div class="rows"><a href="index.php">Menu</a></div>
				<div class="rows">Logo</div>  	
				<div class="rows"><a href="collab.php">Collab</a></div>
			</nav>';
	}
	else if ($_SESSION['connected'] == 0)
	{
		return 
			'<nav class="navbarColor">
				<div class="rows"><a href="index.php">Menu</a></div>
				<div class="rows">Logo</div>  	
				<div class="rows" id="myBtn">Se connecter</div>
				<!-- The Modal -->
				<div id="myModal" class="modal">
				  	<!-- Modal content -->
					  	<form class="modal-content animate" action="/action_page.php">
					    <div class="imgcontainer">
					      <span onclick="document.getElementById(id01).style.display=none" class="close" title="Close Modal">&times;</span>
					    </div>

					    <div class="container">
					      <label for="uname"><b>Username</b></label>
					      <input type="text" placeholder="Enter Username" name="uname" required>

					      <label for="psw"><b>Password</b></label>
					      <input type="password" placeholder="Enter Password" name="psw" required>
					        
					      <button type="submit">Login</button>
					      <label>
					        <input type="checkbox" checked="checked" name="remember"> Remember me
					      </label>
					    </div>

					    <div class="container" style="background-color:#f1f1f1">
					      <button type="button" onclick="document.getElementById(id01).style.display=none" class="cancelbtn">Cancel</button>
					      <span class="psw">Forgot <a href="#">password?</a></span>
					    </div>
					  </form>
				</div>
			</nav>';
	}
}
?>