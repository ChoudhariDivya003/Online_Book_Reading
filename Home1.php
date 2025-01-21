<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Good Reads</title>
    <link rel="stylesheet" href="page-1.css">
 
</head>

<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="page1.php" class="active">Home</a></li>
                <li><a href="Books.php">Books</a></li>
                <li><a href="Contact Us.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>
     
    <div class="First">
        <div class="Logo">
            <img src="bookweb/Pink Watercolour Flower Shop Logo.jpg" class="bgimage">
        </div>

        <div class="Intro">
            <h1>Good Reads</h1><br>
            <p> "You know you've read a good book when  <br>
                 you turn last page and feel a little<br>
                 as if you have lost a friend"<br>
                 -Jules Verne<br>
                 <br>
                 "So please oh please,we beg ,we pray,go<br>
                 throw your TV set away,and in its place you<br>
                 can install a lovely bookshelf on the wall"<br>
                 -Roald Dahal<br>
                 <br>
                 "There is more treasure in books than in all<br>
                 the pirates' loot on Treasure Island"<br>
                 -Walt Disney<br>


            </p>
        </div>

    </div>




       

          



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


  <footer >
        <p>&copy; 2023 Your Website. All rights reserved.</p>
        <button class="about-button">
        <a href="about.html" class="about">About Us</a> </button>
    
    </footer>

    <style>
     footer{
        
        width: 100% ;
        height: 200px;
        background-color: #c7b1c4;

           }
    
        /* Style the "About Us" button */
       .about-button {
        display:flex;
        margin-left: 50px;
       margin-top: 50px;
       width: 80px;
       height: 30px;
        background-color: rgb(153, 146, 146);
        border-radius: 5px;
        
       }

       .about-button:hover {
        background-color: #e4e8ec;
        }

        .about{
            color: #514c4c;
        text-decoration: none;
        padding: 5px 10px;
        }


    .search{
  float: right;
  padding: 6px;
  border: none;
  margin-bottom: 28px; 
  margin-right: 20px;
  font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .search {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .search {
    border: 1px solid #ccc;
  }
}
    </style>

</body>
</html>


