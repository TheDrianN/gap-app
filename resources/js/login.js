function setActiveButton(buttonType) {
    const loginButton = document.getElementById('loginButton');
    const registerButton = document.getElementById('registerButton');

    if (buttonType === 'login') {
        loginButton.classList.add('bg-blue-600', 'text-white');
        loginButton.classList.remove('text-blue-600', 'border-blue-600');
        
        registerButton.classList.add('text-blue-600');
        registerButton.classList.remove('bg-blue-600', 'text-white');
    } else if (buttonType === 'register') {
        registerButton.classList.add('bg-blue-600', 'text-white');
        registerButton.classList.remove('text-blue-600', 'border-blue-600');
        
        loginButton.classList.add('text-blue-600');
        loginButton.classList.remove('bg-blue-600', 'text-white');
    }
}