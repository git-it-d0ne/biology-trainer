<?php 
	require_once "dbh-inc.php";
	require_once "header.php";
?>

	<div class="page-heading">
		<h2>Cell Structure</h2>
	</div>

	<div class="content-navigation">
		<ul>
			<a href="#alphabetized"><li>Alphabetized Vocabulary List</li></a>
			<a href="#random"><li>Random Order Vocabulary List</li></a>
			<a href="#flashcards" onclick="eraseFlashcardPrompt()"><li>Vocabulary Flashcards</li></a>
			<a href="#quiz"><li>Vocabulary Quiz</li></a>
		</ul>
	</div>


	<div class="content-container">
		<div class="content-heading">
				<h2 id="alphabetized">Alphabetical Order Vocabulary List</h2>
		</div>

		<div class="output-div">
			<?php
				$sql = "SELECT * FROM `cell-structure` ORDER BY `cell-structure`.`term` ASC";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {

					// output data from rows
					while($row = $result->fetch_assoc()) {
						echo '<p class="donkey">'.$row["term"].': '.$row["definition"].'.</p><br>';

					}
				}
			?>
		</div>
	</div>

	<br>

	<div class="content-container">
		<div class="content-heading">
				<h2 id="random">Random Order Vocabulary List</h2>
				<p>Refresh page for new order</p>
		</div>

		<div class="output-div">
			<?php
				$sql = "SELECT * FROM `cell-structure` ORDER BY RAND()";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {

					// output data from rows
					while($row = $result->fetch_assoc()) {
						echo '<p class="donkey">'.$row["term"].': '.$row["definition"].'.</p><br>';

					}
				}

			?>
		</div>
	</div>

	<br>

	<div class="content-container flashcard-container">
		<div class="content-heading-flashcard">
			<h2 id="flashcards">Vocabulary Flashcards</h2>
			<p>Move mouse over the cards to flip them.</p>
		</div>

		<div class="flip-card">
			<div class="flip-card-inner">
		    	<div class="flip-card-front">
		    		<p>Click Button for Flashcards ----></p>
		    		<?php 
						if (isset($_POST['newCard'])) {
							$sql = "SELECT * FROM `cell-structure` ORDER BY RAND() LIMIT 1";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {

								// output data from rows
								while($row = $result->fetch_assoc()) {
									echo '<p class="flash-term">'.$row["term"].'</p>';
									$definition = $row["definition"];
								}
							}
						}
					?>
		    	</div>
		    	<div class="flip-card-back">
		    		<p>Click Button for Flashcards ----></p>
		    		<?php 
						if (isset($_POST['newCard'])) {
							echo '<p class="flash-definition">'.$definition.'</p>';
						}

						$conn->close();
					?>
		    	</div>
		  	</div>
		</div>

		<form method="POST" class="card-button">
			<input type="submit" name="newCard" value="Click for New Flash Card"> 
		</form>

	</div>

	<br>

<!--
	<div class="content-container">
		<div class="content-heading">
				<h2 id="random">Vocabulary Quiz</h2>
		</div>

		<div class="output-div">

		</div>
	</div>
-->
	</body>
</html>
