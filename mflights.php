<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myflights</title>
    <link rel="stylesheet" href="mflights.css"> 
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
            <form action="mflights.php" method="GET" class="search-form">
                <div class="form-group">
                    <p> Please fill the form below. So, we can easily check your booking.</p><br>
                </div>
                <div class="form-group">
                    <h3 for="email">Email:</h3>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <h3 for="code">Code:</h3>
                    <input type="text" id="code" name="code" placeholder="Enter your code">
                </div>
                <div class="form-group">
                <button type="button" class="action-button forgot-button" onclick="window.location.href='retrieve.php'">Forgot your flight code?</button>
                <button type="button" class="find-flight-button" onclick="openPopupForm()">Find Flight</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Popup HTML -->
    <div id="popupOverlay"></div>
    <div id="popupForm" class="popup">
        <div class="popup-content">
            <img src="contactus.png" alt="Airplane Image" class="airplane-image">
            <h4><b>Sorry, we're unable to find your flight.</h4></b>
            <p>Please enter the correct information. <br>If you need assistance, please don’t hesitate to contact us.</p>
            <div class="contact-us">
                <button onclick="window.location.href='contact.php'">Contact Us</button>
                <button onclick="closePopupForm()">Cancel</button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        function openPopupForm() {
            document.getElementById("popupForm").style.display = "flex";
            document.getElementById("popupOverlay").style.display = "block"; // Show overlay
        }

        function closePopupForm() {
            document.getElementById("popupForm").style.display = "none";
            document.getElementById("popupOverlay").style.display = "none"; // Hide overlay
        }
    </script>
    <footer>
    </footer>
</body>
</html>
