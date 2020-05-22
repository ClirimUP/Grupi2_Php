<html>
<head>
<title>Contact Us Form</title>
<style>
#nav{
	position:absolute;
	width: 95%;
	margin: 20px 10px 20px 10px;
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

</style>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--<link rel="stylesheet" type="text/css" href="CssContactUs.css">-->
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
	
    <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px; color:white;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label style="color:white;">Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label style="color:white;">Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label style="color:white;">Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
</body>
</html>