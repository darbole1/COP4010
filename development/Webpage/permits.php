<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
    <meta name="author" content="">
	<title>WhereToPark</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/design.css" rel="stylesheet">
</head>
<body>
	<div class='container'>
		<div class='row'>
			<a href="http://lamp.cse.fau.edu/~alyman2013/Principles2">
			<?php 
				echo "<div class='col-lg'>
						<button name='permit' type='submit' value='";
				echo $_GET['permit'];
				echo"' class='permit ";
				echo $_GET['permit'];
				echo "'>";
				if ($_GET['permit'] == "nonresident")
					echo "NON-RESIDENT";
				else if ($_GET['permit'] == "all")
					echo "ALL PARKING";
				else
					echo strtoupper($_GET['permit']);
				echo "</button></div>"; ?>
			</a>
		</div>
	</div>
	<!-- Div for map API -->
	<div class= 'map'>
		INSERT MAP HERE
	</div>
	<!-- Location Dropdown -->
	<div class='container'>
			<div class='row'>
				<div class='col-lg'>
				<?php 
					if (!isset($_GET['location']))
						$loc = "LOCATION";
					else
					{
						switch($_GET['location'])
						{
							case 'hs26':
								$loc = "A.D. HENDERSON UNIVERSITY SCHOOL";
								break;
							case 'ad10':
								$loc = "ADMINISTRATION, K.R. WILLIAMS";
								break;
							case 'su80a':
								$loc = "ADMISSIONS";
								break;
							case 'fa94':
								$loc = "ALUMNI CENTER, MARLEEN &amp; HAROLD FORKAS";
								break;
							case 'gy38': 
								$loc = "ARENA";
								break;
							case 'ah52':
								$loc = "ARTS &amp; HUMANITIES";
								break;
							case 'fh11a':
								$loc = "ATHLETIC FIELD HOUSE - POOL";
								break;
							case 'fh11b':
								$loc = "ATHLETIC FIELD HOUSE WEST";
								break;
							case 'ss8a':
								$loc = "BANK BBT";
								break;
							case 'kh25':
								$loc = "BARRY KAYE HALL";
								break;
							case 'bb48':
								$loc = "BASEBALL STADIUM";
							case 'bs12':
								$loc = "BEHAVIORAL SCIENCES";
							case 'bk76':
								$loc = "BOOKSTORE";
							case 'un31a':
								$loc = "BOX OFFICE";
							case 'pw62':
								$loc = "BPW SCHOLARSHIP HOUSE";
							case 'co69a':
								$loc = "CAMPUS OPERATIONS";
								break;
							case 'au31':
								$loc = "CAROLE &amp; BARRY KAYE AUDITORIUM";
								break;
							case 'so44a':
								$loc = "COLLEGE FOR DESIGN &amp; SOCIAL INQUIRY";
								break;
							case 'al9a':
								$loc = "COLLEGE OF ARTS &amp; LETTERS, SCHMIDT";
								break;
							case 'bu86a':
								$loc = "COLLEGE OF BUSINESS";
								break;
							case 'ed47':
								$loc = "COLLEGE OF EDUCATION";
								break;
							case 'bc71':
								$loc = "COLLEGE OF MEDICINE, SCHMIDT";
								break;
							case 'nu84':
								$loc = "COLLEGE OF NURSING, CE LYNN";
								break;
							case 'se43':
								$loc = "COLLEGE OF SCIENCE, SCHMIDT";
								break;
							case 'cm22':
								$loc = "COMPUTER CENTER";
								break;
							case 'ce31':
								$loc = "CONTINUING EDUCATION HALL";
								break;
							case 'cu97a':
								$loc = "CULTURE &amp; SOCIETY BUILDING";
								break;
							case 'ds87':
								$loc = "DESANTIS PAVILION";
								break;
							case 'pr75':
								$loc = "ELEANOR R. BALDWIN HOUSE";
								break;
							case 'ee96':
								$loc = "ENGINEERING EAST";
								break;
							case 'eg36':
								$loc = "ENGINEERING WEST";
								break;
							case 'fs100':
								$loc = "FAU STADIUM";
								break;
							case 'fl24':
								$loc = "FLEMING HALL";
								break;
							case 'fw23'
								:$loc = "FLEMING WEST";
								break;
							case 'gn73':
								$loc = "GENERAL CLASSROOM NORTH";
								break;
							case 'gs2':
								$loc = "GENERAL CLASSROOM SOUTH";
								break;
							case 'gp92':
								$loc = "GLADES PARK TOWERS";
								break;
							case 'dp49':
								$loc = "GLADYS DAVIS PAVILION";
								break;
							case 'hp89':
								$loc = "HERITAGE PARK TOWERS";
								break;
							case 'ir70':
								$loc = "INDIAN RIVER TOWERS";
								break;
							case 'ig41':
								$loc = "INFORMATION BOOTH";
								break;
							case 'in98':
								$loc = "INNOVATION VILLAGE APARTMENTS - NORTH";
								break;
							case 'in99':
								$loc = "INNOVATION VILLAGE APARTMENTS - SOUTH";
								break;
							case 'is4':
								$loc = "INSTRUCTIONAL SERVICES";
								break;
							case 'su80b':
								$loc = "INTERNATIONAL PROGRAM";
								break;
							case 'cc45':
								$loc = "KAREN SLATTERY ED RES CTR FOR CHILD DEV";
								break;
							case 'ly3':
								$loc = "LIBRARY, S.E. WIMBERLY";
								break;
							case 'll31':
								$loc = "LIFELONG LEARNING CENTER, FRIEDBERG";break;
							case 'lo31':
								$loc = "LIVE OAK PAVILION";break;
							case 'cu97b':
								$loc = "LIVING ROOM THEATERS";break;
							case 'az79':
								$loc = "MEMORY &amp; WELLNESS CENTER, LA GREEN";break;
							case 'dm6':
								$loc = "ALGONQUIN HALL";break;
							case 'od93':
								$loc = "OFFICE DEPOT CENTER FOR EXECUTIVE EDU.";break;
							case 'un31b':
								$loc = "OWL CARD CENTER";break;
							case 'ss8b':
								$loc = "PACK-N-POST";break;
							case 'pk81':
								$loc = "PARKING GARAGE I.";break;
							case 'pk88':
								$loc = "PARKING GARAGE II.";break;
							case 'pk103':
								$loc = "PARKING GARAGE III.";break;
							case 'ph102':
								$loc = "PARLIAMENT HALL";break;
							case 'pa51a':
								$loc = "PERFORMING ARTS";break;
							case 'cc45':
								$loc = "PETER &amp; NONA GORDON LIBRARY/MEDIA CENTER";break;
							case 'ss8c':
								$loc = "PHARMACY";break;
							case 'ps55':
								$loc = "PHYSICAL SCIENCES";break;
							case 'pg35':
								$loc = "PLANT GROWTH COMPLEX";break;
							case 'co69b':
								$loc = "POLICE";break;
							case 'rc91':
								$loc = "RECREATION &amp; FITNESS CENTER";break;
							case 'su80c':
								$loc = "REGISTRAR&apos;S OFFICE";break;
							case 'rs35':
								$loc = "RESEARCH SUPPORT FACILITY";break;
							case 'ag39':
								$loc = "RITTER ART GALLERY";break;
							case 'rc74':
								$loc = "ROPES COURSE PAVILION";break;
							case 'sc1':
								$loc = "SANSON LIFE SCIENCES BUILDING";break;
							case 'pa51b':
								$loc = "SCHMIDT CENTER GALLERY";break;
							case 'bu86b':
								$loc = "SEAN STEIN PAVILION";break;
							case 'so44b':
								$loc = "SOCIAL SCIENCE";break;
							case 'sb68':
								$loc = "SOFTBALL STADIUM";
								break;
							case '31e':
								$loc = "STUDENT ACTIVITIES CENTER";
								break;
							case 'ss8d':
								$loc = "STUDENT HEALTH SERVICES";
								break;
							case 'sh46':
								$loc = "STUDENT HOUSING SERVICES";
								break;
							case 'ss8e':
								$loc = "STUDENT SERVICES";
								break;
							case 'ss8f':
								$loc = "CAFETERIA";
								break;
							case 'pv77':
								$loc = "STUDENT SERVICES PAVILION";
								break;
							case 'su80d':
								$loc = "STUDENT SUPPORT SERVICES";
								break;
							case 'un31c':
								$loc = "STUDENT UNION";
								break;
							case 'pa51c':
								$loc = "STUDIO ONE THEATER";
								break;
							case 'te106':
								$loc = "TECH RUNWAY";
								break;
							case 'ac67':
								$loc = "TOM OXLEY ATHLETIC CENTER";
								break;
							case 'co69c':
								$loc = "TRAFFIC &amp; PARKING";
								break;
							case 'al9b':
								$loc = "UNIVERSITY THEATER";
								break;
							case 'sa':
								$loc = "UNIVERSITY VILLAGE STUDENT APARTMENTS";
								break;
							case 'ut5':
								$loc = "UTILITIES";
								break;
							case 'va53':
								$loc = "VISUAL ARTS";
								break;
							case 'tc67':
								$loc = "WALLY SANGER OWL CLUB CENTER - TICKET OFFICE";
								break;
						}
					}
					echo "<button id='locbtn' class='permit " . $_GET['permit'] . "'>" . $loc . "</button>"; ?>
				</div>
				<div id='location' class='locPopup'>
					<form action='permits.php' method='get'>
					<?php 
						echo "<div class='" .  $_GET['permit'] . "'>";
						echo "<input type='hidden' name='permit' value='" . $_GET['permit'] . "'>"; 
						echo "<button id='defaultLoc' class='permit " . $_GET['permit'] . "'>LOCATION</button>"; ?>
						<div class='locList'>
							<button name='location' value='hs26' class='locItem' type='submit'>A.D. HENDERSON UNIVERSITY SCHOOL</button>
							<button name='location' value='ad10' class='locItem' type='submit'>ADMINISTRATION, K.R. WILLIAMS</button>
							<button name='location' value='su80a' class='locItem' type='submit'>ADMISSIONS</button>
							<button name='location' value='fa94' class='locItem' type='submit'>ALUMNI CENTER, MARLEEN &amp; HAROLD FORKAS</button>
							<button name='location' value='gy38' class='locItem' type='submit'>ARENA</button>
							<button name='location' value='ah52' class='locItem' type='submit'>ARTS &amp; HUMANITIES</button>
							<button name='location' value='fh11a' class='locItem' type='submit'>ATHLETIC FIELD HOUSE - POOL</button>
							<button name='location' value='fh11b' class='locItem' type='submit'>ATHLETIC FIELD HOUSE WEST</button>
							<button name='location' value='ss8a' class='locItem' type='submit'>BANK BBT</button>
							<button name='location' value='kh25' class='locItem' type='submit'>BARRY KAYE HALL</button>
							<button name='location' value='bb48' class='locItem' type='submit'>BASEBALL STADIUM</button>
							<button name='location' value='bs12' class='locItem' type='submit'>BEHAVIORAL SCIENCES</button>
							<button name='location' value='bk76' class='locItem' type='submit'>BOOKSTORE</button>
							<button name='location' value='un31a' class='locItem' type='submit'>BOX OFFICE</button>
							<button name='location' value='pw62' class='locItem' type='submit'>BPW SCHOLARSHIP HOUSE</button>
							<button name='location' value='co69a' class='locItem' type='submit'>CAMPUS OPERATIONS</button>
							<button name='location' value='au31' class='locItem' type='submit'>CAROLE &amp; BARRY KAYE AUDITORIUM</button>
							<button name='location' value='so44a' class='locItem' type='submit'>COLLEGE FOR DESIGN &amp; SOCIAL INQUIRY</button>
							<button name='location' value='al9a' class='locItem' type='submit'>COLLEGE OF ARTS &amp; LETTERS, SCHMIDT</button>
							<button name='location' value='bu86a' class='locItem' type='submit'>COLLEGE OF BUSINESS</button>
							<button name='location' value='ed47' class='locItem' type='submit'>COLLEGE OF EDUCATION</button>
							<button name='location' value='bc71' class='locItem' type='submit'>COLLEGE OF MEDICINE, SCHMIDT</button>
							<button name='location' value='nu84' class='locItem' type='submit'>COLLEGE OF NURSING, CE LYNN</button>
							<button name='location' value='se43' class='locItem' type='submit'>COLLEGE OF SCIENCE, SCHMIDT</button>
							<button name='location' value='cm22' class='locItem' type='submit'>COMPUTER CENTER</button>
							<button name='location' value='ce31' class='locItem' type='submit'>CONTINUING EDUCATION HALL</button>
							<button name='location' value='cu97a' class='locItem' type='submit'>CULTURE &amp; SOCIETY BUILDING</button>
							<button name='location' value='ds87' class='locItem' type='submit'>DESANTIS PAVILION</button>
							<button name='location' value='pr75' class='locItem' type='submit'>ELEANOR R. BALDWIN HOUSE</button>
							<button name='location' value='ee96' class='locItem' type='submit'>ENGINEERING EAST</button>
							<button name='location' value='eg36' class='locItem' type='submit'>ENGINEERING WEST</button>
							<button name='location' value='fs100' class='locItem' type='submit'>FAU STADIUM</button>
							<button name='location' value='fl24' class='locItem' type='submit'>FLEMING HALL</button>
							<button name='location' value='fw23' class='locItem' type='submit'>FLEMING WEST</button>
							<button name='location' value='gn73' class='locItem' type='submit'>GENERAL CLASSROOM NORTH</button>
							<button name='location' value='gs2' class='locItem' type='submit'>GENERAL CLASSROOM SOUTH</button>
							<button name='location' value='gp92' class='locItem' type='submit'>GLADES PARK TOWERS</button>
							<button name='location' value='dp49' class='locItem' type='submit'>GLADYS DAVIS PAVILION</button>
							<button name='location' value='hp89' class='locItem' type='submit'>HERITAGE PARK TOWERS</button>
							<button name='location' value='ir70' class='locItem' type='submit'>INDIAN RIVER TOWERS</button>
							<button name='location' value='ig41' class='locItem' type='submit'>INFORMATION BOOTH</button>
							<button name='location' value='in98' class='locItem' type='submit'>INNOVATION VILLAGE APARTMENTS - NORTH</button>
							<button name='location' value='in99' class='locItem' type='submit'>INNOVATION VILLAGE APARTMENTS - SOUTH</button>
							<button name='location' value='is4' class='locItem' type='submit'>INSTRUCTIONAL SERVICES</button>
							<button name='location' value='su80b' class='locItem' type='submit'>INTERNATIONAL PROGRAM</button>
							<button name='location' value='cc45' class='locItem' type='submit'>KAREN SLATTERY ED RES CTR FOR CHILD DEV</button>
							<button name='location' value='ly3' class='locItem' type='submit'>LIBRARY, S.E. WIMBERLY</button>
							<button name='location' value='ll31' class='locItem' type='submit'>LIFELONG LEARNING CENTER, FRIEDBERG</button>
							<button name='location' value='lo31' class='locItem' type='submit'>LIVE OAK PAVILION</button>
							<button name='location' value='cu97b' class='locItem' type='submit'>LIVING ROOM THEATERS</button>
							<button name='location' value='az79' class='locItem' type='submit'>MEMORY &amp; WELLNESS CENTER, LA GREEN</button>
							<button name='location' value='dm6' class='locItem' type='submit'>ALGONQUIN HALL</button>
							<button name='location' value='od93' class='locItem' type='submit'>OFFICE DEPOT CENTER FOR EXECUTIVE EDU.</button>
							<button name='location' value='un31b' class='locItem' type='submit'>OWL CARD CENTER</button>
							<button name='location' value='ss8b' class='locItem' type='submit'>PACK-N-POST</button>
							<button name='location' value='pk81' class='locItem' type='submit'>PARKING GARAGE I.</button>
							<button name='location' value='pk88' class='locItem' type='submit'>PARKING GARAGE II.</button>
							<button name='location' value='pk103' class='locItem' type='submit'>PARKING GARAGE III.</button>
							<button name='location' value='ph102' class='locItem' type='submit'>PARLIAMENT HALL</button>
							<button name='location' value='pa51a' class='locItem' type='submit'>PERFORMING ARTS</button>
							<button name='location' value='cc45' class='locItem' type='submit'>PETER &amp; NONA GORDON LIBRARY/MEDIA CENTER</button>
							<button name='location' value='ss8c' class='locItem' type='submit'>PHARMACY</button>
							<button name='location' value='ps55' class='locItem' type='submit'>PHYSICAL SCIENCES</button>
							<button name='location' value='pg35' class='locItem' type='submit'>PLANT GROWTH COMPLEX</button>
							<button name='location' value='co69b' class='locItem' type='submit'>POLICE</button>
							<button name='location' value='rc91' class='locItem' type='submit'>RECREATION &amp; FITNESS CENTER</button>
							<button name='location' value='su80c' class='locItem' type='submit'>REGISTRAR'S OFFICE</button>
							<button name='location' value='rs35' class='locItem' type='submit'>RESEARCH SUPPORT FACILITY</button>
							<button name='location' value='ag39' class='locItem' type='submit'>RITTER ART GALLERY</button>
							<button name='location' value='rc74' class='locItem' type='submit'>ROPES COURSE PAVILION</button>
							<button name='location' value='sc1' class='locItem' type='submit'>SANSON LIFE SCIENCES BUILDING</button>
							<button name='location' value='pa51b' class='locItem' type='submit'>SCHMIDT CENTER GALLERY</button>
							<button name='location' value='bu86b' class='locItem' type='submit'>SEAN STEIN PAVILION</button>
							<button name='location' value='so44b' class='locItem' type='submit'>SOCIAL SCIENCE</button>
							<button name='location' value='sb68' class='locItem' type='submit'>SOFTBALL STADIUM</button>
							<button name='location' value='31e' class='locItem' type='submit'>STUDENT ACTIVITIES CENTER</button>
							<button name='location' value='ss8d' class='locItem' type='submit'>STUDENT HEALTH SERVICES</button>
							<button name='location' value='sh46' class='locItem' type='submit'>STUDENT HOUSING SERVICES</button>
							<button name='location' value='ss8e' class='locItem' type='submit'>STUDENT SERVICES</button>
							<button name='location' value='ss8f' class='locItem' type='submit'>CAFETERIA</button>
							<button name='location' value='pv77' class='locItem' type='submit'>STUDENT SERVICES PAVILION</button>
							<button name='location' value='su80d' class='locItem' type='submit'>STUDENT SUPPORT SERVICES</button>
							<button name='location' value='un31c' class='locItem' type='submit'>STUDENT UNION</button>
							<button name='location' value='pa51c' class='locItem' type='submit'>STUDIO ONE THEATER</button>
							<button name='location' value='te106' class='locItem' type='submit'>TECH RUNWAY</button>
							<button name='location' value='ac67' class='locItem' type='submit'>TOM OXLEY ATHLETIC CENTER</button>
							<button name='location' value='co69c' class='locItem' type='submit'>TRAFFIC &amp; PARKING</button>
							<button name='location' value='al9b' class='locItem' type='submit'>UNIVERSITY THEATER</button>
							<button name='location' value='sa' class='locItem' type='submit'>UNIVERSITY VILLAGE STUDENT APARTMENTS</button>
							<button name='location' value='ut5' class='locItem' type='submit'>UTILITIES</button>
							<button name='location' value='va53' class='locItem' type='submit'>VISUAL ARTS</button>
							<button name='location' value='tc67' class='locItem' type='submit'>WALLY SANGER OWL CLUB CENTER - TICKET OFFICE</button>
						</div>
					</div> <!-- Div inside PHP -->
					</form>
				</div>
			</div>
		</div>
		<div class='container'>
			<div class='row'>
				<button id='aboutbtn' class='col-xs-3 bottom-text' >About Us</button>
				<div id='aboutUs' class='popup'>
					<div class='popupContent'>
						<div class='close'>x</div>
						<p>We are the Kryptos! The mighty, mighty Kryptos!</p>
					</div>
				</div>
				<button class='col-xs-6 bottom-text' id='company' disabled>Kryptos Production</button>
				<button id='disbtn' class='col-xs-3 bottom-text'>Help</button>
				<div id='disclaimer' class='popup'>
					<div class='popupContent'>
						<div class='close'>x</div>
						<p>Need Help? Too bad. We don't have that feature yet.</p>
					</div>
				</div>
			</div>
		</div>
	<!-- Gradient scale -->

	<!-- Switch for after hours/Message if between after hours -->
	<!-- Footer -->
	<script src="https://ajax.googleapis.com/ajax/buttonbs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/function.js"></script>
</body>
</html>