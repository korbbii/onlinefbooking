<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="retrieve.css"> 
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
                    <li><a href="home2.php">Flights</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="search">
    <div class="container">
        <!-- Search form -->
        <form action="search.php" method="GET" class="search-form" onsubmit="return openPopupForm()">
            <div class="form-group">
                <p>Please fill the form and we'll help you</p>
            </div>
            <div class="form-group">
                <input type="text" id="customer_name" name="customer_name" placeholder="Customer's Name">
            </div>
            <div class="form-group">
                <input type="text" id="origin" name="origin" placeholder="Origin">
            </div>
            <div class="form-group">
                <input type="text" id="destination" name="destination" placeholder="Destination">
            </div>
            <div class="form-group">
            <h5 for="arrival_date">Arrival Date</h5>
                <input type="date" id="arrival_date" name="arrival_date" placeholder="Arrival Date">
            </div>
            <div class="form-group">
            <h5 for="departure_date">Departure Date</h5>
                <input type="date" id="departure_date" name="departure_date" placeholder="Departure Date">
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email address">
            </div>
            <div class="form-group">
                <input type="tel" id="mobile_number" name="mobile_number" placeholder="Mobile number">
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>
<div id="popupOverlay"></div>
<div id="popupForm" class="popup">
    <div class="popup-content">
        <br><h2>Flight Ticket Details</h2><br>
        <p>Date booked: <span id="dateBooked"></span></p>
        <p>Booked code: <span id="bookedCode"></span></p><br><br>
        <p>Full name: <span id="fullName"></span></p>
        <p>Email: <span id="email"></span></p>
        <p>Nationality: <span id="nationality"></span></p>
        <p>From: <span id="from"></span></p>
        <p>To: <span id="to"></span></p>
        <p>Date: <span id="flightDate"></span></p>
        <p>Time: <span id="flightTime"></span></p>
        <p>Airlines: <span id="airlines"></span></p>
        <p>Airport: <span id="airport"></span></p><br><br>
        <button onclick="location.href='home.php'">Home</button>
    </div>
</div>
    <script>
function openPopupForm() {
    document.getElementById("popupForm").style.display = "block";
    document.getElementById("popupOverlay").style.display = "block"; // Show overlay
    // Prevent the default form submission behavior
    return false;
}

function closePopupForm() {
    document.getElementById("popupForm").style.display = "none";
    document.getElementById("popupOverlay").style.display = "none"; // Hide overlay
}

    </script>
    <br><br>
    <footer>
    </footer>
</body>
</html>
