
    //Asigno el evento "click" del texto para provoar el copiado
    document.getElementById('copiar').addEventListener('click', copiarTexto);

    //Función que lanza el copiado del código
    function copiarTexto(ev){
        var textoACopiar = document.getElementById('copiar-text');
        var seleccion = document.createRange(); //Creo una nueva selección vacía
        seleccion.selectNodeContents(textoACopiar);    //incluyo el nodo en la selección
        //Antes de añadir el intervalo de selección a la selección actual, elimino otros que pudieran existir (sino no funciona en Edge)
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(seleccion);  //Y la añado a lo seleccionado actualmente
  
        window.getSelection().removeRange(seleccion);
    }

    
