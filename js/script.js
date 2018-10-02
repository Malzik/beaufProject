// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var register = document.getElementById("modalRegister");
var signup = document.getElementById("modalSignUp");
// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function switchfocus(focus) {
	if (focus == "signup") {
		signup.style.boxShadow  = "4px 2px 10px 3px rgba(0,0,0,0.32)";
		register.style.boxShadow = "inset 4px 2px 10px 3px rgba(0,0,0,0.32)";
	}
	else if (focus == "register") {
		signup.style.boxShadow  = "inset 4px 2px 10px 3px rgba(0,0,0,0.32)";
		register.style.boxShadow = "4px 2px 10px 3px rgba(0,0,0,0.32)";
	}
}