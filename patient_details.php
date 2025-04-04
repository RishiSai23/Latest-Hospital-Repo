<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Details</title>
    <link rel="stylesheet" href="css/patient_details.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="container">
    <div class="input-section">
        <h2>Enter Patient Details</h2>
        <form id="patientForm">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>

            <button type="submit">Save</button>
        </form>
    </div>

    <div class="display-section">
        <h2>Patient Details</h2>
        <p><strong>Name:</strong> <span id="displayName">-</span></p>
        <p><strong>Age:</strong> <span id="displayAge">-</span></p>
        <p><strong>Email:</strong> <span id="displayEmail">-</span></p>
        <p><strong>Phone:</strong> <span id="displayPhone">-</span></p>
    </div>
</div>

<script>
$(document).ready(function() {
    // Load patient details on page load
    $.get("fetch_patient.php", function(data) {
        try {
            let patient = JSON.parse(data);
            $("#name").val(patient.name);
            $("#age").val(patient.age);
            $("#email").val(patient.email);
            $("#phone").val(patient.phone);

            $("#displayName").text(patient.name);
            $("#displayAge").text(patient.age);
            $("#displayEmail").text(patient.email);
            $("#displayPhone").text(patient.phone);
        } catch (error) {
            console.error("Error parsing JSON:", error, data);
        }
    });

    // Handle form submission
    $("#patientForm").submit(function(event) {
        event.preventDefault();
        $.post("save_patient.php", $(this).serialize(), function(response) {
            alert(response);  // Show success/error message
            location.reload();  // Refresh to reflect changes
        }).fail(function(xhr, status, error) {
            alert("Error: " + xhr.responseText);
        });
    });
});

</script>

</body>
</html>
