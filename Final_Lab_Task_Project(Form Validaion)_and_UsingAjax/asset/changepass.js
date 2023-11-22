function validatePasswordChange() {
    var currentPassword = document.getElementById('current').value;
    var newPassword = document.getElementById('new').value;
    var confirmPassword = document.getElementById('confirm').value;

    if (currentPassword === '' || newPassword === '' || confirmPassword === '') {
        alert('All fields must be filled.');
        return false;
    } else if (newPassword.length < 4) {
        alert('Password should be at least 4 characters.');
        return false;
    } else if (newPassword !== confirmPassword) {
        alert('Passwords do not match.');
        return false;
    }

    // If all validation passes, you can submit the form
    return true;
}

function submitForm() {
    if (validatePasswordChange()) {
        // You may want to handle form submission here
        // Example: document.forms[0].submit();
    }
}
