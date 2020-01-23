function goListarProdutos(){
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        method: "POST",
        url: "produtos/listar",
        data: {
            // user: $("#username").val(),
            // pass: md5($("#password").val())
        }
    }).done(function( msg ) {
        alert("oio");
        $("#dash-produtos-content").html(msg);
        // if(msg.status == 1){
        //     window.location = "/dash"
        // }else{
        //     swal("Usuário não existe!")
        // }
    });
}