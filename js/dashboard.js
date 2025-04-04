// Function to display the selected section
function showSection(sectionId) {
    // Hide all sections
    const sections = document.querySelectorAll('.content');
    sections.forEach((section) => {
      section.classList.remove('active');
    });
    
    // Show the selected section
    const activeSection = document.getElementById(sectionId);
    if(activeSection) {
      activeSection.classList.add('active');
    }
  }
  document.addEventListener("DOMContentLoaded", function () {
    // Get form and display elements
    const form = document.getElementById("patientForm");

    if (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent page reload

            // Get input values
            let name = document.getElementById("name").value;
            let age = document.getElementById("age").value;
            let email = document.getElementById("email").value;
            let phone = document.getElementById("phone").value;

            // Update display section
            document.getElementById("displayName").textContent = name;
            document.getElementById("displayAge").textContent = age;
            document.getElementById("displayEmail").textContent = email;
            document.getElementById("displayPhone").textContent = phone;

            // Optionally, clear the form after submission
            form.reset();
        });
    }
});
  