// Get the current URL path
const currentPath = window.location.pathname;

// Check if the URL contains 'contact.php'
if (currentPath.includes("contact.php")) {
  document
    .querySelector(".nav-link[href='contact.php']")
    .classList.add("active");
}
// Check if the URL contains 'services.php'
else if (currentPath.includes("services.php")) {
  document
    .querySelector(".nav-link[href='services.php']")
    .classList.add("active");
}
// Check if the URL contains 'about-us.php'
else if (currentPath.includes("about-us.php")) {
  document
    .querySelector(".nav-link[href='about-us.php']")
    .classList.add("active");
}
// Check if the URL contains 'about-us.php'
else if (currentPath.includes("career.php")) {
  document
    .querySelector(".nav-link[href='career.php']")
    .classList.add("active");
}
// If no specific URL is found, default to 'home'
else {
  document.querySelector(".nav-link[href='index.php']").classList.add("active");
}

// form validation
document
  .getElementById("careerForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form from submitting

    // Clear previous alerts
    let alerts = document.querySelectorAll("#careerModal .alert");
    alerts.forEach((alert) => alert.remove());

    let form = this;
    let isValid = true;

    // Validate Full Name
    const name = document.getElementById("name");
    if (name.value.trim() === "") {
      showError(name, "Full Name is required");
      isValid = false;
    } else {
      showSuccess(name);
    }

    // Validate Email
    const email = document.getElementById("email");
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,6}$/i;
    if (email.value.trim() === "") {
      showError(email, "Email is required");
      isValid = false;
    } else if (!emailPattern.test(email.value.trim())) {
      showError(email, "Please enter a valid email");
      isValid = false;
    } else {
      showSuccess(email);
    }

    // Validate Portfolio URL (optional)
    const url = document.getElementById("url");
    if (url.value.trim() !== "") {
      try {
        new URL(url.value);
        showSuccess(url);
      } catch (e) {
        showError(url, "Please enter a valid URL");
        isValid = false;
      }
    } else {
      clearValidation(url); // No validation if empty
    }

    // Validate Resume file
    let fileInput = document.getElementById("file");
    if (fileInput.value.trim() === "") {
      showError(fileInput, "Please attach your resume");
      isValid = false;
    } else {
      let file = fileInput.files[0];
      let allowedExtensions = ["pdf", "doc", "docx"];
      let fileExtension = file ? file.name.split(".").pop().toLowerCase() : "";

      // Client-side validation
      if (!allowedExtensions.includes(fileExtension)) {
        showError(
          fileInput,
          "Invalid file format. Only PDF, DOC, and DOCX are allowed."
        );
      }
    }

    // If the form is valid, submit it
    if (isValid) {
      form.classList.add("was-validated");
      let formData = new FormData(form);

      document
        .querySelector("#careerFormWrapper .loader")
        .classList.remove("d-none");

      // Send the form data via Fetch API
      fetch("career-form.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.text())
        .then((data) => {
          if (data.includes("success")) {
            // Show success message and clear the form
            let successAlert = document.createElement("div");
            successAlert.className = "alert alert-success";
            successAlert.textContent =
              "Thank you! Your submission has been received.";
            form.before(successAlert);

            // Clear form fields
            form.reset();
            form.classList.remove("was-validated"); // Remove Bootstrap validation classes
            let validationClasses = form.querySelectorAll(
              ".is-valid, .is-invalid"
            );
            validationClasses.forEach((el) =>
              el.classList.remove("is-valid", "is-invalid")
            );
          } else {
            // Show error message
            let errorAlert = document.createElement("div");
            errorAlert.className = "alert alert-danger";
            errorAlert.textContent = data;
            form.before(errorAlert);
          }
          document
            .querySelector("#careerFormWrapper .loader")
            .classList.add("d-none");
        })
        .catch((error) => {
          // Show error message if the AJAX request fails
          let errorAlert = document.createElement("div");
          errorAlert.className = "alert alert-danger";
          errorAlert.textContent =
            "There was an error processing your request. Please try again later.";
          form.before(errorAlert);
          document
            .querySelector("#careerFormWrapper .loader")
            .classList.add("d-none");
        });
    } else {
      form.classList.add("was-validated");
    }
  });

function showError(input, message) {
  input.classList.remove("is-valid");
  input.classList.add("is-invalid");
  let feedback = input.nextElementSibling;
  if (feedback && feedback.classList.contains("invalid-feedback")) {
    feedback.textContent = message;
  }
}

function showSuccess(input) {
  input.classList.remove("is-invalid");
  input.classList.add("is-valid");
}

function clearValidation(input) {
  input.classList.remove("is-invalid");
  input.classList.remove("is-valid");
}
