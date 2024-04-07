<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="about.css"> 
    <style>
        #contact .container div {
            margin-left: 20px
            display: flex;
            align-items: center;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        #contact .container img {
            margin-right: 10px;
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
                    <li><a href="mflights.php">Flights</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="search">
        <div class="container">
            <!-- Search form -->
            <form action="search.php" method="GET" class="search-form">
                <div class="form-group">
                    <label for="origin">About Us</label>
                </div>
            </form>
        </div>
    </section>
    <br><br>
    <section id="featured">
        <div class="container">
            <p>Welcome to <b>Travel Swift</b>, your go-to platform for easy and reliable flight bookings! <br>As proud partners of <b>Cebu Pacific</b>, <b>Air Asia</b>, and <b>Philippine Airlines (PAL)</b>, <br>we provide you with the best deals and a seamless booking experience. <br>Book with us for a safe and comfortable journey every time!</p>
        </div>
    </section>
    <br><br>
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions or inquiries, feel free to contact us:</p><br>
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
