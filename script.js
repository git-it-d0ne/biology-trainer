/* Adding or Subtracting Nav Bars */
const toggleButton = document.getElementsByClassName('toggle-button')[0];
const navbarLinks = document.getElementsByClassName('navbar-links')[0];
const navbarLinks2 = document.getElementsByClassName('navbar-links')[1];
const navbarLinks3 = document.getElementsByClassName('navbar-links')[2];
//const navbarLinks4 = document.getElementsByClassName('navbar-links')[3];


toggleButton.addEventListener('click', () => {
	navbarLinks.classList.toggle('active');
	navbarLinks2.classList.toggle('active');
	navbarLinks3.classList.toggle('active');
	organicNavbarLinks.classList.toggle('active');
	//navbarLinks4.classList.toggle('active');
})

function eraseFlashcardPrompt() {
	console.log("donkey");
	document.getElementsByClassName("flash-card-lock")[0].style.display = "none";
};

