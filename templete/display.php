<?php 
include_once 'body.php';
include_once 'head.php';
    $gf=$_POST['bfname'];
    $bf=$_POST['gfname'];
    $result = sendtobody($gf, $bf);
    $val =1;
    $author="-Hilarious McFunnyface";

    switch ($result) {
        case 'f':
            $f = "Friends";
            $qoute = "A true friend is a companion who will always be there, through thick and thin.";
            break;
        case 'l':
            $f='Love';
            $qoute = "Love is the most beautiful feeling that brings joy and meaning to life.";
            break;
        case 'a':
            $f='Affection';
            $qoute = "Affection is the glue that binds hearts together";
            break;
        case 'm':
            $f='Marriage';      
            $qoute = "Marriage is a beautiful journey of two souls intertwined in love, trust, and commitment.";
            break;
        case 'e':
            $f='Enemy';
            $qoute = "From enemies to loved ones, transformation is possible.";
            break;
        case 's':
            $f='Sister';
            $qoute = "Being called 'bro' by loved ones is a reminder of the bond and trust we share.";
            break;
        default:
            break;
    }   

?>
<head>
<link rel="icon" type="image/x-icon" href="/assets/brand/favicon.ico">
    <link rel="stylesheet" href="/css/result.css">
</head>
<main >
    
    <div class="quote-card">
        <h3><?php echo $f ?></h3>
        <p class="quote-text"><?php echo $qoute; ?></p>
        <p class="quote-author"><?php echo $author; ?></p>
    </div>

    <div id="back">
        <a href="/index.php"><- - Want To Go Back?</a>
    </div>
</main>