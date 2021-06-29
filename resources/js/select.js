
    const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;

    document.getElementById('_regiones').addEventListener('change',(e)=>{
        fetch('provincias',{
            method : 'POST',
            body: JSON.stringify({texto : e.target.value}),
            headers:{
                'Content-Type': 'application/json',
                "X-CSRF-Token": csrfToken
            }
        }).then(response =>{
            return response.json()
        }).then( data =>{
            var opciones ="<option value=''>Provincia</option>";
            for (let i in data.lista) {
               opciones+= '<option value="'+data.lista[i].id+'">'+data.lista[i].provincia+'</option>';
            }
            document.getElementById("_provincias").innerHTML = opciones;
        }).catch(error =>console.error(error));
    })

    document.getElementById('_provincias').addEventListener('change',(e)=>{
        fetch('comunas',{
            method : 'POST',
            body: JSON.stringify({texto : e.target.value}),
            headers:{
                'Content-Type': 'application/json',
                "X-CSRF-Token": csrfToken
            }
        }).then(response =>{
            return response.json()
        }).then( data =>{
            var opciones ="<option value=''>Comuna</option>";
            for (let i in data.lista) {
               opciones+= '<option value="'+data.lista[i].id+'">'+data.lista[i].comuna+'</option>';
            }
            document.getElementById("_comunas").innerHTML = opciones;
        }).catch(error =>console.error(error));
    })

