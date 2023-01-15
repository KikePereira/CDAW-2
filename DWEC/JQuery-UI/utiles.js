$(document).ready(function () {
    MuestraLibros();

    function MuestraLibros(){
        $.ajax({
            url : 'damelibro.php',
            type : 'GET',
            dataType : 'json',
            success : function(datos) {
                console.log(datos);
                var libros=
                '<table id="example"> <thead> <tr> <th>CODIGO</th> <th>TITULO</th> <th>AUTOR</th> <th>EDITORIAL</th> <th>PAGINAS</th> <th>ANOS</th> </tr> </thead> <tbody>'
                
            $.each(datos, function (idx, elemento) {

                    libros=libros+'<tr><td>'+elemento.codigo
                    +'</td><td>'+elemento.titulo
                    +'</td><td>'+elemento.autor
                    +'</td><td>'+elemento.editorial
                    +'</td><td>'+elemento.paginas
                    +'</td><td>'+elemento.anno
                    +'</td></tr>'
                }),
                libros=libros+' </tbody> <tfoot> <tr> <th>CODIGO</th> <th>TITULO</th> <th>AUTOR</th> <th>EDITORIAL</th> <th>PAGINAS</th> <th>ANOS</th> </tr> </tfoot> </table>';


            $('#contenido').html(libros);
            $('#example').DataTable();

            },
            error : function(xhr, status) {
                alert('Disculpe, existió un problema');
            },
            complete : function(xhr, status) {
                //alert('Petición realizada');
            }
        });
    }
})