<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="page-1.css">
</head>
<body>
 


<?php
    
    // Database credentials
    $host = "localhost";
    $email = "root";
    $password= "";
    $database = "contact_db";

    $conn = new mysqli($host, $email, $password, $database);

    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
	{
        // Retrieve form inputs
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Validate form inputs
       
        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO contact_table(name,email,message) VALUES (?,?,?)");
        $stmt->bind_param("sss",$name, $email, $message);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Your message has been sent successfully...Thanks !!!";
        } else {
            echo "Error inserting data: " . $stmt->error;
        }
		
        // Close the statement
        $stmt->close();
    }

    // Close the database connection
    $conn->close();
    ?>



  <style>
    body{
      background-color: rgb(218, 218, 211);
    }
  </style>

  <!--  <style>
        body{
            background-image: url(bookweb/bg3.jpeg);
            background-size: cover;
        }
    </style>-->

    <header>
        <nav>
            <ul>
                <li><a href="page1.html">Home</a></li>
                <li><a href="Books.html">Books</a></li>
                <li><a href="Contact Us.html" class="active">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <form action="#" method="POST" class="Contact">
        <label for="name">Name</label>
        <input type="name" id="name" name="name" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Send</button>
      </form>
     
      <style>


form {
  display: flex;
  flex-direction: column;
  width: 500px;
  margin-left: 500px;
}

label {
  font-weight: bold;
  margin-top: 1rem;
}

input,
textarea {
  padding: 0.5rem;
  margin-bottom: 1rem;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 1rem;
}

textarea {
  height: 150px;
}

button {
  padding: 1rem;
  background-color: #95999d;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 1rem;
  cursor: pointer;
  margin-top: 1rem;
}

button:hover {
  background-color: #484c4f;
}

      </style>
      
    
</body>
</html>