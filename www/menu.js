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

    carta.addEventListener('click',submenu);
    document.querySelector("carta-list").style.display = "none";
    function submenu(){
        var estado = cartalist.style.display;
        if (estado == "none"){
            cartalist.style.display = "block";
        }else{
            cartalist.style.display = "none";            
        }
    }

}); 