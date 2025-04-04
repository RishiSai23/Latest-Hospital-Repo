// Function to display user-entered details
function displayDetails() {
    // Get user input
    let name = document.getElementById("name").value;
    let age = document.getElementById("age").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;

    // Update the display section
    document.getElementById("displayName").innerText = name;
    document.getElementById("displayAge").innerText = age;
    document.getElementById("displayEmail").innerText = email;
    document.getElementById("displayPhone").innerText = phone;
}
