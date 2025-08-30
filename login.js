document.addEventListener('DOMContentLoaded', function() {
    const loginTab = document.getElementById('loginTab');
    const signupTab = document.getElementById('signupTab');
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');
    const tabIndicator = document.getElementById('tabIndicator');

    // Check if all elements exist
    if (!loginTab || !signupTab || !loginForm || !signupForm || !tabIndicator) {
        console.error('One or more required elements not found');
        return;
    }

    loginTab.addEventListener('click', () => {
        // Show login form, hide signup form
        loginForm.classList.remove('hidden');
        loginForm.classList.add('flex');
        signupForm.classList.add('hidden');
        signupForm.classList.remove('flex');
        
        // Move indicator to login position
        tabIndicator.style.left = '0';
        
        // Update tab colors
        loginTab.classList.add('text-purple-900');
        loginTab.classList.remove('text-white');
        signupTab.classList.remove('text-purple-900');
        signupTab.classList.add('text-white');
    });

    signupTab.addEventListener('click', () => {
        // Show signup form, hide login form
        signupForm.classList.remove('hidden');
        signupForm.classList.add('flex');
        loginForm.classList.add('hidden');
        loginForm.classList.remove('flex');
        
        // Move indicator to signup position
        tabIndicator.style.left = '50%';
        
        // Update tab colors
        signupTab.classList.add('text-purple-900');
        signupTab.classList.remove('text-white');
        loginTab.classList.remove('text-purple-900');
        loginTab.classList.add('text-white');
    });
});