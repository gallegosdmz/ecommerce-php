// Con esto abrimos el formulario para las ventas
        var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
          overlay = document.getElementById('overlay'),
          popup = document.getElementById('popup'),
          btnCerrarPopup = document.getElementById('btn-cerrar-popup');

          btnAbrirPopup.addEventListener('click', function(){
          overlay.classList.add('active');
          popup.classList.add('active');
      });

        btnCerrarPopup.addEventListener('click', function(e){
        e.preventDefault();
        overlay.classList.remove('active');
        popup.classList.remove('active');
      });

        // Con esto abrimos el formulario para los reportes de problemas
        var btnAbrirPopup1 = document.getElementById('btn-abrir-popup1'),
          overlay1 = document.getElementById('overlay1'),
          popup1 = document.getElementById('popup1'),
          btnCerrarPopup1 = document.getElementById('btn-cerrar-popup1');

          btnAbrirPopup1.addEventListener('click', function(){
          overlay1.classList.add('active');
          popup1.classList.add('active');
      });

        btnCerrarPopup1.addEventListener('click', function(e){
        e.preventDefault();
        overlay1.classList.remove('active');
        popup1.classList.remove('active');
      });



    // Borra Los Dulces Pedidos Que Fueron Impresos En La Pantalla  
    $("#cva").click(function(){
        $("#parrafin").empty();
        
        
      
    });

    $("#btn-cerrar-popup").click(function(){
        $("#parrafin").empty();       
    });

    $("#btn-cerrar-popup1").click(function(){
        $("#parrafin").empty();       
    });