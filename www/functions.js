document.addEventListener('DOMContentLoaded', (e) =>{
        
    const login = document.getElementById('login'),
        logout = document.getElementById('logout'),
        reserva = document.querySelector('.reservas-form'),
        mireserva = document.getElementById('mis-reservas');

          
    login.classList.add('hide');
    logout.classList.replace('hide','show');

    mireserva.classList.replace('hide', 'show');
    reserva.classList.remove('hide');
    



}); 