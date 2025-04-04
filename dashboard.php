<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hospital Dashboard</title>
  <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <h2>Dashboard</h2>
      <ul>
        <li onclick="loadPage('patient_details.php')">My Profile</li>
        <li onclick="loadPage('appointments.php')">Appointments</li>
        <li onclick="loadPage('doctors.php')">Doctors</li>
        <li onclick="loadPage('patients.php')">Patients</li>
        <li onclick="loadPage('alerts.php')">Alerts</li>
        <li onclick="loadPage('reports.php')">Reports</li>
        <li onclick="loadPage('diagnose.php')">Diagnose</li>
      </ul>
    </aside>

    <main class="main">
      <header class="header">
        <h1>Hospital Dashboard</h1>
      </header>

      <!-- Dynamic Content Container -->
      <div id="dynamicContent">
        <h2>Welcome to the Hospital Dashboard</h2>
        <p>Select an option from the sidebar.</p>
      </div>
    </main>
  </div>

  <script>
    function loadPage(page) {
    document.getElementById("dynamicContent").innerHTML = "<p>Loading...</p>"; // Show loading text

    fetch(page)
    .then(response => {
        if (!response.ok) throw new Error("Page not found");
        return response.text();
    })
    .then(data => {
        document.getElementById("dynamicContent").innerHTML = data; // Load content
        attachPatientFormListener(); // Reattach JS after load
    })
    .catch(error => {
        document.getElementById("dynamicContent").innerHTML = "<p>Error loading page.</p>";
        console.error("Error:", error);
    });
}

function attachPatientFormListener() {
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
}

  </script>
</body>
</html>
