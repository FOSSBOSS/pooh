<?php
// Create a large file full of junk
// Set the headers to force download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="My_Crypto_Wallet.txt"');

// Open /dev/random for reading
$randomFile = fopen('/dev/random', 'rb');
if ($randomFile === false) {
    die('Unable to open /dev/random');
}

// Continuously read and output chunks of random data
while (true) {
    // Read a chunk of 1024 bytes from /dev/random
    $data = fread($randomFile, 1024);
    if ($data === false) {
        break;
    }

    // Output the data
    echo $data;

    // Flush the output buffer to ensure the data is sent to the client immediately
    flush();

    // Sleep for a short period to prevent excessive CPU usage
    usleep(1000);
}

// Close the file handle
fclose($randomFile);
?>
