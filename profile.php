<!DOCTYPE html>
<html>
<head></head>

<body>

<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }
    
    .profile-container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .profile-picture {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
    }
    
    .profile-info {
      margin-top: 20px;
    }
    
    .profile-info p {
      margin: 5px 0;
    }
    
    .logout-button {
      display: inline-block;
      padding: 8px 16px;
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }
    
    .books-section {
      margin-top: 40px;
    }
    
    .books-section h2 {
      font-size: 20px;
      margin-bottom: 10px;
    }
    
    .book-list {
      list-style-type: none;
      padding: 0;
    }
    
    .book-list li {
      margin-bottom: 10px;
    }
    
    .book-list li .book-title {
      font-weight: bold;
    }
    
    .book-list li .book-status {
      color: #888;
      font-style: italic;
    }
  </style>

  <div class="profile-container">
    <img src="profile_picture.jpg" alt="Profile Picture" class="profile-picture">
    <div class="profile-info">
      <p><strong>Name:</strong> John Doe</p>
      <p><strong>Email:</strong> john.doe@example.com</p>
      <a href="#" class="logout-button">Logout</a>
    </div>
    <div class="books-section">
      <h2>Books Read</h2>
      <ul class="book-list">
        <li>
          <span class="book-title">Book 1</span>
          <span class="book-status">Completed</span>
        </li>
        <li>
          <span class="book-title">Book 2</span>
          <span class="book-status">Completed</span>
        </li>
        <!-- Add more books here -->
      </ul>
    </div>
    <div class="books-section">
      <h2>Books Being Read</h2>
      <ul class="book-list">
        <li>
          <span class="book-title">Book 3</span>
          <span class="book-status">In Progress</span>
        </li>
        <li>
          <span class="book-title">Book 4</span>
          <span class="book-status">In Progress</span>
        </li>
        <!-- Add more books here -->
      </ul>
    </div>
  </div>

</body>
</html>