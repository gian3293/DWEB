<?php
// Set the song title and artist
$title  = "It’s Sad to Belong";
$artist = "England Dan & John Ford Coley";

// Set how many times the chorus repeats
$chorusRepeat = "2";
$totalRepeat  = $chorusRepeat + 1;

// Arrays of nouns and verbs
$nouns = ["day", "life", "night", "memory"];
$verbs = ["met", "looked", "wake", "wish"];

// First verse lines using variables
$verse1 = [
    "Met you on a springtime $nouns[0]",
    "You were minding your $nouns[1] and I was minding mine, too",
    "Lady, when you $verbs[1] my way",
    "I had a strange sensation and, darling, that's when I knew"
];

// Chorus lines
$chorus = [
    "That it's sad to belong to someone else when the right one comes along",
    "Yes, it's sad to belong to someone else when the right one comes along"
];

// Second verse lines
$verse2 = [
    "Oh, I $verbs[2] up in the $nouns[2]",
    "And I reach beside me hoping you will be there",
    "But instead I find someone",
    "Who believed in me when I said I'd always care"
];

// Bridge section
$bridge = [
    "So I lived my $nouns[1] in a dream world",
    "For the rest of my days",
    "Just you and me walking hand in hand",
    "In a wishful $nouns[3]",
    "Oh, I guess that's all",
    "That it would ever be"
];

// Third verse lines
$verse3 = [
    "I $verbs[3] I had a time machine",
    "I could make myself go back until the day I was born",
    "And I would live my life again",
    "And rearrange it so that I'd be yours from now on"
];
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>

    <style>
        body { 
            font-family: Arial; 
            padding: 20px; 
            background-color: rgb(69,133,103);
        }

        /* single column layout for sections */
        .grid {
            display: grid;
            grid-template-columns: 1fr; /* stack vertically */
            gap: 25px;
            margin-top: 20px;
        }

        .section {
            background: #ffffff33;
            padding: 10px;
            border-radius: 8px;
        }

        h2, h3 {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

    <h1><?php echo $title; ?></h1>
    <h3>Song by <?php echo $artist; ?></h3>

    <div class="grid">

    <!-- Verse 1 -->
    <div class="section">
        <b>(Verse 1)</b><br>
        <?php 
        foreach ($verse1 as $line) {
            echo "<p>" . $line . "</p>";
        }
        ?>
    </div>

    <!-- Chorus -->
    <div class="section">
        <b>(Chorus)</b><br>
        <?php 
        foreach ($chorus as $line) {
            echo "<p>" . $line . "</p>";
        }
        ?>
    </div>

    <!-- Verse 2 -->
    <div class="section">
        <b>(Verse 2)</b><br>
        <?php 
        foreach ($verse2 as $line) {
            echo "<p>" . $line . "</p>";
        }
        ?>
    </div>

    <!-- Bridge -->
    <div class="section">
        <b>(Bridge)</b><br>
        <?php 
        foreach ($bridge as $line) {
            echo "<p>" . $line . "</p>";
        }
        ?>
    </div>

    <!-- Verse 3 -->
    <div class="section">
        <b>(Verse 3)</b><br>
        <?php 
        foreach ($verse3 as $line) {
            echo "<p>" . $line . "</p>";
        }
        ?>
    </div>

    <!-- Final Chorus -->
    <div class="section">
        <b>(Chorus)</b><br>
        <?php 
        foreach ($chorus as $line) {
            echo "<p>" . $line . "</p>";
        }
        ?>
    </div>

</div>


</body>
</html>
