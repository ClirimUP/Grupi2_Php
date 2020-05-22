<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            PrePhoto
        </title>
        <link rel="stylesheet" type="text/css" href="CssHomePage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Artifika' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Atma' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Averia Gruesa Libre' rel='stylesheet'>
    </head>
    <body>
        <header>
            <table style="width:100%">
                <tr>
                    <td id="header1">  
                        Pre Photo
                    </td>
                    <td rowspan="2" style="text-align:right;" valign="bottom">
                        Tel:(00)+383-124-7592 | Mail: info@prephoto.com
                        <div>
                            <input type="text" class="searchterm" placeholder="SEARCH TERM HERE...">
                            <button type="submit" class="searchbutton">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </td>
                 </tr>
                 <tr>
                     <td style="font-family: Atma; padding-left: 5px; font-size: 20px;">
                        International Competition of Photography
                     </td>
                </tr>
            </table>
        </header>
        
        <hr>
 
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
        <div id="prefotoimg">
            <script>
                var i = 0;
                var images = [];
                var time = 1500;
        
                images[0] = 'images/photo1.jpg';
                images[1] = 'images/photo2.jpg';
                images[2] = 'images/photo3.jpg';
                images[3] = 'images/photo4.jpg';
            
                function changeImg(){
                    document.slide.src = images[i];
            
                    if(i < images.length - 1){
                        i++;
                    } else {
                        i = 0;
                    }
            
                    setTimeout("changeImg()", time);
                }
            
                window.onload = changeImg;
            
            </script>
            
            <img name="slide" width="100%" height="400px">
            
        </div>
        <hr>
        
        <div id="secondpart">
            <table style="width: 100%;">
                <tr id="works">
                    <th colspan="2">Recent Work</th>
                    <th colspan="2">Last Winners</th>
                </tr>
                <tr>
                    <td>
                        <a href="images/PhotographicMarathon.jpg">
                        <img src="images/PhotographicMarathon.jpg" alt="Photographic Marathon">
                        </a>    
                    </td>
                    <td>
                        <a href="images/WorkShop1.jpg">
                        <img src="images/WorkShop1.jpg" alt="WorkShop1">
                        </a>
                    </td>
                    <td>
                        <a href="images/Winner1.jpg">
                        <img src="images/Winner1.jpg" alt="Winner1">
                        </a>
                    </td>
                    <td>
                        <a href="images/Winner2.jpg">
                        <img src="images/Winner2.jpg" alt="Winner2">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="images/WorkShop.jpg">
                        <img src="images/WorkShop.jpg" alt="WorkShop">
                        </a>
                    </td>
                    <td>
                        <a href="images/5thEdition.jpg">
                        <img src="images/5thEdition.jpg" alt="5thEdition">
                     </a>
                    </td>
                    <td>
                        <a href="images/Winner3.jpg">
                        <img src="images/Winner3.jpg" alt="Winner3">
                        </a>
                    </td>
                    <td>
                        <a href="images/Winner4.jpg">
                        <img src="images/Winner4.jpg" alt="Winner4">
                        </a>
                    </td>
                </tr>
            </table>
        </div>

        <hr>
        
        <div>
           <table id="secondpart1">
            <tr>
                <td style="font-size: 40px;">
                    Want to know more about the competition ?
                </td>
                <td rowspan="2" style="text-align: right;">
                    <a href="../ContactUs/index.php" id="button">CONTACT US TODAY</a>
                </td>
            </tr>
            <tr>
                <td>
                    From who prices are certified ?
                </td>
            </tr>
           </table>
        </div >

        <hr>

        <footer>
            <p style="text-align: right;">Follow us : </p>
            <a href="https://www.flickr.com/">
            <img src="images/social/flickr_32.png" alt="Fotografia nuk mund te paraqitet"/>
            </a>

            <a href="https://twitter.com/">
            <img src="images/social/twitter_32.png"/>
            </a>

            <a href="https://www.instagram.com/">
            <img src="images/social/instagram_32.png"/>
            </a>

            <a href="https://www.facebook.com/">
            <img src="images/social/facebook_32.png"/>
            </a>
            
            <p id="p1">&copy; 2013 / All Rights Reserved - PRE PHOTO </p>
          
        </footer>
        
    
    </body>
</html>