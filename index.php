<?php
$pageTitle = "PetBook";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <a class="logo" href="index.php">🐾 PetBook</a>
        <nav>
            <a href="#services">Services</a>
            <a href="#pets">My Pets</a>
            <a href="#booking">Book Appointment</a>
            <a href="#notifications">Notifications</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <p class="eyebrow">YOUR PET'S CARE, MADE SIMPLE</p>
            <h1>Every pet deserves<br>a little extra love.</h1>
            <p>Book grooming and veterinary appointments and
               keep your pet's care organized in one place.</p>
            <a class="button" href="#booking">Book an Appointment</a>
        </section>

        <section id="services" class="section">
            <h2>Care for Every Paw</h2>
            <div class="service-grid">
                <article class="service-card">
                    <span>🛁</span>
                    <h3>Pet Grooming</h3>
                    <p>Keep your furry friend clean and comfortable.</p>
                </article>
                <article class="service-card">
                    <span>🩺</span>
                    <h3>Veterinary Care</h3>
                    <p>Organize checkups and essential pet care.</p>
                </article>
                <article class="service-card">
                    <span>📋</span>
                    <h3>Pet Records</h3>
                    <p>Keep pet profiles and service histories together.</p>
                </article>
            </div>
        </section>

        <section id="pets" class="section">
            <h2>Pet Profile Manager</h2>
            <p class="section-intro">
                Add your pet's details to keep them organized.
            </p>

            <form id="petForm" class="form-card">
                <label for="petName">Pet's Name</label>
                <input id="petName" name="petName" required
                       placeholder="e.g. Mochi">

                <label for="petType">Pet Type</label>
                <select id="petType" name="petType" required>
                    <option value="">Choose a pet type</option>
                    <option>Dog</option>
                    <option>Cat</option>
                    <option>Bird</option>
                    <option>Rabbit</option>
                    <option>Other</option>
                </select>

                <label for="petBreed">Breed</label>
                <input id="petBreed" name="petBreed"
                       placeholder="e.g. Shih Tzu">

                <label for="petAge">Age</label>
                <input id="petAge" name="petAge" type="number"
                       min="0" max="100" placeholder="Age in years">

                <button class="button" type="submit">Add Pet</button>
                <p id="petMessage" role="status"></p>
            </form>

            <div id="petList" class="service-grid"></div>
        </section>

        <section id="booking" class="section booking">
            <h2>Book an Appointment</h2>
            <p class="section-intro">
                Request a grooming or veterinary appointment.
            </p>

            <form id="bookingForm" class="form-card">
                <label for="owner">Pet Owner's Name</label>
                <input id="owner" name="owner" required
                       placeholder="Enter your full name">

                <label for="bookingPet">Pet's Name</label>
                <input id="bookingPet" name="bookingPet" required
                       placeholder="Enter your pet's name">

                <label for="service">Choose a Service</label>
                <select id="service" name="service" required>
                    <option value="">Select a service</option>
                    <option value="Grooming">Pet Grooming</option>
                    <option value="Veterinary">Veterinary Care</option>
                </select>

                <label for="date">Appointment Date</label>
                <input type="date" id="date" name="date" required>

                <label for="time">Appointment Time</label>
                <input type="time" id="time" name="time" required>

                <label for="phone">Mobile Number (optional)</label>
                <input type="tel" id="phone" name="phone"
                       placeholder="e.g. 09XXXXXXXXX">

                <button class="button" type="submit">
                    Request Appointment
                </button>
                <p id="bookingMessage" role="status"></p>
            </form>

            <h3>Your Appointment Requests</h3>
            <div id="appointmentList" class="service-grid"></div>
        </section>

        <section id="notifications" class="section">
            <h2>SMS Notifications</h2>
            <div class="form-card">
                <p>
                    PetBook can prepare reminder messages for appointment
                    updates. This demo does not send real SMS messages.
                </p>
                <label for="notificationPhone">Mobile Number</label>
                <input id="notificationPhone" type="tel"
                       placeholder="09XXXXXXXXX">

                <label for="notificationMessage">Message</label>
                <textarea id="notificationMessage" rows="4"
                          placeholder="Your appointment reminder..."></textarea>

                <button id="previewSms" class="button" type="button">
                    Preview SMS
                </button>
                <p id="smsPreview" role="status"></p>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2026 PetBook. Made with love for pets. 🐾</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>