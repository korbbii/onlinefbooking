<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home2.css"> 
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

.bookButton{
    background-color: #373668;
    color: white;
    padding: 15px;
    font-weight: bold;
    border: none;
    border-radius: 10px;
}

.search-form button.btn-cdetails {
    margin-left: 320px;
}

.payment-images {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.payment-images img {
    width: 80px; /* Adjust width as needed */
    height: auto;
}

.bookButton:hover{
    background-color: red;
    color: white;
    font-weight: bold;
    border: none;
}

.popup {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
}

.popup-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fefefe;
    padding: 20px; /* Adjust padding to your preference */
    width: 400px; /* Adjust width to your preference */
    border-radius: 8px; /* Adjust border-radius for rectangular or square shape */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

#paymentForm {
    width: 100%; /* Adjust width as needed */
}

.popup h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.popup .form-group {
    margin-bottom: 20px;
}

.popup label {
    display: block;
    margin-bottom: 5px;
}

.popup input[type="text"],
.popup input[type="email"],
.popup select {
    width: calc(100% - 22px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.popup button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #2d43d6;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

.popup button:hover {
    background-color: #1f2c8b;
}

#confirmPopup {
    display: none;
    position: fixed;
    z-index: 1001; /* Ensure it's above the previous popup */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
}

#confirmPopup .popup-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fefefe;
    padding: 20px;
    width: 400px;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

#paymentPopup {
    display: none;
    position: fixed;
    z-index: 1001;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
}

#paymentPopup .popup-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fefefe;
    padding: 20px;
    width: 500px;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

#paymentPopup h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

#paymentPopup .form-group {
    margin-bottom: 20px;
}

#paymentPopup label {
    display: block;
    margin-bottom: 5px;
}

#paymentPopup input[type="text"] {
    width: calc(100% - 22px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

#paymentPopup button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #2d43d6;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

#paymentPopup button:hover {
    background-color: #1f2c8b;
}

.form-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.form-group {
    flex-basis: 48%;
}

.form-buttons {
    display: flex;
    align-items: center;
}

.submit-button,
.cancel-button {
    margin-left: 10px;
}
.popup-content {
    max-width: 650px; /* Adjusted width to accommodate two columns */
}

.form-group input[type="text"]::placeholder {
    font-size: 14px; /* Adjust the font size as needed */
}

#toggleFilterButton {
    background-color: #373668; /* Green */
    border: none;
    color: white;
    padding: 8px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
}

#toggleFilterButton:hover {
    background-color: red;
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
        <form action="home.php" method="GET" class="search-form">
        <div class="form-group">
            <label for="origin">Origin&nbsp;&nbsp;   ---&nbsp;&nbsp;   Destination</label>
        </div>
        <div class="form-group formm-group">
            <button type="submit" class="btn-cdetails" onclick="window.location.href='home2.php';">Change Details</button>
        </div>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Departure Date/Time -- Arrival Date/Time | (Number of Passenger))</p>
        </form>
    </div>
</section>
<section id="additional-search-boxes">
    <div class="container">
        <div class="additional-search-box">
        <h6>Closest departure/arrival date/time and price to preferred option</h6>
            <form action="#" method="GET" class="additional-search-form">
            </form>
        </div>
        <div class="additional-search-box">
        <h6>Closest departure/arrival date/time and price to preferred option</h6>
            <form action="#" method="GET" class="additional-search-form">
            </form>
        </div>
        <div class="additional-search-box">
        <h6>Closest departure/arrival date/time and price to preferred option</h6>
            <form action="#" method="GET" class="additional-search-form">
            </form>
        </div>
        <div class="additional-search-box">
        <h6>Closest departure/arrival date/time and price to preferred option</h6>
            <form action="#" method="GET" class="additional-search-form">
            </form>
        </div>
        <div class="additional-search-box">
        <h6>Closest departure/arrival date/time and price to preferred option</h6>
            <form action="#" method="GET" class="additional-search-form">
            </form>
        </div>
    </div>
</section>
<br>&nbsp;&nbsp;&nbsp;&nbsp;<button id="toggleFilterButton">Filter</button>
    <div id="filterOptions" style="display: none;">
