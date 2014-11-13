<!DOCTYPE html>

<?php 
	include('cls/Resume.php'); 
	$oResume = new Resume();
?>

<html lang="en" >
	<head>
		<title>Resume - PHP Version</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/resume.css" />
	</head>
	<body>
		<!-- begin resume -->

		<header id="site-header">
			<div id="logo">Steven Chin's Resume</div>

			<nav>
				<a href="index.html">HOME</a>
				<a href="contactme.html">CONTACT ME</a>
			</nav>
		</header>

		<div id="page">

			<!-- -->
			<div class="resume-section resume-header">
				<h1><?php echo $oResume->Name; ?></h1>
				<label id="resume-address"><?php echo $oResume->Street . " " . $oResume->City . " " . $oResume->State . " " . $oResume->Zip; ?></label>
				<label id="resume-contact">
					<label><?php echo $oResume->Phone; ?></label>
					<?php echo $oResume->Email . " " . $oResume->LinkedIn; ?>
				</label>
			</div>

			<!-- -->
			<div class="resume-section summary">
				<h2>SUMMARY</h2>
				<?php echo $oResume->Summary; ?>
			</div>

			<!-- -->
			<div class="resume-section resume-body">
				<div class="resume-section employment">
					<h2>EMPLOYMENT</h2>
					
					<!-- Lopez Employment -->
					<?php 
						echo "<h3>". $oResume->LopezNegrete->Name . " -- " . $oResume->LopezNegrete->Years . "</h3>";
						echo "<h4>" . $oResume->LopezNegrete->Titles[0] . "</h4>";

						echo "<ul>";
						foreach ($oResume->LopezNegrete->Duties as $Duty) {
							echo "<li>". $Duty ."</li>";
						}//end foreach
						echo "</ul>";
					?>


					<!-- Gibney Employment -->
					<?php
						echo "<h3>" .$oResume->GibneyAnthony->Name." -- ".$oResume->GibneyAnthony->Years. "</h3>";

						for($i=0; $i<count($oResume->GibneyAnthony->Titles); $i++) {
							echo "<h4>" . $oResume->GibneyAnthony->Titles[$i] . "</h4>";
							echo "<ul>";
							for($y=0; $y<count($oResume->GibneyAnthony->Duties[$i]); $y++) {
								echo "<li>" . $oResume->GibneyAnthony->Duties[$i][$y] . "</li>";	
							}
							echo "</ul>";
						}

					?>

					<!-- Computer Point -->
					<?php 
						echo "<h3>". $oResume->ComputerPoint->Name . " -- " . $oResume->ComputerPoint->Years . "</h3>";
						echo "<h4>" . $oResume->ComputerPoint->Titles[0] . "</h4>";

						echo "<ul>";
						foreach ($oResume->ComputerPoint->Duties as $Duty) {
							echo "<li>". $Duty ."</li>";
						}//end foreach
						echo "</ul>";
					?>
				</div>

				<!-- -->
				<div class="resume-section education">
					<h2>EDUCATION</h2>

					<!-- kaplan -->
					<?php 
						
						echo "<h3>" . $oResume->Kaplan->Name . " -- " . $oResume->Kaplan->Location . "</h3>";
						echo "<h4 class='degree'>" .$oResume->Kaplan->Degree . " <br />" . $oResume->Kaplan->Achievements . "</h4>";

						echo "<table>";
						echo "<thead><tr><th>RELEVANT COURSEWORK - KAPLAN</th></tr></thead>";
						echo "<tbody>";

						echo "<tr>";
						for($i=0; $i<count($oResume->Kaplan->Courses); $i++) {
							if ($i % 3 == 2) {
								echo "<td>" . $oResume->Kaplan->Courses[$i] . "</td></tr>" ;
							} else {
								echo "<td>" . $oResume->Kaplan->Courses[$i] . "</td>" ;
							}
						}

						echo "</tbody>";
						echo "</table>";
					?>

					<!-- Tci -->
					<?php

						echo "<h3>" . $oResume->Tci->Name . " -- " . $oResume->Tci->Location . "</h3>";
						echo "<h4 class='degree'>" .$oResume->Tci->Degree . " <br />" . $oResume->Tci->Achievements . "</h4>";

						echo "<table>";
						echo "<thead><tr><th>RELEVANT COURSEWORK - TCI</th></tr></thead>";
						echo "<tbody>";

						echo "<tr>";
						for($i=0; $i<count($oResume->Tci->Courses); $i++) {
							if ($i % 3 == 2) {
								echo "<td>" . $oResume->Tci->Courses[$i] . "</td></tr>" ;
							} else {
								echo "<td>" . $oResume->Tci->Courses[$i] . "</td>" ;
							}
						}

						echo "</tbody>";
						echo "</table>";


					?>
				</div>

				<!-- -->
				<div class="resume-section skills">
					<h2>SKILLS</h2>
					<!-- Pro langs -->
					<?php
						echo "<table>";
						echo "<thead><tr><th>".$oResume->ProgrammingLangs->Subject."</th></tr></thead>";
						echo "<tbody>";

						echo "<tr>";
						for($i=0; $i<count($oResume->ProgrammingLangs->Abilities); $i++) {
							if($i % 3 == 2) {
								echo "<td>" .$oResume->ProgrammingLangs->Abilities[$i] . "</td></tr>";
							}else {
								echo "<td>" .$oResume->ProgrammingLangs->Abilities[$i] . "</td>";
							}
						}

						echo "</tbody>";
						echo "</table>";						
					?>

					<!-- Networking Technologies -->
					<?php
						echo "<table>";
						echo "<thead><tr><th>".$oResume->NetworkingTechs->Subject."</th></tr></thead>";
						echo "<tbody>";

						echo "<tr>";
						for($i=0; $i<count($oResume->NetworkingTechs->Abilities); $i++) {
							if($i % 3 == 2) {
								echo "<td>" .$oResume->NetworkingTechs->Abilities[$i] . "</td></tr>";
							}else {
								echo "<td>" .$oResume->NetworkingTechs->Abilities[$i] . "</td>";
							}
						}

						echo "</tbody>";
						echo "</table>";						
					?>					

					<!-- Software -->
					<?php
						echo "<table>";
						echo "<thead><tr><th>".$oResume->Software->Subject."</th></tr></thead>";
						echo "<tbody>";

						echo "<tr>";
						for($i=0; $i<count($oResume->Software->Abilities); $i++) {
							if($i % 3 == 2) {
								echo "<td>" .$oResume->Software->Abilities[$i] . "</td></tr>";
							}else {
								echo "<td>" .$oResume->Software->Abilities[$i] . "</td>";
							}
						}

						echo "</tbody>";
						echo "</table>";						
					?>

					<!-- Hardware -->
					<?php
						echo "<table>";
						echo "<thead><tr><th>".$oResume->Hardware->Subject."</th></tr></thead>";
						echo "<tbody>";

						echo "<tr>";
						for($i=0; $i<count($oResume->Hardware->Abilities); $i++) {
							if($i % 3 == 2) {
								echo "<td>" .$oResume->Hardware->Abilities[$i] . "</td></tr>";
							}else {
								echo "<td>" .$oResume->Hardware->Abilities[$i] . "</td>";
							}
						}

						echo "</tbody>";
						echo "</table>";						
					?>

					<!-- Platforms -->
					<?php
						echo "<table>";
						echo "<thead><tr><th>".$oResume->Platforms->Subject."</th></tr></thead>";
						echo "<tbody>";

						echo "<tr>";
						for($i=0; $i<count($oResume->Platforms->Abilities); $i++) {
							if($i % 3 == 2) {
								echo "<td>" .$oResume->Platforms->Abilities[$i] . "</td></tr>";
							}else {
								echo "<td>" .$oResume->Platforms->Abilities[$i] . "</td>";
							}
						}

						echo "</tbody>";
						echo "</table>";						
					?>

				</div>

				<!-- -->
				<div class="resume-section certifications">
					<h2>CERTIFICATIONS</h2>
					<?php 
						echo "<ul>";
						for($i=0; $i<count($oResume->Certifications); $i++) {
							echo "<li>" .$oResume->Certifications[$i]. "</li>";
						}
						echo "</ul>";
					?>		
				</div>
			</div>
		</div>

		<!-- -->
		<footer id="site-footer"></footer>

		<!--scripts -->
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>
