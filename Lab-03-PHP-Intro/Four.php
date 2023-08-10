
<?php
function checkVoterEligibility($age) {
    // Minimum voting age
    $votingAge = 18;
    
    // Check if the person's age is greater than or equal to the voting age
    if ($age >= $votingAge) {
        return "Congratulations!! You Can Vote Now";
    } else {
        return "Opppsss Sorrryyyy!!! You are still child of $votingAge.";
    }
}

// Get the person's age from the user
if (isset($_POST['submit'])) {
    $age = intval($_POST['age']);
    echo checkVoterEligibility($age);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cheking Can Vote or Not</title>
</head>
<body>
    <h2>Voting Status</h2>
    <form method="post" action="">
        <label for="age">Enter your age:</label>
        <br>
        <input type="number" id="age" name="age" required>
        <br>
        <br>
        <button type="submit" name="submit">Check Status</button>
    </form>
</body>
</html>
