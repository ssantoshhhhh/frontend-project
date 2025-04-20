<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>
    <h1>Feedback Form</h1>
    <form action="submit_feedback.php" method="POST">
        <label for="source">How did you find out about our website?</label><br>
        <input type="text" id="source" name="source" required><br><br>

        <label for="helpful">Do you find our website helpful?</label><br>
        <select id="helpful" name="helpful" required>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select><br><br>

        <label for="rating">How do you rate your experience (1-10)?</label><br>
        <input type="number" id="rating" name="rating" min="1" max="10" required><br><br>

        <label for="recommend">Do you recommend our site to other travelers?</label><br>
        <select id="recommend" name="recommend" required>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select><br><br>

        <label for="improvements">Do you want to suggest any improvements?</label><br>
        <textarea id="improvements" name="improvements"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>