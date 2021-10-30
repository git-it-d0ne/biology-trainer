<?php
	header('Content-type: text.css; charset:UTF-8');
?>

body {
	background-color: opal;
}

.toggle-button {
	position: absolute;
	top: .75rem;
	right: 1rem;
	display: inline-block;
	flex-direction: column;
	justify-content: space-between;
	width: 30px;
	height:  21px;
}

.toggle-button .bar {
	height: 3px;
	width: 100%;
	background-color: whitesmoke;
	border-radius: 10px;
}


.logo {
	width: 10%;
	height: 10em;
}

.site-heading {
	display: flex;
	align-items: center;
	flex-basis:  100%;
	background: linear-gradient(#9297C4, #3D315B);
	height: 10%;
	margin-bottom: 0;
	justify-content: center;
	font-size: 1.5em;

}

.page-heading {
	display: flex;
	justify-content: center;
	width: 100%;
	background: linear-gradient(#94FBAB, #A9FFF7);
	height: 3.5em;
}

.page-heading h2 {
	position: relative;
	bottom: .5em;
	font-size: 2em;
}


.navbar {
	display: flex;
	position: relative;
	justify-content: center;
	align-items: center;
	background: linear-gradient(#75DDDD, #2364AA);
	color: white;
	height: auto;
}

.navbar-links {
    height: 100%;
    display: flex;
    align-items: center;
    width: auto;
}


.navbar-links ul {
	display: flex;
	margin: 0;
	padding: 0;
}

.navbar-links li {
	list-style: none;
	border: .5px solid black;
	margin-left: .5em;
	margin-right: .5em;
} 


.navbar-links li a {
    display: block;
    text-decoration: none;
    color: black;
    padding: 1rem;
    background-color: ivory;
}


.navbar-links li a:hover {
	color: blue;
}

.navbar-links li:hover {
	background-color: blue;
}


.navbar-links-donate {
    height: 100%;
    display: flex;
    align-items: center;
    width: auto;
}


.navbar-links-donate ul {
	display: flex;
	margin: 0;
	padding: 0;
}

.navbar-links-donate li {
	list-style: none;
	border: .5px solid black;
	margin-left: .5em;
	margin-right: .5em;
} 


.navbar-links-donate li a {
    display: block;
    text-decoration: none;
    color: black;
    padding: 1rem;
    background-color: gold;
}


.navbar-links-donate li a:hover {
	color: blue;
}

.navbar-links-donate li:hover {
	background-color: blue;
}

.index-content {
	line-height: 2em;
	width: 75%;
	position: relative;
	left: 10%;
	font-size: 1.2em;
}

.content-container {
	display: flex;
	border: 2px solid black;
	display: flex;
	justify-content: space-around;
	width: 75%;
	height: auto;
	background-color: opal;
	position: relative;
	top: 1em;
	left: 18%;
}

.flashcard-container {
	width: 75%;
	display: flex;
	justify-content: space-evenly;
	left: 18%;
	margin-top: 2em;
}

.donation-content-container {
	display: flex;
	border: 2px solid black;
	display: flex;
	justify-content: space-around;
	width: 75%;
	height: auto;
	background-color: opal;
	position: relative;
	top: 1em;
	left: 12%;
}

.content-navigation {
	border: 2px solid black;
	background-color: #75DDDD;
	width: 17%;
	height: auto;
	position: fixed;
	margin-top: 1em;
	display: flex
}

.content-navigation ul {
	list-style-type: none;
	left: -1em;
}


.content-navigation ul li {
	margin-bottom: 1em;
	color: darkred;
}

.content-navigation ul li:hover {
	text-decoration: underline;
	color: red;
	cursor: pointer;
	font-size: 1.2em;
}


.content-heading {
	background: linear-gradient(#9297C4, #3D315B);
}

.content-heading h2 {
	text-align: center;
}

.content-heading p {
	text-align: center;
	color: white;
}

.content-heading-flashcard {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	text-align: center;
	background: linear-gradient(#9297C4, #3D315B);
	position: relative;
	width: 20%;
	position: relative;
	right: 2.3em;


}


.output-div {
	background-color: opal;
	padding: 1em;
}

.output-div p {
	font-family: Merriweather;
	font-size: 1.1em;
}


#no-term {
	color: green;
}

.paypal {
	background: linear-gradient(#94FBAB, #A9FFF7);
	margin-top: 1em;
	margin-bottom: 1em;
	height: auto;
}

.donate-paragraph {
	color: black;
	font-size: 1em;
	position: relative
	right: 5em;
}

.donation-text-content {
	width: 50%;
	background-color: ivory;
	font-size: 1.2em;
	line-height: 2em;
}

.donkey {
	color: dimgray;
}

.flash-term {
	color: black;
	font-size: 1.2em;
	text-decoration: underline;
}

.flash-definition {
	color: black;
	font-size: 1.2em;
}


/* Flashcard styling */
 /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-card {
  background-color: transparent;
  width: 50%;
  height: 10em;
  border: 1px solid black;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background: linear-gradient(#94FBAB, #A9FFF7);
  color: black;
}

/* Style the back side */
.flip-card-back {
	background-color: #75DDDD;
  color: black;
  transform: rotateY(180deg);
} 

.card-button {
	margin-top: 4em;
}

.flash-card-lock {
	display: flex;
	position: relative;
	width: 10%;
	bottom: 1em;
	left: 3em;
	margin-top: 2em;
}

/*i-Phone X/XS IOS 12 */
@media only screen
	and (max-device-width: 375px) {

		.navbar-links li a {
			font-size: 1.5em;
			text-align: center;
		}

		.navbar-links-donate li a {
				font-size: 1.5em;
				text-align: center;
		}

		.content-navigation ul li {
				font-size: 1.7em;
				text-align: center;
				margin-left: -1.2em;
		}


		.content-heading h2 {
			font-size: 1.7em;
			padding: .3em;
		}

		.content-container {

		}

		.donation-content-container {
			position: relative;
			top: 3em;
			font-size: 1.2em;
		}

		.output-div p {
				font-family: Merriweather;
				font-size: 1.8em;
				line-height: 1.3em;
			}

		.flash-term {
			color: black;
			font-size: 1.5em;
			text-decoration: underline;
		}

		.flash-definition {
			color: black;
			font-size: 1.5em;
		}

		.content-heading-flashcard {
			right: 0em;
			margin-right: 0em;
		}

		.content-heading-flashcard p {
			font-size: 1.2em;
			text-align: center;
		}

		.flip-card {
			display: flex;
		}

		.flip-card-front {
			font-size: 1.2em;
		}

		.flip-card-back {
			font-size: 1.2em;
			height:  auto;
		}

		#flashcards {
			text-align: center;
			color: lightblue;
		}
		.flip-card:hover, .flip-card:active .flip-card-inner {
		  transform: rotateY(180deg);
		}


	}

/* i-Phone 6, 6s, 7, and 8 Plus IOS 11 Media Query */
@media only screen
	and (device-width:  414px)
	and (device-height:  736px) {

		.navbar-links li a {
			font-size: 1.5em;
			text-align: center;
		}

		.navbar-links-donate li a {
				font-size: 1.5em;
				text-align: center;
		}

		.content-navigation {
			display: flex;
			justify-content: center;
			width: 100%;
			margin-bottom: 1em;
			flex-direction: row;
			position: absolute;
			z-index: 1;

		}

		.content-navigation ul li {
				font-size: 1.5em;
				text-align: center;
				margin-left: -1.2em;
		}

		.content-heading h2 {
			font-size: 1.5em;
			padding: .3em;
		}

		.content-container {
			top: 17em;
			width: 100%;
			left:  0em;
		}

		.donation-content-container {
			position: relative;
			top: 3em;
			font-size: 1.2em;
		}

		.output-div p {
				font-family: Merriweather;
				font-size: 1.5em;
				line-height: 1.3em;
			}

		.content-heading-flashcard {
			right: 0em;
			margin-right: 0em;
		}

		.content-heading-flashcard p {
			font-size: 1.2em;
			text-align: center;
		}

		.flip-card {
			display: flex;
		}

		.flip-card-front {
			font-size: 1.2em;
		}

		.flip-card-back {
			font-size: 1.2em;
		}

		#flashcards {
			text-align: center;
			color: lightblue;
		}

		.card-button input {
			width: 12em;
			height: 2em;
			margin-right: 1em;
		}

		.flip-card:hover, .flip-card:active .flip-card-inner {
		  transform: rotateY(180deg);
		}

		.flash-term {
			font-size: 1.5em;
		}

		.flash-definition {
			font-size: 1.5em;
		}

}	
