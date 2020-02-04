$("#ajout-user").on("click", function(){
    var url = "ajout";
    $.ajax({
        url: url,
        type: "POST"
    })
        .done(function( data){
            console.log(data);
            $("#divid").html(data.view.content);
        });
});