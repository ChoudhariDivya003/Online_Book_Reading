<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Good Reads</title>
    <link rel="stylesheet" href="page-1.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="page1.php">Home</a></li>
                <li><a href="Books.php" class="active">Books</a></li>
                <li><a href="Contact Us.php">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="row1">
        <button class="Genre" type="button"><a href="Fictional.html" class="type">Fictional</a></button>
        <button class="Genre" type="button"><a href="scifi.html" class="type">Sci-Fi</a></button>
        <button class="Genre" type="button"><a href="mysthriller.html" class="type">Mystery</a></button>
        <button class="Genre" type="button"><a href="romance.html" class="type">Romance</a></button>
        <button class="Genre" type="button"><a href="historical.html" class="type">Historical</a></button>
        </div>

        <div class="row2">
            <button class="Genre" type="button" style="text-decoration: none;"><a href="fantasy.html" class="type">Fantasy</a></button>
            <button class="Genre" type="button"><a href="motivational.html" class="type">Motivational</a></button>
            <button class="Genre" type="button"><a href="drama.html" class="type">Drama</a></button>
            <button class="Genre" type="button"><a href="horror.html" class="type">Horror</a></button>
            </div>
    </main>

    <section>
      <div class="book-list">
        <div class="book">
          <img src="bookweb/romeo.jpg" alt="Book 1">
          <h3 class="book-title">Romeo and Juliet</h3>
          <p class="book-author">William Shakespeare</p>
        </div>
        <div class="book">
            <img src="bookweb/It-Ends-With-Us-.webp" alt="Book 2">
            <h3 class="book-title">It Ends With Us</h3>
            <p class="book-author">Colleen Hoover</p>
        </div>
        <div class="book">
            <img src="bookweb/harry potter.jpg" alt="Book 3">
            <h3 class="book-title">Harry Potter</h3>
            <p class="book-author">J.K.Rowling</p>
        </div>
      </div>
    </section>
    <section>
      <div class="book-list">
        <div class="book">
          <img src="bookweb/alice.jpg" alt="Book 1">
          <h3 class="book-title">Alchemist</h3>
          <p class="book-author">James Clear</p>
        </div>
        <div class="book">
            <img src="bookweb/hobbit.jpg" alt="Book 2">
            <h3 class="book-title">Hobbit</h3>
            <p class="book-author">J.R.R.Tolkien</p>
        </div>
        <div class="book">
            <img src="bookweb/pride-prejudice-13.jpg" alt="Book 3">
            <h3 class="book-title">Pride and Prejudice</h3>
            <p class="book-author">Jane Austen</p>
        </div>
        <div class="book">
          <img src="bookweb/time machine.jpg" alt="Book 3">
          <h3 class="book-title">Time Machine</h3>
          <p class="book-author">H.G.Wells</p>
      </div>
      </div>
    </section>

    <style>
        /* Style the main content */
  main {
    padding: 20px;
  }



  .row1{
    display: flex;
    justify-content: center;
  }

  .row2{
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }

  .Genre{
    width: 200px;
    background-color: #af96ad;
    border: none;
    color: white;
    border-radius: 12px;
    padding: 15px;
    text-align: center;
    display: inline-block;
    font-size: 16px;
    justify-content: space-between;
    margin-left: 20px;
    
  }

  .Genre:hover{
    background-color: #d0adc7;
  }

  .type{
    list-style: none;
    text-decoration: none;
    color: white;
  }
  




  .book-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
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