<section id="main-content">
    <div class="container">
        <div id="filters">
            <!-- Filters content -->
            <div class="filter-group">
                <h3>Stops:</h3>
                <label><input type="radio" name="stops" value="direct"> Direct</label>
                <label><input type="radio" name="stops" value="transit"> Transit</label>
                <label><input type="radio" name="stops" value="one-stop"> One Stop</label>
            </div>
            <div class="filter-group">
                <br><br><h3>Price:</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label for="min-price">Minimum :</label>
                        <input type="text" id="min-price" name="min-price"><br>
                        <br><label for="max-price">Maximum:</label>
                        <input type="text" id="max-price" name="max-price">
                    </div>
                    </div>
                </div>
            </div>
            <div class="filter-group">
                <br><h3>Airlines:</h3>
                <label><input type="checkbox" name="airline" value="cebu-pacific"> Cebu Pacific</label>
                <label><input type="checkbox" name="airline" value="philippine-airlines"> Philippine Airlines</label>
                <label><input type="checkbox" name="airline" value="air-asia"> Air Asia</label>
            </div>
        </div>
</div>
    </div>
</section>
<section id="main-content">
<section id="additional-search-boxes">
    <div class="container">
        <div class="additional-search-box">
        <p>RECOMMENDED<br>(details)</p>
            <form action="#" method="GET" class="additional-search-form">
            </form>
        </div>
        <div class="additional-search-box">
        <p>RECOMMENDED<br>(details)</p>
            <form action="#" method="GET" class="additional-search-form">
            </form>
        </div>
        <div class="additional-search-box">
        <p>RECOMMENDED<br>(details)</p>
            <form action="#" method="GET" class="additional-search-form">
            </form>
        </div>
            <div class="flight-cards">
                <div class="flight-card">
                    <img src="pal.png" alt="Flight">
                    <p>Airlines: Philippine Airlines</p>
                    <p>From: Origin</p>
                    <p>To: Destination</p>
                    <p>Departure Time: 00:00</p>
                    <p>Arrival Time: 00:00</p>
                    <p>Transit: XXX</p>
                    <p>Price: XXX</p>
                    <button id="bbutton" class="bookButton">Book&nbsp;Now</button>
                </div>
                <div class="flight-card">
                    <img src="aasia.png" alt="Flight">
                    <p>Airlines: Air Asia</p>
                    <p>From: Origin</p>
                    <p>To: Destination</p>
                    <p>Departure Time: 00:00</p>
                    <p>Arrival Time: 00:00</p>
                    <p>Transit: XXX</p>
                    <p>Price: XXX</p>
                    <button id="bbutton" class="bookButton">Book&nbsp;Now</button>
                </div>
            </div>
        </div>
    </section>
    <div class="popup" id="popup">
        <div class="popup-content">
            <span class="close"></span>
            <h2>Enter Passenger Details</h2><br>
            <form id="passengerForm" class="form-inside-popup">
                <!-- Your form fields go here -->
                <div class="form-group">
                    <input type="text" id="firstName" name="firstName" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <select id="title" name="title">
                        <option value="Mr">Mr</option>
                        <option value="Ms">Ms</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" id="nationality" name="nationality" placeholder="Nationality">
                </div>
                <div class="form-group">    
                    <input type="email" id="email" name="email" placeholder="Email address">
                </div>
                <button type="submit" class="submit-button">Next</button>
                <button type="button" class="cancel-button">Cancel</button>
            </form>
        </div>
    </div>
    <div class="popup" id="confirmPopup">
    <div class="popup-content"><br>
        <h3>Are you sure you want to book?</h3><br><br>
        <form id="bookingConfirmationForm" class="form-inside-popup">
            <label for="fullName">Full Name:
            </label>
            <label for="email">Email:
            </label>
            <label for="nationality">Nationality:
            </label>
            <label for="from">From:
            </label>
            <label for="to">To:
            </label>
            <label for="date">Date:
            </label>
            <label for="time">Time:
            </label>
            <label for="airlines">Airlines:
            </label>
            <label for="airport">Airport:
            </label>
            <label for="airport">Price:
            </label>
            <br><br>
            <button type="submit" class="submit-button">Proceed to Payment</button>
            <button type="button" class="cancel-button">Cancel</button>
        </form>
    </div>
