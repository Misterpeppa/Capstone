const dropdownBtn = document.getElementById('dropdownBtn');
    const menu = document.getElementById('menu');
    const logoutLink = document.getElementById('logout');

    dropdownBtn.addEventListener('click', () => {
        menu.style.display = (menu.style.display === 'none' || menu.style.display === '') ? 'block' : 'none';
    });

    logoutLink.addEventListener('click', () => {
        // Clear any user session data and redirect to the login page
        logout(); // Call the logout function
    });

    function logout() {
        // Here you can put the code to clear session data and redirect
        // Example: Clearing a token from local storage
        localStorage.removeItem('authToken');
        
        // Redirect to the login page
        window.location.href = 'login.html'; // Replace with your login page URL
    }