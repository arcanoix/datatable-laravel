@extends('layouts.app2')

@section('content')

<div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <h2 class="header-title">Lista Usuarios</h2>
                <div class="header-sub-title">
                    <nav class="breadcrumb breadcrumb-dash">
                        <a href="{{ url('/dashboard') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Dashboard</a>
                       
                        <span class="breadcrumb-item active">Lista Usuarios</span>
                    </nav>
                </div>
    
              
              
            </div>  
            <div class="card col-md-12">
                <div class="card-body">
                    <div class="table-overflow">
                            <table id="table" class="table table-hover table-xl">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>nombre</th>
                                            <th>email</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     {{-- Cargado directamente desde datatables ajax --}}
                                       
                                    </tbody>
                                </table>
                    </div> 
                </div>       
            </div>   
        </div>
</div>
    <!-- Content Wrapper END -->
@endsection

@section('js')
<script>

        $(document).ready(function() {
         var table = $('#table').DataTable({
                ajax: '/datos',
                columns: [
                    { data: 'id'},
                    { data: 'name'},
                    { data: 'email'},
                    { data: null, 
                        "defaultContent": '<button class="btn-view btn btn-info" type="button">ver</button>'
                        + '<button class="btn-delete btn btn-success"  type="button">comprar</button>' + '<button class="btn-unir btn btn-danger"  type="button">unirse</button>',
                             "targets": -1 
                            },
                    ],
            "language": {
                            "sProcessing":     "Procesando...",
                            "sLengthMenu":     "Mostrar _MENU_ registros",
                            "sZeroRecords":    "No se encontraron resultados",
                            "sEmptyTable":     "Ningún dato disponible en esta tabla",
                            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                            "sInfoPostFix":    "",
                            "sSearch":         "Buscar:",
                            "sUrl":            "",
                            "sInfoThousands":  ",",
                            "sLoadingRecords": "Cargando...",
                            "oPaginate": {
                                "sFirst":    "Primero",
                                "sLast":     "Último",
                                "sNext":     "Siguiente",
                                "sPrevious": "Anterior"
                            },
                            "oAria": {
                                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                            }
                        }
            });
        $("select").val('10');
       

        $('#table tbody').on('click', '.btn-view', function (e) {
            
            var data = table.row( $(this).parents('tr') ).data();
            var id = data.id;
            var name = data.name;
            var email = data.email;
                    alert( data[0] +"'s nomnbre is: "+ data.name );
                    console.log(data);
         } );
    
    
        
         $('#table tbody').on('click', '.btn-delete', function (e) {
            //console.log('eliminar');
            
         } );

         $('#table tbody').on('click', '.btn-unir', function (e) {
           // console.log('unirme');
           
         } );

                     

               

        } );
</script>

@endsection