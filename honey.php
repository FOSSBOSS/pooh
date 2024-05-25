<?php
// honey.php
// Its the payload of the pot, the thing we were trying to protect.
// Name it somethign good, fill it with nonsense. 
// Set headers to force download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="honey.txt"');
header('Content-Length: 0');

// Output the contents of /dev/null
readfile('/dev/null');
//readfile('/dev/random');

// Alternatively, you can simply end the script without outputting anything
// echo ''; // No output
?>
