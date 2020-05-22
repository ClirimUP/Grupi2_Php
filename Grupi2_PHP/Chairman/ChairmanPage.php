<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CssChairmanPage.css"/>
        <?php include 'database.php'; ?>
    
    </head>
    <body>

        <div id="nav">
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
			
        </div>
        <header>
            <h1><span >Chairman</span>  </h1>
            <nav id="mainContact">
                <ul>
                    <li><a href="#">CV</a></li>
                    <li><a href="#">Canvas</a></li>
                    <li><a href="#">Wallpapers</a></li>
                </ul>
            </nav>          
        </header>

        <article id="mainName" alt="Portrait">
            <div >
                <img src="images/GjonMili2.jpg" height="180" width="180">
                <h2 style="font-size: 30px;"> <?php   
					$sql = "SELECT Emri FROM chairman";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()) {
						echo '<h2>'  .$row["Emri"]. '</h2>';
					}
					

				?> </h2>
            </div>

            <section class="Personal">
                <h3 ><img src="images/Personal5.png" height="28" width="28"><a href="#" class="emojiPersonalinfo">Personal Info</a></h3>
                

                <?php

                    $sql = "SELECT * FROM chairman";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {

                        echo  '<div class="Edon">' .
                      '<h2>' 
                        ."Emri: " . $row["Emri"] ."<br>"
                        ."Qyteti: " .$row["City"] ."<br>"
                        ."Shteti: " .$row["Country"] ."<br>"
                        ."Adresa: " .$row["Addressa"] ."<br>"
                        ."Religjioni: " .$row["Religion"] .
                        '<h2>'
                        .'</div>';

                    }
                    } else {
                    echo "0 results";
                    }
                    // $conn->close();
                ?>
                  
                
            
               
                   
                   
                
            </section>

            <section class="Contact">
                
                <h3><img src="images/Contact.png" height="28" width="28"><a href="#" class="emojiContact">Contact</a></h3>
				
				<p>
				 <?php

                    $sql = "SELECT * FROM Admin WHERE Id='1'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {

                        echo  '<div class="Edon">' .
                      '<p>' 
                        ."Emri: " . $row["Emri"] ."<br>"
                        ."Mbiemri: " .$row["Mbiemri"] ."<br>"
                        ."Tel: " .$row["Telefoni"] ."<br>"
                        ."Email: " .$row["Email"] ."<br>"
                        
                        .'</p>'
                        .'</div>';

                    } 
                    } else {
                    echo "0 results";
                    }
					
					
					?>
				</p>
               
            </section>
            <section class="w3-container">
                <h4 style="font-size: 20px;">Here, his heart take a rest</h4>
                <figure>
                    <img src="images/GjonMili3.jpg" height="650" width="1000">
                </figure>
            </section>


        </article>
        <div class="w3-container"> 
            <h2>His Biography</h2>
            
            <?php

            $sql = "SELECT * FROM Autori";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Ky mesazh vjen nga databaza";
                echo  
            '<h2 style="font-size:20px;">' 
                ."Biografia: " . $row["Biografia"] ."<br>"
				."Emri i autorit: " .$row["Emri"]
				
            .'<h2>';
                

            }
            } else {
            echo "0 results";
            }
            $conn->close();
            ?>
            
                     </div>

                     <section class="w3-container">
                        <h4 style="font-size: 20px;">Sharing his relation with Pablo Picasso</h4>
                        <figure>
                            <a target="_blank" href="images/GjonMili5.jpg">
                            <img src="images/GjonMili5.jpg" height="900" width="900">
                        </a>
                        </figure>
                        <div class="button2">
                        <button class="button1" onclick="document.getElementById('demo2').style.display='block'">More! </button>
                        <p id="demo2" style="display:none"> When LIFE magazine's Gjon Mili, a technical prodigy and lighting innovator, visited Pablo Picasso in the South of France in 1949, it was clear that the meeting of these two artists and craftsmen was bound to result in something extraordinary. Mili showed Picasso some of his photographs of ice skaters with tiny lights affixed to their skates, jumping in the dark — and the Spanish genius's ever-stirring mind began to race.
                            "Picasso" LIFE magazine reported at the time, "gave Mili 15 minutes to try one experiment. He was so fascinated by the result that he posed for five sessions, projecting 30 drawings of centaurs, bulls, Greek profiles and his signature. Mili took his photographs in a darkened room, using two cameras, one for side view, another for front view. By leaving the shutters open, he caught the light streaks swirling through space."
                            This series of photographs, known ever since as Picasso's "light drawings," were made with a small electric light in a darkened room; in effect, the images vanished as soon as they were created — and yet they still live, six decades later, in Mili's playful, hypnotic images. Many of them were also put on display in early 1950 in a show at New York's Museum of Modern Art.
                            Finally, while the "Picasso draws a centaur in the air" photo that leads off this gallery is rightly celebrated, many of the images in this gallery are far less well-known — in fact, many of them never ran in the magazine. But they are no less thrilling, after all these years, than the famous shot of the 20th century's archetypal creative genius crafting, on the fly, a simultaneously fleeting and enduring work of art.
                            A note on the last image in the gallery: An excerpt from a 1968 special issue of LIFE, devoted entirely to Picasso, describes a typical scene at his home: "Putting on a mask is sometimes enough to set Picasso off into a kind of witch-doctor frenzy. He roars and writhes behind his gorilla mask, dances away to the mirror, returns in a rubber devil's mask to swoop down on his daughter Paloma. Picasso was one of the first European artists to recognize the magic and beauty of African masks,
                             and his own masks show the enduring power of that early influence."</p>
                            </div>
                    </section>

                    <section class="w3-container">
                        <h4 style="font-size: 20px;">He was in love with her cat</h4>
                        <figure>
                            <a target="_blank" href="images/GjonMili6.jpg">
                            <img src="images/GjonMili6.jpg" height="900" width="900">
                        </a>
                        </figure>

                        <p> He was knwon for his best pics of cats, specially when he was taking photo to her cat</p>
                    </section>

                    
                      </style>
                      <div class="klasa">
                      <button class="button" onclick="document.getElementById('demo').innerHTML=Date()">Time Is:</button>
                      

                        <p id="demo">
                            
                        </p>
                        
                    </div>
                      </head>
                      <body>
                      
                        
                        
          
        <footer>
            <p><a href="#">Admin Stuffe's</a></p>
            <p id="copyright">Copyright &copy;  Creative Commons Attribution-ShareAlike License </p>
        </footer>
    </body>
</html>