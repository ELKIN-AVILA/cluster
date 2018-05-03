$(document).ready(function(){
    console.log("si");
});
function nuevo(){
    var file= $("#file").val();
    var _token=$("input[name=_token]").val();

        $.ajax({
            type:'POST',
            url:'/Archivos/nuevo',
            data:{
                _token: _token,
                file: file
            },
            success:function(data){
                
                   alert('listo');         
                
            }
        });

}