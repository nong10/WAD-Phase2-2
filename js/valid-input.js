function validateForm() {
    // Get references to the input fields
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');

    // Check that the username is not empty
    if (usernameInput.value.trim() === '') {
        // Invalid input, make the border color red
        usernameInput.style.borderColor = 'red';
        return false; // Prevent form submission
    }

    // Check that the password is not empty
    if (passwordInput.value.trim() === '') {
        // Invalid input, make the border color red
        passwordInput.style.borderColor = 'red';
        return false; // Prevent form submission
    }

    // Input is valid, allow form submission
    return true;
}