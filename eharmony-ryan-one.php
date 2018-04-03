<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <title>ehoarmony</title>
</head>
<style>
    html, body {
        margin: 0px; 
    }
    #backgroundWrapper {
         background: url('https://static.eharmony.com/files/corp/images/modelo/us-desktop-bg-jordan-camylla.jpg') no-repeat;
         background-size: cover;
         width: 100%;
         height: 768px;
         font-family: 'Open Sans', sans-serif;
    }
    #logoWrapper {
        background: url(https://static.eharmony.com/files/corp/images/logo/eh-color-heart.svg) no-repeat;
        background-size: cover;
        display: inline-block;
        margin-top: 30px;
        margin-left: 40px;
        width: 213.61px;
        height: 40px;
    }
    #bodyLetter {
        color: white;
        font-size: 2.5em;
        font-family: 'Open Sans', sans-serif;
        font-weight: 300;
        margin-left: 112px;
        margin-top: 110px;
        
    }
    #letterRight {
        font-weight:400;
    }
    #searchWrapper {
        width: 441.59px;
        height: 435px;
        background-color: white;
        margin-left: 110px;
        margin-top: 30px;
    }
    #joinfreetoday {
        height: 92px;
        text-align: center;
        line-height: 92px;
        font-size: 2em;
        /* border-bottom: 1px solid grey; */
    }
    #genderWrapper {
        margin: auto;
        border-top: 1.5px dotted grey;
        width: 380px;
        height: 91px;
        color: grey;
    }
    #genders > div {
        display: inline-block;
        font-size: 0.8em;
        margin-top:25px;
    }
    #genders > div:nth-child(1) {
        margin-left: 60px; 
    }
    #genders > div:nth-child(2) {
        margin-left: 20px; 
    }
    #genders > div:nth-child(3) {
        margin-left: 100px; 
    }
    #genders > div:nth-child(4) {
        margin-left: 20px; 
    }
    #chooseGender {
        margin-top: 8px;
    }
    #chooseGender > div { 
        display: inline-block;
    }
    .genderCir {
        display: inline-block;
        width: 23px;
        height: 23px;
        border-radius: 50px;
    }
    .genderMan {
        border: 4px solid cornflowerblue ;
        margin-left:10px;
    }
    .genderWoman {
        border: 4px solid rgb(243, 100, 75);
        margin-left:20px;
    }
    #seekingLetter {
        margin-left: 12px;
    }
    input[type="radio"] {
        width: 0px;
        height: 0px;
        opacity: 0;
    }
    #nameInput {
        display: inline-block;
        width: 360px;
        height: 40px;
        margin-left: 30px;
        margin-top: 28px;
        border: 1px solid grey;
        border-radius: 3px;
    }
    #yourName {
        display:inline-block;
        margin-left: 25px;
        margin-top: 6px;
        height: 26px;
        width: 300px;
        font-size:1em;
        color: grey;
        border: none;
    }
    #yourName:focus {
        outline: none;
    }
    #nameAlert {
        /* display: none; */
        opacity: 0;
        margin-left: 35px;
        font-size: 0.8em;
        color:brown;
    }
    .fa-check {
        display: inline-block;
        height: 30px;
        width: 30px;
        /* border: 1px solid black; */
        font-size: 25px;
        color:limegreen;
    }
    #iconCheck {
        display: inline-block;
        opacity: 0;
        height: 30px;
        width: 30px;
        margin-left:5px;
    }
    #zipCodeInput {
        display: inline-block;
        width: 160px;
        height: 40px;
        margin-left: 30px;
        margin-top: 28px;
        border: 1px solid grey;
        border-radius: 3px;
    }
    #zipCode {
        display:inline-block;
        margin-left: 25px;
        margin-top: 6px;
        height: 26px;
        width: 130px;
        font-size:0.9em;
        color: grey;
        border: none;
    }
    #countryInput {
        display: inline-block;
        width: 160px;
        height: 40px;
        margin-left: 30px;
        margin-top: 28px;
        border: 1px solid grey;
        border-radius: 3px;
    }
    #country {
        display:inline-block;
        margin-left: 25px;
        margin-top: 6px;
        height: 26px;
        width: 130px;
        font-size:0.9em;
        color: grey;
        border: none;
        background-color: white;
    }
    #letsGo {
        display:inline-block;
        margin-left: 100px;
        margin-top: 28px;
        height: 26px;
        width: 230px;
        background-color: aqua;
    }
    #result {
        margin-top: 80px;
        width:100%;
        height:100px;
        font-size: 1em;
        margin-left: 110px;
    }
    
