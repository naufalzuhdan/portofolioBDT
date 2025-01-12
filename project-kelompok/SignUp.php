<?php
include 'db.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format!');</script>";
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan ke database
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
        exit();
    }

    $stmt->bind_param("sss", $name, $email, $hashed_password);
    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BecekBersih Sign Up</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #0a1128;
    color: #fff;
  }
  
  .container {
    display: flex;
    min-height: 100vh;
  }
  
  .left-section {
    flex: 1;
    padding: 50px;
    background-color: #0a1128;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
  }
  
  .logo-container {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
  }
  
  .logo-container img {
    width: 100px;
    height: 100px;
  }
  
  .logo-container h1 {
    font-size: 2rem;
    color: #ffffff;
    margin: 0;
  }
  
  .left-section p {
    font-size: 1rem;
    margin-top: 10px;
  }
  
  .right-section {
    flex: 1;
    background-color: #ffffff;
    color: #000;
    padding: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  
  .right-section h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
  }
  
  .right-section h3 {
    font-size: 1.2rem;
    margin-bottom: 20px;
  }
  
  form {
    display: flex;
    flex-direction: column;
  }
  
  label {
    margin-bottom: 5px;
    font-size: 0.9rem;
  }
  
  input {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  button {
    padding: 10px;
    border: none;
    background-color: #0a1128;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #073670;
  }
  
  p {
    margin-top: 20px;
    font-size: 0.9rem;
  }
  
  p a {
    color: #073670;
    text-decoration: none;
  }
  
  p a:hover {
    text-decoration: underline;
  }
  
</style>
<body>
  <div class="container">
    <!-- Left Section -->
    <div class="left-section">
      <div class="logo-container">
        <img src="image/cuci-motor.png" alt="BecekBersih Logo">
        <h1>BecekBersih</h1>
      </div>
      <p>Cuci Bersih mengkilap kendaraan anda hanya di BecekBersih</p>
    </div>

    <!-- Right Section -->
    <div class="right-section">
      <h2>Let’s Get You Started</h2>
      <h3>Create an Account</h3>
      <form action="SignUp.php" method="POST">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <button type="submit">Register</button>
      </form>
      <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
  </div>
</body>
</html>