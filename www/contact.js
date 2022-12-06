document.addEventListener('DOMContentLoaded', (e) =>{
        
    const form = document.querySelector('#contact-form'),
          mail = document.querySelector('#send-mail');

    form.addEventListener('submit', handleSubmit);

    function handleSubmit(e){
        e.preventDefault();
        const data = new FormData(this);
        
        mail.setAttribute('href', `mailto:bocados@restaurantebocados.com?subject=${data.get('name')}&body=${data.get('mensaje')}`);
        mail.click();
    }
    



}); 