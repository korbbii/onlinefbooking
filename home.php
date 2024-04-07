<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="hme.css"> 
    <style>
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

.my-booked-flights {
    background-color: transparent;
    color: black;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    padding: 11px 20px; 
    font-size: 13px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-left: -100px; /* Adjust the margin as needed */
}

.my-booked-flights:hover {
    background-color: #1f2e9b;
    color: white;
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
                    <li><a href="mflights.php">My Flights</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="search">
    <div class="container">
        <!-- Search form -->
        <form action="home2.php" method="GET" class="search-form">
            <div class="form-group">
                <label for="origin">From</label>
                <input type="text" id="origin" name="origin" placeholder="Enter origin">
            </div>
            <div class="form-group">
                <label for="destination">To</label>
                <input type="text" id="destination" name="destination" placeholder="Enter destination">
            </div>
            <div class="form-group">
                <label for="departureDate">Departure Date</label>
                <input type="date" id="departureDate" name="departureDate">
            </div>
            <div class="form-group">
                <label for="returnDate">Arrival Date</label>
                <input type="date" id="returnDate" name="returnDate">
            </div>
            <div class="form-group"><br>
            <input type="submit" class="btn-cdetails" value="Search" onclick="window.location.href='home2.php';">
            </div>
        </form>
    </div>
</section>

    <br><br>
    <section id="featured">
    <div class="container"><br>
        <h2>Partner Airlines</h2><br><br>
        <div class="flight-card">
            <img src="aasia.png" alt="Flight">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="cpacific.png" alt="Flight">&nbsp;&nbsp;&nbsp;&nbsp;<img src="pal.png" alt="Flight">
        </div>
    </div>
</section>
    <footer>
    </footer>
</body>
</html>
