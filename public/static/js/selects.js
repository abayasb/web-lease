

        $("#_provincia").change(function(event){
            
            $.get("_ciudad/"+event.target.value+"",function(response, provincia){
                console.log(response);
                $("#_ciudad").empty();
                $("#_ciudad").append("<option values='"+0+"'>"+"Seleccionen"+"</option");
                //$("#_universidad").append("<option values='"+0+"'>"+"Seleccione"+"</option");
                for (let index = 0; index < response.length; index++) {
                    console.log("adad");
                   $("#_ciudad").append("<option value='"+response[index].id_ciudad+"'>"+response[index].nombre_ciudad+"</option>") 
                }
            });
        });

        $("#_ciudad").change(function(event){
            $.get("_universidad/"+event.target.value+"",function(response, provincia){
                console.log("_universidad/"+event.target.value);
                $("#_universidad").empty();
                //$("#_universidad").append("<option values='"+0+"'>"+"Seleccione"+"</option");
                for (let index = 0; index < response.length; index++) {
                   $("#_universidad").append("<option value='"+response[index].id_universidad+"'>"+response[index].nombre_universidad+"</option>") 
                }
            });
        });