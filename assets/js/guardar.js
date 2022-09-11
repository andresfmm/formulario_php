document.addEventListener('DOMContentLoaded', function () {
     

    const btnGuardar = document.getElementById('btnEnviar');



    function __Id(id){
        return document.getElementById(id);
    }

    class Guardar{
       
       
       guardar(e){


            if ( __Id('nombre').value == '' || __Id('apellido').value == '' || __Id('edad').value == '' ) {
                return false;
            }

            e.preventDefault();
                    
            let guardar = new Guardar;
            guardar.sendSave();
       }

       sendSave(){
           

           fetch('controller/guardar.php', {
               method: 'POST',
               body: JSON.stringify({
                   nombre: document.getElementById('nombre').value,
                   apellido: document.getElementById('apellido').value,
                   edad: document.getElementById('edad').value
               }),
               headers: {
                   'Content-Type': 'application/json',
                   'X-Requested-With': 'XMLHttpRequest'
               }
             })
             .then(function(response) {
                 return response.json();
             })
             .then(function(data) {
                console.log(data)
                   if (data.ok) {
                       toastr.success(data.message);
                   }else{
                       
                   }
             });

       }
    }
    
    let guardar = new Guardar;

    btnGuardar.addEventListener('click', guardar.guardar);

});