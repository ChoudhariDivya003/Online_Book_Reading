<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page-1.css">
    <title>Fantasy Books</title>

</head>
<body>

  <header>
    <nav>
        <ul>
            <li><a href="page1.html">Home</a></li>
            <li><a href="Books.html" class="active">Books</a></li>
            <li><a href="Contact Us.html">Contact Us</a></li>
        </ul>
    </nav>
</header>

    <section>
      <div class="book-list">
        
        <div class="book">
            <img src="bookweb/wuthering.jpg" alt="Book 2">
            <h3 class="book-title"><a href="PDF/Wuthering-Heights.pdf" class="name">Wuthering Heights</a></h3>
            <p class="book-author">Emily Bronte</p>
        </div>
        <div class="book">
            <img src="bookweb/invisible.jpg" alt="Book 3">
            <h3 class="book-title"><a href="PDF/The-Invisible-Man.pdf" class="name">The Invisible Man</a></h3>
            <p class="book-author">H.G.Wells</p>
        </div>
      </div>
    </section>

    <style>
       .book-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 25px;
  }
  
  .book {
    margin: 10px;
    padding: 10px;
    background-color: #bcaaab;
    border-radius: 5px;
    text-align: center;
    width: 200px;
    height: 300px;
  }
  
  .book img {
    width: 125px;
    border-radius: 5px;
    margin-top: 25px;

  }

  .name{
    list-style: none;
    text-decoration: none;
    color: black;
  }
  
  .book-title {

    margin-top: 10px;
    font-size: 18px;
    font-weight: bold;
  }
  
  .book-author {
    margin-top: 5px;
    font-size: 14px;
  }
    </style>
</body>
</html>