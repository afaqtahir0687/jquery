<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Day-Night Toggle</title>
    <style>
        body {
    transition: background-color 0.5s ease;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #fff; /* Day mode background color */
    color: #333; /* Day mode text color */
}

.toggle-container {
    text-align: center;
}

.toggle {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}

.toggle input {
    display: none;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc; /* Day mode slider background color */
    transition: 0.4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: #fff; /* Day mode slider knob color */
    transition: 0.4s;
}

input:checked + .slider {
    background-color: #2196F3; /* Night mode slider background color */
}

input:checked + .slider:before {
    transform: translateX(26px);
    background-color: #f2f2f2; /* Night mode slider knob color */
}

.toggle-label {
    margin-left: 10px;
}

    </style>
</head>
<body>
    <div class="toggle-container">
        <label class="toggle">
            <input type="checkbox" id="theme-toggle">
            <span class="slider"></span>
        </label>
        <span class="toggle-label">Toggle Day/Night</span>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
</html>

<script>
    $(document).ready(function() {
    $('#theme-toggle').change(function() {
        if ($(this).is(':checked')) {
            // Night mode
            $('body').css('background-color', '#333'); // Night mode background color
            $('body').css('color', '#fff'); // Night mode text color
        } else {
            // Day mode
            $('body').css('background-color', '#fff'); // Day mode background color
            $('body').css('color', '#333'); // Day mode text color
        }
    });
});

</script>