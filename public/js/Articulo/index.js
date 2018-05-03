
$(document).ready(function(){
   $("#nuevo").modal('hide');
});

function nuevo(){ $("#nuevo").modal('show');};

function guardar(){
    var titulo = $("#titulo").val();
    var contenido = $("#contenido").val();
    var _token=$("input[name=_token]").val();
    var user = $("#id").val();
    $.ajax({
        type:'POST',
        url:'/Articulo/nuevo',
        data:{
            _token: _token,
            titulo: titulo,
            contenido: contenido,
            user:  user
        },
        success:function(data){
            $("#table").append("<tr>"+
                "<td>"+data.id+"</td>"+
                "<td>"+data.titulo+"</td>"+
                "<td>"+data.contenido+"</td>"+
                "<td>"+
                "<button class='btn btn-warning' onclick=editar("+data.id+")'>Editar"+"</button>"+
                "<button class='btn btn-danger' onclick=eliminar("+data.id+")'>X"+"</button>"+
                "</td>"+
                "</tr>"        
            );
        }
    });
    $("#titulo").val("");
    $("#contenido").val("");
    
}
class Hello extends React.Component {
    render() {
       React.createElement("div", null, "Hello ", this.props.name);
    }
  }
  
  ReactDOM.render(
    React.createElement(Hello, {name: "World"}),
    document.getElementById('prueba')
  );