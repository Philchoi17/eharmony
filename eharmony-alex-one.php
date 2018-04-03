<?php
    if (count($_REQUEST) > 0) {
        $inGender = $_REQUEST["gender"];
        $inSeeking = $_REQUEST["seeking"];
        $inFname = $_REQUEST["fname"];
        $inZcode = $_REQUEST["zcode"];
        $inCountry = $_REQUEST["country"];

        $personData = "{$inGender}|{$inSeeking}|{$inFname}|{$inZcode}|{$inCountry}";

        file_put_contents("eharmony-alex-data.csv", $personData . PHP_EOL, FILE_APPEND);
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-harmony Mock Up</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        @font-face {font-family:"FaithGlory"; font-weight:400; font-style:normal; src:url("https://static.eharmony.com/files/fonts/webfonts/faith-and-glory-one.woff") format("woff");}

        html, body {
            padding: 0;
            margin: 0;
            font-family: 'Lato', sans-serif;
        }

        #hero {
            background: url('https://static.eharmony.com/files/corp/images/modelo/us-desktop-bg-jordan-camylla.jpg') no-repeat;
            background-size: cover;
            height: 1000px;
        }
        #navbar {
            height: 60px;
            padding: 30px 60px;
        }
        #logo {
            float: left;
            width: 214px;
            margin: 3px 36px;
        }
        #navbuttons { float: right; }
        #navbuttons > div {
            display: inline-block;
            font-size: 1.25em;
            height: 28px;
            padding: 2px 28px;
            margin: 7px;
            border-radius: 5px;
            border: 2px solid white;
            color: white;
        }
        #navbuttons #login {
            border: 2px solid #EC6057;
            background-color: #EC6057;
        }
        #navbuttons #language:hover { background-color: rgba(0, 0, 0, 0.15); }
        #navbuttons #login:hover { background-color: #BF4C43; border-color: #BF4C43; }

        #joinboxwrapper { margin: 42px 0 0 118px; }
        .bold { font-weight: normal; }
        #toptitle {
            font-weight: 300;
            color: white;
            font-size: 2.6em;
            padding: 5px;
        }
        .fancy {
            font-family: 'FaithGlory', sans-serif;
            font-size: 1.4em;
            vertical-align: middle;
        }
        #joinbox {
            background-color: white;
            box-sizing: border-box;
            width: 435px;
            height: 452px;
            border-bottom: 10px solid #feca56;
            /* text-align: center; */
        }
        #boxtitle {
            font-size: 1.8em;
            padding: 15px 20px 0 20px;
            text-align: center;
        }
        #boxtitle .fancy {
            color: #EC6057;
            font-size: 1.75em;
        }
        .inputrow {
            width: 370px;
            margin: 32px auto;
        }
        #am-choice, #seeking-choice, .checkmark {
            display: inline-block;
            vertical-align: top;
            position: relative;
        }
        #am-choice > div, #seeking-choice > div { display: inline-block; }
        #seeking-choice { margin-left: 50px; }
        .customChoiceLabel { vertical-align: bottom; }
        .customChoiceTitle {
            font-size: .8em;
            color: grey;
            margin: 10px 0;
         }
        .customChoiceMan, .customChoiceWoman { margin-left: 10px; }
        .customChoiceCircle {
            margin: auto;
            width: 23px;
            height: 23px;
            border: 4px solid #28AEAF;
            border-radius: 40px;
        }
        .customChoiceWoman .customChoiceCircle { border-color: #EC6057; }
        .customChoiceCircleActive {
            display: none;
            width: 100%;
            height: 100%;
            background-color: #28AEAF;
        }
        .customChoiceWoman .customChoiceCircleActive { background-color: #EC6057; }
        .partrow { display: inline-block; }
        input[type='text'], select {
            height: 35px;
            border: 1px solid grey;
            border-radius: 3px;
            padding-left: 20px;
            font-size: 1em;
            color: grey;
            font-family: 'Lato';
        }
        #fname { width: 335px; }
        #zcode { width: 140px; }
        #country {
            width: 160px;
            height: 39px;
        }
        .rowseconditem { margin-left: 27px; }
        input[type='submit'] {
            font-family: 'Lato';
            font-size: 1.25em;
            height: 38px;
            width: 200px;
            color: white;
            background-color: #28AEAF;
            border: 0;
            vertical-align: top;
        }
        .centeredrow { text-align: center; }
        #pointright {
            vertical-align: middle;
            display: inline-block;
            /* height: 26.5px;
            width: 26.5px;
            background-color: #28AEAF;
            transform: rotate(45deg);
            margin-left: -13px; */
            height: 38px;
            width: 19px;
            border-width: 19px;
            border-style: solid;
            border-color: transparent transparent transparent #28AEAF;
            box-sizing: border-box;
        }
        .checkmark i {
            display: none;
            position: absolute;
            top: 7px;
            left: -7px;
            font-size: 1.25em;
            color: lightgreen;
            margin-left: 10px;
        }
        .errormsg {
            display: none;
            position: absolute;
            font-size: 0.8em;
            margin-left: 0.2em;
            color: #EC6057;
        }
        .allPrevUsers { margin: 25px 50px; }
        .allPrevUsersTitle {
            font-size: 1.5em;
            font-weight: bold;
        }
        .preUser { margin: 1em; }
        .preName {
            font-size: 1.25em;
            font-weight: bold; 
        }
        .preLocation { font-style: italic; }
    </style>
