$(document).ready(function() {
    if ( $(".dt-table").length ) {
      $('.dt-table').DataTable({
            "iDisplayLength": 50,
          "lengthMenu": [[50, 100, 150, -1], [50, 100, 150, "All"]],
          "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "NingÃºn dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
              "sFirst": "Primero",
              "sLast": "Ãšltimo",
              "sNext": "Siguiente",
              "sPrevious": "Anterior"
            },
            "oAria": {
              "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
          }
      });
    }

    $("#search").keyup(function(e) {
        var url = $("#string_search").attr('url');
        $('#search-btn i').removeClass('fa-search').addClass('fa-spinner fa-spin');
        e.preventDefault();
        if ($('#string_search').val()!="") {
            $('.li-search').html('');
            $.ajax({
                type: "GET",
                url: url + '/search/' + $('#string_search').val(),
                dataType: "json",
                cache: false,
                success: function(data) {
                    // console.log(data);
                    if(data.length){
                        $('.li-search').html('');
                        $.each(data, function(){
                            $('.li-search').append(
                                $('<li><a href="'+url+'/estudiantes/'+this['id']+'" title="'+this['nombre']+' '+this['apellido']+'"><i class="fa fa-circle-o text-blue"></i><span>'+this['nombre']+' '+this['apellido']+'</span></a></li>')

                            );
                        });
                    }else{
                        $('.li-search').html('<li><a href="#" style="cursor:default"><i class="fa fa-times text-red"></i><span>INTENTE OTRA VEZ!<span></a></span></li>');
                    }
                    $('#search-btn i').removeClass('fa-spinner fa-spin').addClass('fa-search');
                }
            });
        }else{
            $('.li-search').html('');
            $('#search-btn i').removeClass('fa-spinner fa-spin').addClass('fa-search');
        }
    });

    tippy('.btn');
});

var modalBoleta = function($url){
    $('#urlBoleta').attr('src',$url);
    $('#boleta').modal();
};

var modalBoletaEstudiante = function($id){
    $('.selectpicker').selectpicker('val', $id);
    $('#ModalBoleta').modal();
};

$(window).load(function(){
    $(".content-wrapper").removeClass("loanding");
    $(".loanding-hide").removeClass("loanding-hide");
    $(".contain-loandig").hide();
});