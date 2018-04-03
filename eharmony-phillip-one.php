<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eHarmony | #1 Trusted Dating Site</title>
    <link rel="stylesheet" type="text/css" href="eharmony.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Mr+Dafoe|Pontano+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div>
        <img id = "logo" src="https://static.eharmony.com/files/corp/images/logo/eh-color-heart.svg">
        <ul id="loginMenu">
            <li>
                <a href="" id="spanishButton">Español</a>
                <a href="" id="spanishOverlay"></a>
            </li>
            <li>
                <a href="" id="loginButton">Log In</a>
            </li>
        </ul>
    </div>
    <div id="aboveText">
        <h2>
            RIGHT <span id="fromTheText">FROM THE </span><span id="startText">Start</span>
        </h2>
    </div>
    <div id="formArea">
        <h3>JOIN <span id ="freeText">free</span> TODAY</h3>
        <form id="formSub" action="" method="GET">
            <div id="userGenSelect">
                <div id="iAmText">
                    <p>I am a</p>
                </div>
                <div id="iMan">
                    <label for="iManSel">
                        <p>Man</p>
                        <input type="radio" name="userGen" value="male" id="iManSel">
                        <div id="userMaleSel"><i class="fa fa-male" aria-hidden="true"></i></div>
                    </label>
                </div>
                <div id="iWoman">
                    <label for="iWomanSel">
                        <p>Woman</p>
                        <input type="radio" name="userGen" value="female" id="iWomanSel">
                        <div id="userWomanSel"><i class="fa fa-female" aria-hidden="true"></i></div>     
                    </label>
                    <div id="unfilledUserGen">
                        <h5>Select your Gender</h5>
                    </div>
                </div>                    
            </div>
            <div id="seekGenSelect">
                <div id="seekingText">
                    <p>Seeking a</p>
                </div>
                <div id="uMan">
                    <label for="uManSel">
                        <p>Man</p>
                        <input type="radio" name="seekGen" value="male" id="uManSel">
                        <div id="seekMaleSel"><i class="fa fa-male" aria-hidden="true"></i></div>
                    </label>
                </div>
                <div id="uWoman">
                    <label for="uWomanSel">
                        <p>Woman</p>
                        <input type="radio" name="seekGen" value="female" id="uWomanSel">
                        <div id="seekFemaleSel"><i class="fa fa-female" aria-hidden="true"></i></div>
                    </label>
                    <div id="unfilledSeekGen">
                        <h5>Select  gender preference<h5>
                    </div>
                </div>
            </div>
            <div id="formStuff">
                <input type="text" id="nameInput" name="name" placeholder="Hi, What's your first name?">
                <div id="nameCheck"><i class="fa fa-check" aria-hidden="true"></i></div>
                <div id="unfilledName">
                    <h4>Enter your first name only</h4>
                </div>
                <input type="text" id="zipInput" name="zipcode" placeholder="My zip code is...">
                <div id="zipCheck"><i class="fa fa-check" aria-hidden="true"></i></div>
                <div id="unfilledZip">
                    <h4>Invalid postal code</h4>
                </div>
                <select id="countryInput" name="country">
                    <option>Your Country?</option>
                    <option value="US">United States</option>
                    <option value="SKorea">South Korea</option>
                    <option value="Mex">Mexico</option>
                </select>
                <div id="unfilledCountry">
                    <h4>Enter the country you live in</h4>
                </div>
                <div id="countryCheck"><i class="fa fa-check" aria-hidden="true"></i></div>
                <button id="submitButton" type="button">Let's Go</button><div id="arrowPoint"></div>
            </div>
        </form>
    </div>
    <table>
    <?php
    

    $num = 1;
    foreach ($_REQUEST as $thisKey => $thisVal) {
        echo("<tr><td>{$num}: {$thisKey}</td><td>{$thisVal}</td></tr>\n");
        $num++;
    }
    
    $bigString = implode("|", $_REQUEST);
    // echo("bigString:" . $bigString);
    

    file_put_contents("eharmonyregister1.php", $bigString . PHP_EOL, FILE_APPEND);
    ?>
    </table>
    <div id="userCollection">
        <h1>REGISTERED USERS:</h1>
        <?php
            $userContents = file_get_contents("eharmonyregister1.php");
            $userContents = trim($userContents);
            $userLine = explode("\n", $userContents);

            for($i = 1; $i < count($userLine); $i++)
            {
                $userInfo[$i] = explode("|", $userLine[$i]);
                echo("<p id = 'userStyling' style='border:1px solid black;'><span style='color:grey'>USER GEN:</span> " . $userInfo[$i][0] . "<span style='color:grey'> SEEKING GEN: </span>" . $userInfo[$i][1] . "<span style='color:grey'> NAME: </span>" . $userInfo[$i][2] . "<span style='color:grey'> ZIP CODE: </span>" . $userInfo[$i][3] . "<span style='color:grey'> COUNTRY: </span>" . $userInfo[$i][4] . "</p>");
            }
            // $userInfo1 = explode("|", $userLine[1]);

            // for($x = 0; $x < count($userLine)-2; $x++)
            // {
            //     echo("<p>USER GEN: " . $userInfo[$x+ 1][0] . " SEEKING GEN: " . $userInfo[$x + 1][1] . " NAME: " . $userInfo[$x + 1][2] . " ZIP CODE: " . $userInfo[$x + 1][3] . " COUNTRY: " . $userInfo[$x + 1][4] . "</p>");
            // }
            
            // echo($userInfo[1][0]);
            // echo("User Gender: " . $userInfo[0] . PHP_EOL . "Seeking Gender: " . $userInfo[1] . PHP_EOL);
        ?>
    </div>
    
    
    <script>
    var submitB = document.getElementById("submitButton");
    var nameLine = document.getElementById("nameInput");
    var zipLine = document.getElementById("zipInput");
    var maleSelect = document.getElementById("iManSel");
    var womanSelect = document.getElementById("iWomanSel");
    var seekMan = document.getElementById("seekMaleSel");
    var seekWoman = document.getElementById("seekFemaleSel");
    var countryLine = document.getElementById("countryInput");
    var formSubmit = document.getElementById("formSub");


    // submitB.addEventListener("click", inputCheck);
    document.getElementById("formStuff").addEventListener("click", function() { console.log("HERE!"); });

    maleSelect.addEventListener("click", function()
    {
        console.log("HEY!");
        document.getElementById("uWomanSel").checked=true;
        document.getElementById("seekFemaleSel").style.backgroundColor="#ed6058";
        document.getElementById("userMaleSel").style.backgroundColor="#28AEAF";
        document.getElementById("seekMaleSel").style.backgroundColor="white";
        document.getElementById("userWomanSel").style.backgroundColor="white";
        document.getElementById("unfilledUserGen").style.opacity="0";
        document.getElementById("unfilledSeekGen").style.opacity="0";
    });
    
    womanSelect.addEventListener("click", function()
    {
        document.getElementById("uManSel").checked=true;
        document.getElementById("seekMaleSel").style.backgroundColor="#28AEAF";
        document.getElementById("userWomanSel").style.backgroundColor="#ed6058";
        document.getElementById("seekFemaleSel").style.backgroundColor="white";
        document.getElementById("userMaleSel").style.backgroundColor="white";
        document.getElementById("unfilledUserGen").style.opacity="0";
        document.getElementById("unfilledSeekGen").style.opacity="0";
    });

    seekMan.addEventListener("click", function()
    {
        document.getElementById("seekMaleSel").style.backgroundColor="#28AEAF";
        document.getElementById("seekFemaleSel").style.backgroundColor="white";
        document.getElementById("unfilledSeekGen").style.opacity="0";
    });

    seekWoman.addEventListener("click", function()
    {
        document.getElementById("seekFemaleSel").style.backgroundColor="#ed6058";
        document.getElementById("seekMaleSel").style.backgroundColor="white";
        document.getElementById("unfilledSeekGen").style.opacity="0";
    });

    submitB.addEventListener("click", inputCheck);
    
    function inputCheck()
    {
        if(nameLine.value === "")
        {
            nameLine.style.borderColor="#cc3333";
            document.getElementById("unfilledName").style.opacity="1";           
        }
        if(zipLine.value === "")
        {
            zipLine.style.borderColor="#cc3333";
            document.getElementById("unfilledZip").style.opacity="1";
        }
        if(countryLine.value === "Your Country?")
        {
            document.getElementById("unfilledCountry").style.opacity="1";
            countryLine.style.borderColor="#cc3333"
        }
        if(maleSelect.checked === false || womanSelect.check === false)
        {
            document.getElementById("unfilledUserGen").style.opacity="1";
        }
        if(document.getElementById("uManSel").checked === false || document.getElementById("uWomanSel").checked === false)
        {
            document.getElementById("unfilledSeekGen").style.opacity="1";
        }
        if(maleSelect.checked === true || womanSelect.check === true)
        {
            document.getElementById("unfilledUserGen").style.opacity="0";
            document.getElementById("unfilledSeekGen").style.opacity="0";
        }
        if(document.getElementById("uManSel").checked === true || document.getElementById("uWomanSel").checked === true)
        {
            document.getElementById("unfilledSeekGen").style.opacity="0";
            document.getElementById("unfilledUserGen").style.opacity="0";
        }
        if(nameLine.value.match(/[abcdefghijklmnopqrstuvwxyz]/i) && zipLine.value.length === 5 && (document.getElementById("uManSel").checked === true || document.getElementById("uWomanSel").checked === true) && (maleSelect.checked === true || womanSelect.checked === true))
        {
            formSubmit.submit();
        }
    };

    nameLine.addEventListener("input", function()
    {
        if(nameLine.value.match(/[abcdefghijklmnopqrstuvwxyz]/i))
        {
            document.getElementById("nameCheck").style.opacity="1";
            nameLine.style.borderColor="grey";
            document.getElementById("unfilledName").style.opacity="0"; 
        }
        else
        {
            document.getElementById("nameCheck").style.opacity="0";
        }
    });

    zipLine.addEventListener("input", function()
    {
        if(zipLine.value.length === 5)
        {
            document.getElementById("zipCheck").style.opacity="1";
            document.getElementById("unfilledZip").style.opacity="0";
            zipLine.style.borderColor="grey";
        }
        else
        {
            document.getElementById("zipCheck").style.opacity="0";
        }
    });

    countryLine.addEventListener("change", function()
    {
        if(countryLine.value === "Your Country?")
        {
            document.getElementById("countryCheck").style.opacity="0";
        }
        else
        {
            document.getElementById("countryCheck").style.opacity="1";
            document.getElementById("unfilledCountry").style.opacity="0";
            countryLine.style.borderColor="grey";
        }
    });

    


    
</script>
</body>

</html>