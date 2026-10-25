
const petForm = document.getElementById("petForm");
const petList = document.getElementById("petList");
const petMessage = document.getElementById("petMessage");

const appointmentForm = document.getElementById("appointmentForm");
const appointmentList = document.getElementById("appointmentList");
const bookingMessage = document.getElementById("bookingMessage");

const notificationPhone = document.getElementById("notificationPhone");
const notificationMessage = document.getElementById("notificationMessage");
const previewSms = document.getElementById("previewSms");
const smsPreview = document.getElementById("smsPreview");

const pets = [];
const appointments = [];

// PET PROFILE MANAGEMENT
petForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const name = document.getElementById("petName").value.trim();
    const type = document.getElementById("petType").value;

    if (!name || !type) {
        petMessage.textContent = "Enter the pet's name and type.";
        return;
    }

    const pet = {
        name: name,
        type: type
    };

    pets.push(pet);

    const card = document.createElement("div");
    card.className = "pet-card";

    const petName = document.createElement("h3");
    petName.textContent = pet.name;

    const petType = document.createElement("p");
    petType.textContent = "Pet type: " + pet.type;

    card.appendChild(petName);
    card.appendChild(petType);
    petList.appendChild(card);

    petMessage.textContent = `${name}'s profile was added successfully.`;

    petForm.reset();
});

// APPOINTMENT BOOKING
appointmentForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const owner = document.getElementById("ownerName").value.trim();
    const petName = document.getElementById("appointmentPet").value.trim();
    const service = document.getElementById("service").value;
    const date = document.getElementById("appointmentDate").value;
    const phone = document.getElementById("phone").value.trim();

    if (!owner || !petName || !service || !date) {
        bookingMessage.textContent = "Please complete all required fields.";
        return;
    }

    const selectedDate = new Date(date + "T00:00:00");
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    if (selectedDate < today) {
        bookingMessage.textContent = "Please choose today or a future date.";
        return;
    }

    const appointment = {
        owner: owner,
        petName: petName,
        service: service,
        date: date,
        phone: phone
    };

    appointments.push(appointment);

    const card = document.createElement("div");
    card.className = "appointment-card";

    const details = document.createElement("p");
    details.textContent =
        `${owner} — ${petName} — ${service} — ${date}`;

    card.appendChild(details);
    appointmentList.appendChild(card);

    bookingMessage.textContent =
        `Appointment for ${petName} booked successfully!`;

    // Prepare an optional SMS reminder draft.
    if (phone) {
        notificationPhone.value = phone;
        notificationMessage.value =
            `Hello ${owner}, this is a reminder for ${petName}'s ${service} appointment on ${date}.`;
    }

    appointmentForm.reset();
});

// SMS NOTIFICATION PREVIEW
previewSms.addEventListener("click", function () {
    const phone = notificationPhone.value.trim();
    const message = notificationMessage.value.trim();

    if (!phone || !message) {
        smsPreview.textContent =
            "Enter a mobile number and message first.";
        return;
    }

    const normalizedPhone = phone.replace(/[\s-]/g, "");
    const validPhone = /^(09\d{9}|\+639\d{9})$/;

    if (!validPhone.test(normalizedPhone)) {
        smsPreview.textContent =
            "Enter a valid Philippine mobile number (09XXXXXXXXX or +639XXXXXXXXX).";
        return;
    }

    smsPreview.textContent =
        `SMS preview for ${normalizedPhone}: ${message} (Demo only; not sent.)`;
});