</style>
<body>
    <div id="backgroundWrapper">
        <div id="headWrapper">
            <div id="logoWrapper"></div>
        </div>
        <div id="bodyWrapper">
            <div id="bodyLetter">
                <span id="letterRight">RIGHT</span> FROM THE START
            </div>
            <form action="" method="GET">
                <div id="searchWrapper">
                    <div id="joinfreetoday">
                        JOIN free TODAY
                    </div>
                    <div id="genderWrapper">
                        <div id="genders">
                            <div>Man</div> <div>Woman</div> <div>Man</div> <div>Woman</div>
                        </div>
                        <div id="chooseGender">
                            <div>I am a</div>
                            <label for="iAmMan"><div class="genderCir genderMan" id="am_Man"></div></label><input type="radio" name="iAm" id="iAmMan" value="Man">
                            <label for="iAmWoman"><div class="genderCir genderWoman" id="am_Woman"></div></label><input type="radio" name="iAm" id="iAmWoman" value="Woman"> 
                            <div id="seekingLetter">Seeking a</div>
                            <label for="seekingMan"><div class="genderCir genderMan" id="seeking_Man"></div></label><input type="radio" name="seeking" id="seekingMan" value="Man"> 
                            <label for="seekingWoman"><div class="genderCir genderWoman" id="seeking_Woman"></div></label><input type="radio" name="seeking" id="seekingWoman" value="Woman">  
                        </div>
                    </div>
                    <label for="yourName">
                    <div id="nameInput">
                        <input type="text" placeholder="Hi, What's your first name?" autofocus="false" id="yourName" name="name">
                    </div>
                    </label>
                    <div id="iconCheck"><i class="fa fa-check" aria-hidden="true"></i></div>
                    <div id="nameAlert">
                        Enter your first name only
                    </div>
                    <div id="zipCodeInput">
                        <input type="text" placeholder="My zip code is..." id="zipCode" name="zipcode">
                    </div>
                    <div id="countryInput">
                        <select id="country" name="country">
                            <option value="Your Country?">Your Country?</option>
                            <option value="Korea">Korea</option>
                            <option value="Japan">Japan</option>
                            <option value="China">China</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="The United States">The United States</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" id="letsGo">
                    </div>
                </div>
            </form>
        </div>
        <div id="result">
                <?php
                    if (count($_REQUEST) > 0) {
                        $reqKey = array_keys($_REQUEST);
                        $thisData="";
            
                        for( $i = 0; $i < count($reqKey); $i++) {
                            $thisKey = $reqKey[$i];
                            $thisData .= $_REQUEST[ $thisKey ] . "|";
                        }
                        // var_dump($thisData);
                        file_put_contents("peopleInfo.csv", $thisData . PHP_EOL, FILE_APPEND);
                    }

                    $allData = file_get_contents("peopleInfo.csv");
                    if($allData !== ""){
                        $thisLine = explode(PHP_EOL, $allData);
                        if(count($thisLine) ===2){
                            for ($i = 0 ; $i < count($thisLine)-1 ; $i++) {
                                $eachPersonInfo = explode("|", $thisLine[$i]);
                                echo($eachPersonInfo[0] . " Looking for " . $eachPersonInfo[1] . "<br>");
                                echo("Name : ". $eachPersonInfo[2]. "<br>");
                                echo("Zipcode : " . $eachPersonInfo[3]. "<br>");
                                echo("Country : " . $eachPersonInfo[4]. "<br>");
                                echo("<br> <br>");
                            }
                        }
                        else {
                            for ($i = 0 ; $i < count($thisLine)-1 ; $i++) {
                                $eachPersonInfo = explode("|", $thisLine[$i]);
                                echo($eachPersonInfo[0] . " Looking for " . $eachPersonInfo[1] . "<br>");
                                echo("Name : ". $eachPersonInfo[2]. "<br>");
                                echo("Zipcode : " . $eachPersonInfo[3]. "<br>");
                                echo("Country : " . $eachPersonInfo[4]. "<br>");
                                echo("<br> <br>");
                            }
                        }
                    }
                ?>
        </div>
    </div>
<script>
    // This is for background color changing when 'I am' is checked 
    document.getElementById("iAmMan").addEventListener("click", putColorIam);
    document.getElementById("iAmWoman").addEventListener("click", putColorIam);

    function putColorIam() {
        if(document.getElementById("iAmMan").checked) {
            document.getElementById("am_Man").style.backgroundColor="cornflowerblue";
        }
        else {
            document.getElementById("am_Man").style.backgroundColor="white";
        }
        if(document.getElementById("iAmWoman").checked) {
            document.getElementById("am_Woman").style.backgroundColor="rgb(243, 100, 75)";
        }
        else {
            document.getElementById("am_Woman").style.backgroundColor="white";
        }
    }
    // This is for background color changing when 'Seeking' is checked 
    document.getElementById("seekingMan").addEventListener("click", putColorSeeking);
    document.getElementById("seekingWoman").addEventListener("click", putColorSeeking);

    function putColorSeeking() {
        if(document.getElementById("seekingMan").checked) {
            document.getElementById("seeking_Man").style.backgroundColor="cornflowerblue";
        }
        else {
            document.getElementById("seeking_Man").style.backgroundColor="white";
        }
        if(document.getElementById("seekingWoman").checked) {
            document.getElementById("seeking_Woman").style.backgroundColor="rgb(243, 100, 75)";
        }
        else {
            document.getElementById("seeking_Woman").style.backgroundColor="white";
        }
    }

    document.getElementById("yourName").addEventListener("click", enterYourName);
    function enterYourName() {
        var yourName = document.getElementById("yourName").value;
        if(yourName===""){
            document.getElementById("nameAlert").style.opacity = "1";
            document.getElementById("nameInput").style.border = "1px solid brown";
            document.getElementById("iconCheck").style.opacity = "1";
        }
    }
    document.getElementById("yourName").addEventListener("input", afterName);
    function afterName() {

    }
</script>

</body>
</html>