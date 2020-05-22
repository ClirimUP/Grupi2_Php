<?php
$winner='n';
print('<div id="nav">
        <ul>
				<li><a href="../Home Page/HomePage.php">HOMEPAGE</a></li>
				<li><a href="../Results/ResultsPage.php">RESULTS</a></li>
				<li><a href="../Game/index.php">GAME</a></li>
				<li><a href="../EntryRules/EntryRules.php">ENTRY RULES</a></li>
				<li><a href="#gallery">GALLERY</a></li>
				<li><a href="#portfolio">PORTFOLIO</a></li>
				<li><a href="../Chairman/ChairmanPage.php">CHAIRMAN</a></li>
				<li><a href="#longlinktext">LONG LINK TEXT </a></li>
				<li><a href="../Loginn/login.php">| LOGIN </a></li>
        </ul>
    </div>');
//me kqyr a eshte be submit buttoni se veq ather po dojm mu ekzekutu qeky kod
//krijimi ni arrayi
$box = array('','','','','','','','','');

if (isset($_POST["submitbtn"])){
	//retrive info from nga forma dhe me i rujt ne nje array
	$box[0] = $_POST["box0"];
	$box[1] = $_POST["box1"];
	$box[2] = $_POST["box2"];
	$box[3] = $_POST["box3"];
	$box[4] = $_POST["box4"];
	$box[5] = $_POST["box5"];
	$box[6] = $_POST["box6"];
	$box[7] = $_POST["box7"];
	$box[8] = $_POST["box8"];
	//print_r(var) shfaq array
	//nr i boxev qe jane blank
	
	if(($box[0] =='x' && $box[1]=='x' && $box[2]=='x')||
		($box[3] =='x' && $box[4]=='x' && $box[5]=='x')||
		($box[6] =='x' && $box[7]=='x' && $box[8]=='x')||
		($box[0] =='x' && $box[3]=='x' && $box[6]=='x')||
		($box[0] =='x' && $box[4]=='x' && $box[8]=='x')||
		($box[1] =='x' && $box[4]=='x' && $box[7]=='x')||
		($box[2] =='x' && $box[4]=='x' && $box[6]=='x')||
		($box[2] =='x' && $box[5 ]=='x' && $box[8]=='x'))
		{
			$winner='x';
			//print("X wins");
			print ('<input type="text"  class="bttn" value="X Wins">');	
		}
		$blank = 0;
		for($i=0; $i<=8; $i++){
		if ($box[$i] == ''){
			$blank = 1;
		}
	}
		//nqfs ka ather me ni vler random e bojm pc me lujt
		if($blank == 1 && $winner == 'n'){
		$i = rand()%8; //mes 0-8 1 numer
		while ($box[$i] != ''){
			$i= rand()%8;
		}
		$box[$i]='o';
		if(($box[0] =='o' && $box[1]=='o' && $box[2]=='o')||
		($box[3] =='o' && $box[4]=='o' && $box[5]=='o')||
		($box[6] =='o' && $box[7]=='o' && $box[8]=='o')||
		($box[0] =='o' && $box[3]=='o' && $box[6]=='o')||
		($box[0] =='o' && $box[4]=='o' && $box[8]=='o')||
		($box[1] =='o' && $box[4]=='o' && $box[7]=='o')||
		($box[2] =='o' && $box[4]=='o' && $box[6]=='o')||
		($box[2] =='o' && $box[5]=='o' && $box[8]=='o')){
				$winner = 'o';
				print ('<input type="text"  class="bttn" value="0 Wins">');	
		}
		
	}
	else if ($winner =='n'){
			$winner ='t';
			print ('<input type="text"  class="bttn" value="Tied Game">');	
		}
	
}
?>
<html>
<head>
<title>TicTacToe</title>
<style>
.bttn{
  position:relative;
  top: 10px;
  background-color: black;
  border: none;
  color: white;
  padding: 12px 17px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:10px;
  margin-top : 10px;
}	
	
#nav{
	
	margin: 20px 0 20px 0;
    text-align: start;
    overflow: hidden;
    background-color: #333333;
    border-radius: 10px;
}


#nav li{
    display: inline;
    padding: 4px;
}

#nav li a{
    color:#FBFBFB;
    text-decoration:none;
    font-size: 17px;
    padding: 18px 16px;
    border-radius: 15%;
}

#nav li a:hover{
    background-color: #505050 ;
    color: #CD8C09;
}

#box {
	border : 2px solid black;
	width: 150px;
	text-align: center;
	text-decoration: none;
	background-color: #f1ebbb;
	border-radius:4px;
	padding: 40px 40px;
	position : relative;
	top :80px;
	font-size: 40px;
}
.button {
  position:relative;
  top: 90;
  background-color: black;
  border: none;
  color: white;
  padding: 2px 17px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:10px;
  margin-top : 10px;
  
}
</style>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style="background-color:#191919; text-align: center; margin : 20px;">
	
<!--do jete forma e vetme ne ket faqe
do perdorim post sepse na lejon me dergu infromacion permes variablave
action page ku du me shku masi tja boj submit-->

<form name ="ticatactoe" method="post" action="index.php" >
<?php


//ketu jane inputet
//print 9 boxes
for ($i=0; $i<=8; $i++){
	printf('<input type="text" name="box%s" value="%s" id="box"  autocomplete="off">', $i, $box[$i]);	
	//pjesa box[i] i run vlerat e x edhe o psh mas submitit
	if ($i == 2 || $i == 5 || $i == 8){
		print ('<br>');
	}
}

//mujtmi me bo me php i buton ose me html 
//ky buton kur klikohet e boan load index.php sherben edhe si lloj i refreshit
if ($winner =='n'){
	print ('<input type="submit" name="submitbtn"  class="button" value="Go">');	
}
else{
	print ('<input type="button" name="newgamebtn" value="Play Again"  class="button" onclick="window.location.href=\'index.php\'">');
}
?>
</form> 
</body>
</html>