</head>
<body>
    <div id="hero">
        <div id="navbar">
            <div id="logo">
                    <img src="https://static.eharmony.com/files/corp/images/logo/eh-color-heart.svg">
            </div>
            <div id="navbuttons">
                <div id="language" class="clearbutton">Español</div>
                <div id="login" class="redbutton">Log In</div>
            </div>
        </div>
        <div id="joinboxwrapper">
            <div id="toptitle">
                <span class="bold">RIGHT </span> FROM THE <span class="fancy">start</span>
            </div>
            <form id="joinbox" action="eharmony-alex-one.php" method="GET">
                <div id="boxtitle">JOIN <span class="fancy">free</span> TODAY</div>

                <div class="inputrow">
                    <div id="am-choice">
                        <div class="customChoiceLabel">I am a</div>
                        <div id="am-man" class="customChoiceMan">
                            <div class="customChoiceTitle">Man</div>
                            <div class="customChoiceCircle">
                                <div class="customChoiceCircleActive"></div>
                            </div>
                        </div>
                        <div id="am-woman" class="customChoiceWoman">
                            <div class="customChoiceTitle">Woman</div>
                            <div class="customChoiceCircle">
                                <div class="customChoiceCircleActive"></div>
                            </div>
                        </div>
                        <input type="hidden" id="genderInput" name="gender" value="">
                    </div>

                    <div id="seeking-choice">
                        <div class="customChoiceLabel">Seeking a</div>
                        <div id="seeking-man" class="customChoiceMan">
                            <div class="customChoiceTitle">Man</div>
                            <div class="customChoiceCircle">
                                <div class="customChoiceCircleActive"></div>
                            </div>
                        </div>
                        <div id="seeking-woman" class="customChoiceWoman">
                            <div class="customChoiceTitle">Woman</div>
                            <div class="customChoiceCircle">
                                <div class="customChoiceCircleActive"></div>
                            </div>
                        </div>
                        <input type="hidden" id="seekingInput" name="seeking" value="">
                    </div>
                </div>

                <div class="inputrow">
                    <input type="text" id="fname" name="fname" placeholder="Hi, What's your first name?">
                    <div class="checkmark"><i class="fa fa-check" aria-hidden="true"></i></div>
                    <div id="fname-error" class="errormsg">Enter your first name only</div>
                </div>

                <div class="inputrow">
                    <div class="partrow">
                        <input type="text" id="zcode" name="zcode" placeholder="My zip code is...">
                        <div class="checkmark"><i class="fa fa-check" aria-hidden="true"></i></div>
                        <div id="zcode-error" class="errormsg">Invalid Postal Code</div>
                    </div>
                    <div class="partrow rowseconditem">
                        <select id="country" name="country">
                            <option value="">Select...</option>
                            <option>Canada</option>
                            <option>Korea</option>
                            <option>Mexico</option>
                            <option>United States</option>
                        </select>
                        <div class="checkmark"><i class="fa fa-check" aria-hidden="true"></i></div>
                        <div id="country-error" class="errormsg">Enter the country you live in</div>
                    </div>
                </div>

                <div class="inputrow centeredrow">
                    <input id="letsgo" type="submit" value="Let's Go"><!--
                    --><div id="pointright"></div>
                </div>
            </form>
        </div>
    </div>
    <script>
        var nameInput = document.querySelector("#fname");
        var zipInput = document.querySelector("#zcode");
        var countrySelect = document.querySelector("#country");
        var amChoiceManElem = document.querySelector("#am-man");
        var amChoiceWomanElem = document.querySelector("#am-woman");
        var genderInput = document.querySelector("#genderInput");
        var seekingChoiceManElem = document.querySelector("#seeking-man");
        var seekingChoiceWomanElem = document.querySelector("#seeking-woman");
        var seekingInput = document.querySelector("#seekingInput");
        var letsgoButton = document.querySelector("#letsgo");

        countrySelect.value = "United States";

        nameInput.addEventListener("blur", function() {
            if (this.value === "") document.querySelector("#fname-error").style.display = "block";
        });
        zipInput.addEventListener("blur", function() {
            if (this.value === "") document.querySelector("#zcode-error").style.display = "block";
        });
        countrySelect.addEventListener("change", function() {
            if (this.value === "") document.querySelector("#country-error").style.display = "block";
        });
        amChoiceManElem.addEventListener("click", function() {
            document.querySelector("#am-woman .customChoiceCircleActive").style.display = "none";
            this.querySelector(".customChoiceCircleActive").style.display = "block";
            genderInput.value = "M";
        });
        amChoiceWomanElem.addEventListener("click", function() {
            document.querySelector("#am-man .customChoiceCircleActive").style.display = "none";
            this.querySelector(".customChoiceCircleActive").style.display = "block";
            genderInput.value = "F";
        });
        seekingChoiceManElem.addEventListener("click", function() {
            document.querySelector("#seeking-woman .customChoiceCircleActive").style.display = "none";
            this.querySelector(".customChoiceCircleActive").style.display = "block";
            seekingInput.value = "M";
        });
        seekingChoiceWomanElem.addEventListener("click", function() {
            document.querySelector("#seeking-man .customChoiceCircleActive").style.display = "none";
            this.querySelector(".customChoiceCircleActive").style.display = "block";
            seekingInput.value = "F";
        });

        letsgo.addEventListener("click", function() {
            // Do some validation, if you want...

            document.querySelector("#joinbox").submit();
        })
    </script>
    <div class="allPrevUsers">
        <div class="allPrevUsersTitle">Current Users</div>
        <?php
            $allPrevStr = file_get_contents("eharmony-alex-data.csv");
            $allPrevStr = trim($allPrevStr);
            $allPrevArr = explode(PHP_EOL, $allPrevStr);
            for ($i = 0; $i < count($allPrevArr); $i++) {
                $thisUserStr = $allPrevArr[$i];
                $thisUserArr = explode("|", $thisUserStr);
                $htmlStr = "<div class='preUser'>";
                $htmlStr .= "<div class='preName'>{$thisUserArr[2]}</div>";
                $htmlStr .= "<div class='preSeeking'>{$thisUserArr[0]} looking for {$thisUserArr[1]}</div>";
                $htmlStr .= "<div class='preLocation'>{$thisUserArr[3]} ({$thisUserArr[4]})</div>";
                $htmlStr .= "</div>";
                echo($htmlStr);
            }
        ?>
    </div>
</body>
</html>