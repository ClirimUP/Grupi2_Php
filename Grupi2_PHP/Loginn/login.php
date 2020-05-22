<style type="text/css">
    th{
        text-align: right;
    }
    h3{
        text-align: center;
    }
    #nav
{   
    margin: 20px 0 20px 0;
    text-align: start;
    overflow: hidden;
    background-color: #333333;
    border-radius: 10px;
}

#nav li
{
    display: inline;
    padding: 4px;
}

#nav li a
{
    color:#FBFBFB;
    text-decoration:none;
    font-size: 17px;
    padding: 18px 16px;
    border-radius: 15%;
}

#nav li a:hover
{
    background-color: #505050 ;
    color: #CD8C09;
}
body
{
    background-color: #191919;
    padding-right: 5px;
}
#em{
    color: white;
}
</style>
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
<table cellpadding="5" cellspacing ="10" align="center">
    <h3 id="em">Login</h3>
    <form method="post" action="validate.php">
        <tr><th id="em">Email</th><td><input id="email" type="text" name="email"</td></tr>
        <tr><th id="em">Password</th><td><input id="pass" type="password" name="password"</td></tr>
         <tr><td colspan="2" align="center" id="em"><input type="checkbox" name="remember" vaule="1" >Remember me</td></tr>
         <tr><td colspan="2" align="right" id="em" ><input type="submit" value="Login" name="login"> </td></tr>
    </form>
</table>    

    <?php

if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
    
$email = $_COOKIE['email'];
$pass = $_COOKIE['pass'];



echo "<script type=text/javascript>"
        . " document.getElemntById('email').value = '$email';"
        . " document.getElemntById('pass').value = '$pass';"
        . " </script>";
}
?>
