<?php
session_start();

// Function to check if the user is logged in
function checkUserLoggedIn() {
    // Implement your own logic here to check if the user is logged in
    // For example, you can check if a session variable is set or if the user has a valid authentication token

    // Return true if the user is logged in, otherwise return false
    return isset($_SESSION['loggedin']);
}

// Check if the user is logged in
$isLoggedIn = checkUserLoggedIn();

// If the user is not logged in, redirect to the login page and display an alert message
if (!$isLoggedIn) {
    echo '<script>alert("Please login first to access this page!"); window.location.href = "index.php";</script>';
    exit;
}
?>

<html>
	<head>
		<title>KAru</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="login.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="home.php">HOME</a></h1>
						<nav>
							<a href="#menu">Phonebook</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Phonebook</h2>
							<ul class="links">
								<li><a href="index.php">Home</a></li>
								<li><a href="logout.php">Log out</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Wrapper -->
                        		  <title>Phonebook</title>
                          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
                          <style>
                            /* Custom CSS */
                            .contact-table {
                              border: 1px solid #ddd;
                              border-radius: 0.25rem;
                              padding: 10px;
                              box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                            }
                        
                            .contact-table thead th {
                              border-right: 1px solid #ddd;
                              background-color: blanchedalmond;;
                              color: #000;
                              padding: 10px;
                            }
                        
                            .contact-table tbody td {
                              border-right: 1px solid #ddd;
                              padding: 10px;
                            }
                        
                            .contact-table tbody tr {
                              border-bottom: 1px solid #ddd;
                            }
                        
                            .contact-table thead th:last-child,
                            .contact-table tbody td:last-child {
                              border-right: none;
                            }
                        
                            .form-control {
                            margin: 2%;
                            }
                          </style>
                          <div class="container">
                            <h1 class="text-center">Phonebook</h1>
                            <div class="row">
                              <div class="col-md-6">
                                <form id="contactForm">
                                  <input type="hidden" id="contactId">
                                  <div class="form-group" style = "width: 300px;">
                                    <label for="firstName">First Name:</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
                                  </div>
                                  <div class="form-group" style = "width: 300px;">
                                    <label for="lastName">Last Name:</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
                                  </div>
                                  <div class="form-group" style = "width: 300px;">
                                    <label for="middleName">Middle Name:</label>
                                    <input type="text" class="form-control" id="middleName" placeholder="Enter middle name">
                                  </div>
                                  <div class="form-group" style = "width: 300px;">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter address">
                                  </div>
                                  <div class="form-group" style = "width: 300px;">
                                    <label for="phoneNumber">Phone Number:</label>
                                    <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number">
                                  </div>
                                  <div class="form-group" style = "width: 300px;">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                  </div>
                                  <div class="form-group" style = "width: 300px;">
                                    <label for="notes">Notes:</label>
                                    <textarea class="form-control" id="notes" placeholder="Enter notes"></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                              </div>
                              <div class="col-md-6">
                                <h2 class="text-center">Contact List</h2>
                                <input type="text" class="form-control" id="searchInput" placeholder="Search">
                                <ul id="contactList" class="list-group" style="display: -ms-flexbox;
                                
                                display: flex;
                                -ms-flex-direction: column;
                                flex-direction: row-reverse;
                                padding-left: 0;
                                margin-bottom: 0;
                                border-radius: 0.25rem;
                                flex-wrap: nowrap;
                                justify-content: center; margin-right: 69px;"></ul>
                              </div>
                            </div>
                          </div>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <script src="script.js"></script>
	</body>
</html>
