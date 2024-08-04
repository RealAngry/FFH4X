console.log('JavaScript file loaded');

function login(event) {
    console.log('Login function called');
    event.preventDefault();

    const email = document.getElementById('itzaengry@gmail.com').value;
    const password = document.getElementById('Utkarsh3512Y').value;

    const adminEmail = 'itzaengry@gmail.com';
    const adminPassword = 'Utkarsh3512Y';

    if (email === adminEmail && password === adminPassword) {
        alert('Login successful!');
        window.location.href = 'admin_dashboard.html';
    } else {
        document.getElementById('error').textContent = 'Invalid email or password.';
    }
}