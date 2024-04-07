<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css"> 
    <style>
        
#contact .container {
    display: flex;
    justify-content: space-around; /* Align items with equal space around */
    margin-top: -200px;
    margin-bottom: 30px;
}

#contact .container div {
    display: flex;
    align-items: center; /* Align items vertically in the center */
    margin-top: 50px;
    margin-bottom: 30px;
}

.contact-item {
    text-align: center; /* Center text horizontally */
}

.contact-item img {
    margin-bottom: 10px; /* Add space between image and text */
}

footer {
    background: #373668;
    color: #fff;
    padding: 2rem 0; /* Increased padding */
    text-align: center;
}

footer p {
    margin: 0;
    padding: 0;
    font-size: 1.2rem; /* Increased font size */
}
        
    </style>
</head>
<body>
    <header>
        <div class="container">
            <img src="user.png" alt="User Image" class="user-image">
            <h1>Travel Swift</h1>
            <!-- Navigation menu -->
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="home2.php">Flights</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="search">
        <div class="container">
            <!-- Search form -->
            <form action="home.php" method="GET" class="search-form">
                <div class="form-group">
                </div>
                <div class="reach-out-form">
                    <div class="form-group">

                        <input type="text" id="name" name="name" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <textarea id="concerns" name="concerns" rows="4" placeholder="Your concerns"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </section>
            </form>
        </div>
    </section>
    <br><br>
    <section id="featured">
        <div class="container">
        </div>
    </section>
    <br><br>
    <section id="contact">
        <div class="container">
            <div>
                <img src="email.png" id="email" style="width: 140px; height: 85px;"><p>Email: travelswift@gmail.com</p>
            </div>
            <div>
                <img src="phone.png" id="phone" style="width: 60px; height: 50px;"><p>Phone: +0909 587 3124</p>
            </div>
        </div>
    </section>

    <footer>
    </footer>
</body>
</html>
