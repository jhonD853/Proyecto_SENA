document.addEventListener('DOMContentLoaded', function () {
    const openModalBtn = document.getElementById('openModalBtn');
    const cartModal = document.getElementById('cartModal');
    const loginModal = document.getElementById('loginModal');
    const closeModalBtn = document.querySelector('.close');
    const closeLoginModalBtn = document.getElementById('closeLoginModal');
    const carritoLink = document.getElementById('carrito');
    const loginLink = document.getElementById('login');

    carritoLink.addEventListener('click', function (event) {
        event.preventDefault();
        cartModal.style.display = cartModal.style.display === '' || cartModal.style.display === 'none' ? 'block' : 'none';
        // Cerrar el modal de inicio de sesión si está abierto
        loginModal.style.display = 'none';
    });

    loginLink.addEventListener('click', function (event) {
        event.preventDefault();
        loginModal.style.display = loginModal.style.display === '' || loginModal.style.display === 'none' ? 'block' : 'none';
    });

    closeModalBtn.addEventListener('click', function () {
        cartModal.style.display = 'none';
    });

    closeLoginModalBtn.addEventListener('click', function () {
        loginModal.style.display = 'none';
    });

    window.addEventListener('click', function (event) {
        if (event.target === cartModal) {
            cartModal.style.display = 'none';
        }
        if (event.target === loginModal) {
            loginModal.style.display = 'none';
        }
    });
});





