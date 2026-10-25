
<?php
$pageTitle = "PetBook";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?> | Pet Care Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <div class="container">
        <h1>PetBook</h1>
        <p>Your Pet Care and Appointment Companion</p>

        <nav>
            <a href="#home">Home</a>
            <a href="#pets">Pet Profiles</a>
            <a href="#appointments">Appointments</a>
            <a href="#notifications">Notifications</a>
        </nav>
    </div>
</header>

<main class="container">

    <section id="home" class="section">
        <h2>Welcome to PetBook!</h2>
        <p>
            PetBook helps pet owners organize pet profiles and request
            appointments with pet grooming shops and veterinary clinics.
        </p>
    </section>

    <section id="pets" class="section">
        <h2>Pet Profiles</h2>
        <p>Manage pet profiles and keep each pet's information organized.</p>

        <form id="petForm">
            <div class="form-group">
                <label for="petName">Pet Name</label>
                <input
                    type="text"
                    id="petName"
                    name="petName"
                    placeholder="Enter pet name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="petType">Pet Type</label>
                <select id="petType" name="petType" required>
                    <option value="">Select pet type</option>
                    <option value="Dog">Dog</option>
                    <option value="Cat">Cat</option>
                    <option value="Bird">Bird</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <button class="button" type="submit">Add Pet Profile</button>
            <p id="petMessage" role="status" aria-live="polite"></p>
        </form>

        <div id="petList" class="card-list"></div>
    </section>

    <section id="appointments" class="section">
        <h2>Book an Appointment</h2>
        <p>Enter the details below to prepare a pet care appointment request.</p>

        <form id="appointmentForm">
            <div class="form-group">
                <label for="ownerName">Pet Owner's Name</label>
                <input
                    type="text"
                    id="ownerName"
                    name="ownerName"
                    placeholder="Enter owner name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="appointmentPet">Pet Name</label>
                <input
                    type="text"
                    id="appointmentPet"
                    name="appointmentPet"
                    placeholder="Enter pet name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="service">Select Service</label>
                <select id="service" name="service" required>
                    <option value="">Choose a service</option>
                    <option value="Pet Grooming">Pet Grooming</option>
                    <option value="Veterinary Checkup">Veterinary Checkup</option>
                    <option value="Bath and Haircut">Bath and Haircut</option>
                    <option value="Vaccination">Vaccination</option>
                </select>
            </div>

            <div class="form-group">
                <label for="appointmentDate">Appointment Date</label>
                <input
                    type="date"
                    id="appointmentDate"
                    name="appointmentDate"
                    required
                >
            </div>

            <div class="form-group">
                <label for="phone">Mobile Number (optional)</label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    placeholder="09XXXXXXXXX"
                >
            </div>

            <button class="button" type="submit">Book Appointment</button>
            <p id="bookingMessage" role="status" aria-live="polite"></p>
        </form>

        <h3>Appointment List</h3>
        <div id="appointmentList" class="card-list"></div>
    </section>

    <section id="notifications" class="section">
        <h2>SMS Notifications</h2>
        <p>
            Prepare a reminder message for an appointment. This demo only
            displays a preview and does not send real SMS messages.
        </p>

        <form id="notificationForm">
            <div class="form-group">
                <label for="notificationPhone">Mobile Number</label>
                <input
                    type="tel"
                    id="notificationPhone"
                    name="notificationPhone"
                    placeholder="09XXXXXXXXX or +639XXXXXXXXX"
                    required
                >
            </div>

            <div class="form-group">
                <label for="notificationMessage">Message (maximum 160 characters)</label>
                <textarea
                    id="notificationMessage"
                    name="notificationMessage"
                    rows="4"
                    maxlength="160"
                    placeholder="Enter your reminder message"
                    required
                ></textarea>
            </div>

            <button id="previewSms" class="button" type="button">
                Preview SMS
            </button>

            <p id="smsPreview" role="status" aria-live="polite"></p>
        </form>
    </section>

</main>

<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> PetBook. Pet care made easier.</p>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>
