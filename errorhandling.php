<?php
$filename = "my_test_file.txt";
$content = "This is a test file.";

try {
    $file = fopen($filename, "w");
    if (!$file) {
        throw new Exception("Failed to create or open the file.");
    }

    fwrite($file, $content);
    fclose($file);
    echo "File created and text written successfully.";
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
