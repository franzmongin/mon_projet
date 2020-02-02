$("#ajout-user").on("click", function(){
    var url = "ajout";
    $.ajax({
        url: url,
        type: "POST"
    })
        .done(function( data){
            console.log(data.fakes);
            $('#compteur').text('compteur :'+data.fakes)
        });
});