</div>
<div class="popup" id="paymentPopup">
    <div class="popup-content">
        <center><h2> Accepted Payments </h2></center>
    <div class="payment-images">
                <img src="gcash.png" alt="Image 1">
                <img src="maya.png" alt="Image 2">
                <img src="paypal.png" alt="Image 3">
                <img src="visa.png" alt="Image 4">
                <img src="cebuana.png" alt="Image 5">
            </div><br>
        <h2>Enter Payment Details</h2><br>
        <form id="paymentForm" class="form-inside-popup">
            <div class="form-row">
                <div class="form-group">
                    <input type="text" id="firstName" name="firstName" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input type="text" id="creditCard" name="creditCard" placeholder="Credit Card Number">
                </div>
                <div class="form-group">
                    <input type="text" id="securityCode" name="securityCode" placeholder="Security Code">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input type="text" id="expiration" name="expiration" placeholder="Expiration Date">
                </div>
            </div>
            <button type="submit" class="submit-button">Confirm Payment</button>
            <button type="button" class="cancel-button">Cancel</button>
        </form>
    </div>
</div>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    var bookButtons = document.querySelectorAll(".bookButton");
    var modal = document.getElementById("popup");
    var confirmPopup = document.getElementById("confirmPopup");
    var paymentPopup = document.getElementById("paymentPopup");
    var closeButton = modal.querySelector(".close");
    var cancelButton = modal.querySelector(".cancel-button");
    var confirmCancelButton = confirmPopup.querySelector(".cancel-button");
    var form = modal.querySelector("#passengerForm");
    var confirmForm = confirmPopup.querySelector("#bookingConfirmationForm");
    var paymentForm = paymentPopup.querySelector("#paymentForm");
    var proceedButton = confirmForm.querySelector(".submit-button");
    var paymentCancelButton = paymentForm.querySelector(".cancel-button");

    function openModal() {
        modal.style.display = "flex";
        confirmPopup.style.display = "none"; // Hide other popups
        paymentPopup.style.display = "none";
    }

    function closeModal() {
        modal.style.display = "none";
    }

    function openConfirmPopup() {
        confirmPopup.style.display = "flex";
        modal.style.display = "none"; // Hide other popups
        paymentPopup.style.display = "none";
    }

    function closeConfirmPopup() {
        confirmPopup.style.display = "none";
    }

    function openPaymentPopup() {
        paymentPopup.style.display = "flex";
        modal.style.display = "none"; // Hide other popups
        confirmPopup.style.display = "none";
    }

    function closePaymentPopup() {
        paymentPopup.style.display = "none";
    }

    bookButtons.forEach(function(button) {
        button.addEventListener("click", function(event) {
            event.preventDefault();
            openModal();
        });
    });

    closeButton.addEventListener("click", closeModal);
    cancelButton.addEventListener("click", closeModal);
    confirmCancelButton.addEventListener("click", closeConfirmPopup);

    form.addEventListener("submit", function(event) {
        event.preventDefault();
        openConfirmPopup();
    });

    proceedButton.addEventListener("click", function(event) {
        event.preventDefault();
        closeConfirmPopup();
        openPaymentPopup();
    });

    paymentCancelButton.addEventListener("click", function(event) {
        event.preventDefault();
        closePaymentPopup();
    });

    paymentForm.addEventListener("submit", function(event) {
        event.preventDefault();
        // Handle the payment confirmation here
        alert("Payment confirmed!");
        closeModal();
        closePaymentPopup();
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var toggleFilterButton = document.getElementById("toggleFilterButton");
    var filterOptions = document.getElementById("filterOptions");

    toggleFilterButton.addEventListener("click", function() {
        // Toggle display of filter options
        if (filterOptions.style.display === "none") {
            filterOptions.style.display = "block";
        } else {
            filterOptions.style.display = "none";
        }
    });
});
</script>
<footer></footer>
</body>
</html>
