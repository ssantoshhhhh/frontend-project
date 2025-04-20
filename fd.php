<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="fd.css">
    <title>Website Feedback Form</title>
</head>
<body>

  <!-- Navbar -->
  <header>
    <nav class="navbar">
      <div class="logo">🇮🇳-Incredible India</div>
      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="state.html">States</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="./bucket-list.html">List</a></li>
        <li><a href="./reach.php">Contact</a></li>
      </ul>
    </nav>
  </header>

<h2 style="text-align:center;">Website Feedback Form</h2>

<form action="submit_fd.php" method="POST">
    <label>1. How did you find our website?</label>
    <input type="text" name="find_website" required>

    <label>2. Do you find our website helpful?</label>
    <select name="helpful" required>
        <option value="">Select</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>

    <label>3. How do you rate your experience? (1-10)</label>
    <select name="experience_rating" required>
        <option value="">Select</option>
        <?php for ($i=1; $i<=10; $i++) echo "<option value='$i'>$i</option>"; ?>
    </select>

    <label>4. Do you recommend our site to other travelers?</label>
    <select name="recommend" required>
        <option value="">Select</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>

    <label>5. Do you want to suggest any improvements?</label>
    <textarea name="suggestions" rows="4"></textarea>

    <button type="submit">Submit Feedback</button>
</form>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <p>&copy; 2025 Incredible India. All rights reserved.</p>
      <p>Follow us: 
        <a href="#">Instagram</a> | 
        <a href="#">Twitter</a> | 
        <a href="#">Facebook</a>
        <p>Made with ❤️ for every traveler</p>
      </p>
    </div>
  </footer>

</body>
</html>
