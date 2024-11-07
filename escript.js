function toggleSidebar() {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");
  const isVisible = sidebar.style.transform === "translateX(0%)";

  // Toggle the sidebar visibility
  sidebar.style.transform = isVisible ? "translateX(-100%)" : "translateX(0%)";

  // Show or hide the overlay based on the sidebar visibility
  overlay.style.display = isVisible ? "none" : "block";
}

function closeSidebar() {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");

  // Hide the sidebar and the overlay when clicking outside
  sidebar.style.transform = "translateX(-100%)";
  overlay.style.display = "none";
}



// ---------------------------------------cards data in localStorage --------------
// Show and hide the form
function showForm() {
  document.getElementById("employeeForm").style.display = "block";
}

function cancelForm() {
  document.getElementById("employeeForm").style.display = "none";
}

// --------------------------------------  --------------
function handleSubmit(event) {


  document.getElementById("employeeForm").style.display = "none";


 
}