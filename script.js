function callWaiter() {
  alert("A waiter will be with you shortly!");
}

document.getElementById('registrationForm').addEventListener('submit', function(event) {
  event.preventDefault();

  // Create a FormData object from the form
  let formData = new FormData(event.target);

  // Send the form data to the server
  fetch('Customer.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    console.log(data);
    // Display a thank you note
    document.getElementById('thankYouNote').style.display = 'block';
  })
  .catch((error) => {
    console.error('Error:', error);
  });
});