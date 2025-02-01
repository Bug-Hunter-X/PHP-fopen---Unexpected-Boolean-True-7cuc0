```php
$file = fopen("path/to/file.txt", "r");
if ($file === false) {
    // Handle the error appropriately (e.g., log the error, display a message, etc.)
    $error = error_get_last();
    echo "Error opening file: " . $error['message'] . "\n";
} else {
    // Process the file
    while (($line = fgets($file)) !== false) {
        //Process line
    }
    fclose($file);
}
```
This improved version explicitly checks for the strict boolean `false` using `===`.  This ensures that only actual failures of the `fopen()` function trigger the error handling code.