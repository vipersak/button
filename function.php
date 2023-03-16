<!DOCTYPE html>
<html>
  <head>
    <script src="index.js"></script>
    <meta charset="UTF-8">
    <title>Alarm Button</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h1>Function Select</h1>
    <button id="function1">Function 1</button>
    <button id="function2">Function 2</button>
    <button id="function3">Function 3</button>
    <div id="display"></div>
<?php
// Handle incoming request
if (isset($_GET['action'])) {
    // Store action in a variable
    $action = $_GET['action'];

    // Perform action based on the value of $action
    switch ($action) {
        case 'turn_on_light':
            // Turn on light
            break;
        case 'turn_off_light':
            // Turn off light
            break;
        case 'play_music':
            // Play music
            break;
        case 'stop_music':
            // Stop music
            break;
        default:
            // Do nothing
            break;
    }
}
?>
  </body>
</html>