<?php
echo "<h2>Multiplication Table up to 6x6 in Pattern</h2>";

// Loop through rows (1 to 6)
for ($i = 1; $i <= 6; $i++) {
    echo "<div style='display: flex;'>";

    // Loop through columns (1 to 6)
    for ($j = 1; $j <= 6; $j++) {
        $result = $i * $j;
        
        // Format the multiplication table entry
        $entry = "$i x $j = $result";
        
        // Print the entry within a box-like element
        echo "<div>$entry</div>";
    }

    echo "</div>";
}
?>
