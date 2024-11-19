<?php

include "links.php"

?>

<style>
#feedback-title{
	text-align:center;
	margin: 0 auto 50px auto;
	padding: 10px 5px;
  min-width: 250px;
	max-width: 400px;
	color: aliceblue;
	background:#0174BE;
	border:2px solid #242424;
	border-radius: 5px;
	
	font: 25px "Arial Black",Arial;
}
#feedback-container{
	margin: auto;
	padding: 5%;
	width: 70%;
	height: auto;
	width: 500px;
	text-align: center;
	
	background: #0C356A;
	border: 5px solid #187cff;
	border-radius: 5px;
	box-shadow: -3px 3px 20px #111111 ;
}
.feedbackLabel{
    color: aliceblue;
	display:inline;

	
	margin: 0 auto;
	padding: 8px;

	border-radius: 5px;
	
	font: 15px "Arial Black", Arial;
}

.feedbackInfo{
	margin: 20px 25px;
	padding: 10px;
	width: 80%;
	background:#FFF0CE;
	text-align:center;
}
.feedbackSelection{
	margin: 5%;
}
.btnSubmit{
	padding: 10px;
	border-top: 3px solid #0174BE;
	border-right: 3px solid #0174BE;
	border-left: 3px solid #0174BE;
	border-bottom: 3px solid #0174BE;
	border-radius: 2px;	
	background: lightblue;
	
	font: 14px "Arial Black", Arial;
}
.selections{
    background-color: #FFF0CE;
	margin:25px;
	padding:auto;
	border-top: 3px solid #0174BE;
	border-right: 3px solid #0174BE;
	border-left: 3px solid #0174BE;
	border-bottom: 3px solid #0174BE;
}
#comment{
	resize: none;
}
.deviceList{
	margin:auto;
}
.deviceList label{
	padding: 2px 5px 2px 5px;
	border-radius:5px;
}
.deviceList input[type=checkbox]:checked + label{
	background: rgba(225,225,75,0.9);
}

</style>



</head>
<body>
<?php

include "header.php"

?>




        <div id="feedback-container">
            <div id="feedback-title">Customer Care!</div>
            <form>
                <label for="name">
                    <div class="feedbackLabel">Your name:</div>
                </label>
                <input id="name" class="feedbackInfo" type="text" placeholder="Your name" required><br>
                <label for="email">
                    <div class="feedbackLabel">Your e-mail addess</div>
                </label>
                <input id="email" class="feedbackInfo" type="text" placeholder="Your e-mail address" required><br>
                <label for="rbPgRating"><div class="feedbackLabel">How would you rate our site?</div></label>
                    <fieldset class="selections">
                    <label>Needs Work</label>
                    <input type="radio" name="pageRating" value="0">
                    <input type="radio" name="pageRating" value="1">
                    <input type="radio" name="pageRating" value="2">
                    <input type="radio" name="pageRating" value="3">
                    <input type="radio" name="pageRating" value="4">
                    <input type="radio" name="pageRating" value="5">
                    <input type="radio" name="pageRating" value="6">
                    <input type="radio" name="pageRating" value="7">
                    <input type="radio" name="pageRating" value="8">
                    <input type="radio" name="pageRating" value="9">
                    <input type="radio" name="pageRating" value="10">
                    <label>Great</label>
                </fieldset>
                <label for="rbPgRating"><div class="feedbackLabel">What devices do you use to access our site?</div></label>
                <fieldset class="selections">
                    <span class="deviceList">
                        <input type="checkbox" class="userDevice" id="Tablet" value="Tablet"><label for="Tablet">Tablet</label>
                    </span>
                    <span class="deviceList">
                        <input type="checkbox" class="userDevice" id="SmartPhone" value="SmartPhone"><label for="SmartPhone">Smart Phone</label>
                    </span>
                    <span class="deviceList">
                        <input type="checkbox" class="userDevice" id="Desktop" value="Desktop"><label for="Desktop">Desktop</label>
                    </span>
                    <br><br>
                    <span class="deviceList">
                        <input type="checkbox" class="userDevice" id="Other" value ="Other"><label for="Other"><input type="text" class="userDevice" placeholder="Other Device" maxlength="25"></label>
                    </span>
                </fieldset>
                <label for="comment">
                    <div class="feedbackLabel">Additional Comments:</div>
                </label>
                <br>
                <textarea id="comment" class="feedbackInfo comment" rows="5" maxlength="450" placeholder="Any additional comments! (450 characters)"></textarea>
                <input type="submit" class="btnSubmit" id = "btnSubmit">
            </form>
        </div>













        <?php

include "footer.php"

?>