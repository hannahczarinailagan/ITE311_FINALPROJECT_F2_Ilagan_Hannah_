
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetBook | Pet Care Made Easy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <div class="container nav-container">
            <a href="#home" class="logo">🐾 PetBook</a>

            <nav aria-label="Main navigation">
                <a href="#home">Home</a>
                <a href="#services">Services</a>
                <a href="#pets">My Pets</a>
                <a href="#appointments">Appointments</a>
                <a href="#notifications">Notifications</a>
            </nav>
        </div>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="container hero-content">
                <div>
                    <p class="eyebrow">YOUR PET'S CARE COMPANION</p>
                    <h1>Better care for your <span>best friend.</span></h1>
                    <p class="hero-description">
                        Manage your pet profiles, book grooming and veterinary
                        appointments, and keep track of important pet care details
                        in one convenient place.
                    </p>
                    <a href="#appointments" class="btn btn-primary">
                        Book an Appointment
                    </a>
                </div>

                <div class="hero-card">
                    <div class="pet-illustration">🐶</div>
                    <h2>Happy Pets, Happy Hearts</h2>
                    <p>Making every visit a little easier.</p>
                </div>
            </div>
        </section>

        <section id="services" class="section">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">WHAT WE OFFER</p>
                    <h2>Pet Care Services</h2>
                    <p>Everything your furry companion needs.</p>
                </div>

                <div class="service-grid">
                    <article class="service-card">
                        <div class="service-icon">✂️</div>
                        <h3>Pet Grooming</h3>
                        <p>Keep your pet clean, comfortable, and looking their best.</p>
                    </article>

                    <article class="service-card">
                        <div class="service-icon">🩺</div>
                        <h3>Veterinary Care</h3>
                        <p>Arrange checkups and keep important health details organized.</p>
                    </article>

                    <article class="service-card">
                        <div class="service-icon">💉</div>
                        <h3>Vaccination Tracking</h3>
                        <p>Record vaccination details and important care dates.</p>
                    </article>

                    <article class="service-card">
                        <div class="service-icon">⭐</div>
                        <h3>Loyalty Rewards</h3>
                        <p>Make repeat visits more rewarding for you and your pet.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="pets" class="section section-soft">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">YOUR FURRY FAMILY</p>
                    <h2>Pet Profile Manager</h2>
                    <p class="section-description">
                        Keep your pets' details organized in one place.
                    </p>
                </div>

                <div class="content-card">
                    <form id="petForm">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="petName">Pet Name</label>
                                <input
                                    type="text"
                                    id="petName"
                                    name="petName"
                                    placeholder="e.g. Mochi"
                                    required
                                >
                            </div>

                            <div class="form-group">
                                <label for="petType">Pet Type</label>
                                <select id="petType" name="petType" required>
                                    <option value="">Choose pet type</option>
                                    <option value="Dog">Dog</option>
                                    <option value="Cat">Cat</option>
                                    <option value="Rabbit">Rabbit</option>
                                    <option value="Bird">Bird</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="petBreed">Breed</label>
                                <input
                                    type="text"
                                    id="petBreed"
                                    name="petBreed"
                                    placeholder="e.g. Shih Tzu"
                                    required
                                >
                            </div>

                            <div class="form-group">
                                <label for="petAge">Age</label>
                                <input
                                    type="number"
                                    id="petAge"
                                    name="petAge"
                                    min="0"
                                    max="100"
                                    placeholder="Age in years"
                                    required
                                >
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Add Pet Profile
                        </button>
                    </form>

                    <div class="list-heading">
                        <h3>My Pet Profiles</h3>
                        <span id="petCount" class="count-badge">0 pets</span>
                    </div>

                    <div id="petList" class="pet-grid">
                        <p class="empty-state">No pet profiles added yet.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="appointments" class="section">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">PLAN A VISIT</p>
                    <h2>Book an Appointment</h2>
                    <p>Submit an appointment request for your pet.</p>
                </div>

                <div class="content-card">
                    <form id="appointmentForm">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="ownerName">Pet Owner's Name</label>
                                <input
                                    type="text"
                                    id="ownerName"
                                    name="ownerName"
                                    placeholder="Your full name"
                                    required
                                >
                            </div>

                            <div class="form-group">
                                <label for="appointmentPet">Pet Name</label>
                                <input
                                    type="text"
                                    id="appointmentPet"
                                    name="appointmentPet"
                                    placeholder="Your pet's name"
                                    required
                                >
                            </div>

                            <div class="form-group">
                                <label for="serviceType">Service</label>
                                <select id="serviceType" name="serviceType" required>
                                    <option value="">Select a service</option>
                                    <option value="Pet Grooming">Pet Grooming</option>
                                    <option value="Veterinary Checkup">Veterinary Checkup</option>
                                    <option value="Vaccination">Vaccination</option>
                                    <option value="Pet Bath">Pet Bath</option>
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
                                <label for="appointmentTime">Appointment Time</label>
                                <input
                                    type="time"
                                    id="appointmentTime"
                                    name="appointmentTime"
                                    required
                                >
                            </div>

                            <div class="form-group">
                                <label for="ownerPhone">Mobile Number</label>
                                <input
                                    type="tel"
                                    id="ownerPhone"
                                    name="ownerPhone"
                                    placeholder="e.g. 09XXXXXXXXX"
                                    pattern="[0-9+\-\s()]{7,20}"
                                    required
                                >
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Submit Appointment Request
                        </button>
                        <p id="appointmentMessage" class="form-message" role="status"></p>
                    </form>

                    <div class="list-heading">
                        <h3>Appointment Requests</h3>
                        <span id="appointmentCount" class="count-badge">0 requests</span>
                    </div>

                    <div id="appointmentList" class="appointment-list">
                        <p class="empty-state">No appointment requests yet.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="notifications" class="section section-soft">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">STAY INFORMED</p>
                    <h2>SMS Notification Preview</h2>
                    <p>Preview a reminder message for an appointment.</p>
                </div>

                <div class="content-card notification-card">
                    <form id="smsForm">
                        <div class="form-group">
                            <label for="smsOwner">Pet Owner's Name</label>
                            <input
                                type="text"
                                id="smsOwner"
                                name="smsOwner"
                                placeholder="Enter owner's name"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="smsPet">Pet Name</label>
                            <input
                                type="text"
                                id="smsPet"
                                name="smsPet"
                                placeholder="Enter pet's name"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="smsDate">Appointment Date</label>
                            <input type="date" id="smsDate" name="smsDate" required>
                        </div>

                        <div class="form-group">
                            <label for="smsTime">Appointment Time</label>
                            <input type="time" id="smsTime" name="smsTime" required>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Generate SMS Preview
                        </button>
                    </form>

                    <div class="sms-preview">
                        <h3>Message Preview</h3>
                        <p id="smsMessage" aria-live="polite">
                            Your appointment reminder will appear here.
                        </p>
                        <p class="small-note">
                            Demo only: this preview does not send a real SMS message.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <a href="#home" class="logo">🐾 PetBook</a>
            <p>Making pet care simpler, one appointment at a time.</p>
            <p class="copyright">&copy; 2026 PetBook. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
