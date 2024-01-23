<!doctype html>
<html>

<head>
    <title>PHP If Statements</title>
</head>

<body>

    <h1>PHP If Statements</h1>

    <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything
        outputs correctly:</p>

    <?php

    // **************************************************
    // Do not edit this code
    
    // Generate a random number (1, 2, or 3)
    $randomNumber = ceil(rand(1, 3));

    // Display the random number
    echo '<p>The random number is ' . $randomNumber . '.</p>';

    // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
    
    // The random number is 1, so use Codecademy
    if ($randomNumber == 1) {

        $linkName = 'Codecademy';
        $linkURL = 'https://www.codecademy.com/';
        $linkImage = '';
        $linkCTA = 'codecademy';
        $linkDescription = 'Learn to code interactively, for free.';

    }

    // The random number is 2, so use W3Schools
    elseif ($randomNumber == 2) {

        $linkName = '';
        $linkURL = 'https://www.w3schools.com/';
        $linkImage = 'w3schools.png';
        $linkCTA = 'w3schools';
        $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

    }

    // The random number is 3, so use MDN
    else {

        $linkName = 'Mozilla Developer Network';
        $linkURL = 'https://www.codecademy.com/';
        $linkImage = 'mozilla.png';
        $linkCTA = 'mozilla';
        $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

    }

    // **************************************************
    
    // Beginning of the exercise, place all of your PHP code here
    // Upload this page (or use your localhost) and refresh the page, the h2 below will change
    
    // link Name
    if ($linkName == "") {
        echo '<h2>EMPTY $linkName</h2>';
    } else {
        echo '<h2>' . $linkName . '</h2>';
    }
    ;

    // link URL
    if ($linkURL == "") {
        echo '<h2>EMPTY $linkURL</h2>';
        echo '<p>' . $linkCTA . '</p>';
    } else {
        echo '<a href="' . $linkURL . '">' . $linkCTA . '</a>';
    }
    ;

    // link Image
    if ($linkImage == "") {
        echo '<h2>EMPTY $linkImage</h2>';
    } else {
        echo '<img src="' . $linkImage . '"/>';
    }
    ;

    // link description
    if ($linkDescription == "") {
        echo '<h2>EMPTY $linkDescription</h2>';
    } else {
        echo '<p>' . $linkDescription . '</p>';
    }
    ;





    ?>


    <?php

    // Generate a random number (1 to 100)
    $randomNumber = ceil(rand(1, 100));

    // Display the random number
    echo '<p>The random number is ' . $randomNumber . '.</p>';


    if ($randomNumber < 59) {
        echo '<h2>Your grade is:' . $randomNumber . ' so you got and F</h2>';
    } elseif ($randomNumber < 60 && $randomNumber < 69) {
        echo '<h2>Your grade is:' . $randomNumber . ' so you got and E</h2>';
    } elseif ($randomNumber < 70 && $randomNumber < 74) {
        echo '<h2>Your grade is:' . $randomNumber . ' so you got and D</h2>';
    } elseif ($randomNumber < 75 && $randomNumber < 79) {
        echo '<h2>Your grade is:' . $randomNumber . ' so you got and C</h2>';
    } elseif ($randomNumber < 80 && $randomNumber < 84) {
        echo '<h2>Your grade is:' . $randomNumber . ' so you got and B</h2>';
    } elseif ($randomNumber < 85 && $randomNumber < 90) {
        echo '<h2>Your grade is:' . $randomNumber . ' so you got and A</h2>';
    } else {
        echo '<h2>Your grade is:' . $randomNumber . ' so you got and A+</h2>';
    }

    ?>


    <?php
    // Generate a random number (1 to 7)
    $randomNumber = ceil(rand(1, 7));

    // Display the random number
    echo '<p>The random number is ' . $randomNumber . '.</p>';



    switch ($randomNumber) {
        case "1":
            echo "Your day is Sunday!";
            break;
        case "2":
            echo "Your day is Monday!";
            break;
        case "3":
            echo "Your day is Tuesday!";
            break;
        case "4":
            echo "Your day is Wenesday!";
            break;
        case "5":
            echo "Your day is Thuersday!";
            break;
        case "6":
            echo "Your day is Friday!";
            break;
        default:
            echo "Your day is Saturday!";
    }

    ?>

</body>

</html>