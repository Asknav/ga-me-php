<?php
// Define tasks for each square on the board
$tasks = [
    "Kiss your partner for 30 seconds.",
    "Give your partner a 1-minute massage.",
    "Whisper something sexy in your partner's ear.",
    "Remove one piece of clothing.",
    "Touch your partner gently on their arm or leg.",
    "Exchange a slow and passionate kiss.",
    "Take a shot of your favorite drink.",
    "Tell your partner something you love about them.",
    "Use your fingers to trace a pattern on your partner's back.",
    "Compliment your partner on their appearance."
];

// Initialize player positions
$player1_position = 0;
$player2_position = 0;

// Function to roll the dice
function rollDice() {
    return rand(1, 6); // Random number between 1 and 6
}

// Function to play the game
function playGame(&$player1_position, &$player2_position, $tasks) {
    // Player 1's turn
    echo "<strong>Player 1's turn:</strong><br>";
    $dice_roll = rollDice();
    echo "Player 1 rolled a $dice_roll.<br>";
    $player1_position += $dice_roll;
    if ($player1_position >= count($tasks)) {
        echo "Player 1 reached the end of the board and wins the game!<br>";
        exit;
    }
    echo "Player 1 lands on square $player1_position: " . $tasks[$player1_position] . "<br><br>";

    // Player 2's turn
    echo "<strong>Player 2's turn:</strong><br>";
    $dice_roll = rollDice();
    echo "Player 2 rolled a $dice_roll.<br>";
    $player2_position += $dice_roll;
    if ($player2_position >= count($tasks)) {
        echo "Player 2 reached the end of the board and wins the game!<br>";
        exit;
    }
    echo "Player 2 lands on square $player2_position: " . $tasks[$player2_position] . "<br><br>";
}

// Loop to keep the game going until a player reaches the end
while (true) {
    playGame($player1_position, $player2_position, $tasks);
}

?>
