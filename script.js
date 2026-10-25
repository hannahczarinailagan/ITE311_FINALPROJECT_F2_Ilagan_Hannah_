const bookingForm = document.getElementById("bookingForm");
const bookingMessage = document.getElementById("bookingMessage");
const appointmentDate = document.getElementById("date");

const petForm = document.getElementById("petForm");
const petMessage = document.getElementById("petMessage");
const petList = document.getElementById("petList");

const appointmentList = document.getElementById("appointmentList");

const notificationPhone = document.getElementById("notificationPhone");
const notificationMessage = document.getElementById("notificationMessage");
const previewSms = document.getElementById("previewSms");
const smsPreview = document.getElementById("smsPreview");

// Use the local date instead of UTC to avoid date differences.
function getLocalDate() {
    const now = new Date();
    const local = new Date(
        now.getTime() - now.getTimezoneOffset() * 60000
    );

    return local.toISOString().split("T")[0];
}

appointmentDate.min = getLocalDate();

// Store demo records in this browser.
// These records are not saved to a server or MySQL database.
const pets = [];
const appointments = [];

function createElement(tag, className, text) {
    const element = document.createElement(tag);

    if (className) {
        element.className = className;
    }

    if (text !== undefined) {
        element.textContent = text;
    }

    return element;
}

// PET MANAGEMENT
petForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const name = document.getElementById("petName").value.trim();
    const type = document.getElementById("petType").value;
    const breed = document.getElementById("petBreed").value.trim();
    const age = document.getElementById("petAge").value;

    if (!name || !type) {
        petMessage.textContent = "Enter the pet's name and type.";
        return;
    }

    const pet = { name, type, breed, age };
    pets.push(pet);

    renderPets();

    petMessage.textContent = `${name}'s profile was added successfully.`;
    petForm.reset();
});

function renderPets() {
    petList.replaceChildren();

    pets.forEach(function (pet) {
        const card = createElement("article", "service-card");
        card.appendChild(createElement("h3", "", `🐾 ${pet.name}`));
        card.appendChild(createElement("p", "", `Type: ${pet.type}`));
        card.appendChild(createElement("p", "", `Breed: ${pet.breed || "Not specified"}`));
        card.appendChild(createElement("p", "", `Age: ${pet.age || "Not specified"}`));

        petList.appendChild(card);
    });
}

// APPOINTMENT BOOKING
bookingForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const owner = document.getElementById("owner").value.trim();
    const pet = document.getElementById("bookingPet").value.trim();
    const service = document.getElementById("service").value;
    const date = appointmentDate.value;
    const time = document.getElementById("time").value;
    const phone = document.getElementById("phone").value.trim();

    if (!owner || !pet || !service || !date || !time) {
        bookingMessage.textContent = "Please complete all required fields.";
        return;
    }

    if (date < getLocalDate()) {
        bookingMessage.textContent = "Please choose today or a future date.";
        return;
    }

    const appointment = {
        owner,
        pet,
        service,
        date,
        time,
        phone,
        status: "Pending"
    };

    appointments.push(appointment);
    renderAppointments();

    bookingMessage.textContent =
        `Appointment request prepared for ${pet} on ${date} at ${time}.`;

    // Prepare an optional SMS reminder draft.
    if (phone) {
        notificationPhone.value = phone;
        notificationMessage.value =
            `Hello ${owner}, your ${service.toLowerCase()} appointment ` +
            `request for ${pet} is scheduled for ${date} at ${time}. ` +
            `Please wait for confirmation. - PetBook`;
    }

    bookingForm.reset();
    appointmentDate.min = getLocalDate();
});

function renderAppointments() {
    appointmentList.replaceChildren();

    appointments.forEach(function (appointment, index) {
        const card = createElement("article", "service-card");

        card.appendChild(
            createElement("h3", "", `${index + 1}. ${appointment.pet}`)
        );
        card.appendChild(
            createElement("p", "", `Owner: ${appointment.owner}`)
        );
        card.appendChild(
            createElement("p", "", `Service: ${appointment.service}`)
        );
        card.appendChild(
            createElement("p", "", `Date: ${appointment.date}`)
        );
        card.appendChild(
            createElement("p", "", `Time: ${appointment.time}`)
        );
        card.appendChild(
            createElement("p", "", `Status: ${appointment.status}`)
        );

        appointmentList.appendChild(card);
    });
}

// SMS NOTIFICATION PREVIEW
previewSms.addEventListener("click", function () {
    const phone = notificationPhone.value.trim();
    const message = notificationMessage.value.trim();

    if (!phone || !message) {
        smsPreview.textContent =
            "Enter a mobile number and message first.";
        return;
    }

    smsPreview.textContent =
        `SMS preview for ${phone}: ${message} (Demo only; not sent.)`;
});