document.addEventListener('DOMContentLoaded', (e) =>{
        
    const abrir = document.querySelector('.abrir'),
          sidebar = document.getElementById('sidebar'),
          cerrar = document.querySelector('.boton-cerrar'),
          carta = document.getElementById('carta'),
          cartalist = document.getElementById('carta-list');

    abrir.addEventListener('click', e=>{
        sidebar.classList.replace('sidebar-hidden','sidebar-show');
        e.stopPropagation();
    });

    cerrar.addEventListener('click', e=>{
        sidebar.classList.replace('sidebar-show','sidebar-hidden');
        e.stopPropagation();
    });

    console.log(carta)
    carta.addEventListener('mouseover', e=>{
        cartalist.classList.remove('carta-hidden');
        e.stopPropagation();
    });

    cartalist.addEventListener('mouseout', e=>{
        cartalist.classList.add('carta-hidden');
        e.stopPropagation();
    });


}); 