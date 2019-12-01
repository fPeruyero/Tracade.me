@extends('Instructor.templates.master')
@extends('layouts.modal')
@section('gru-active', 'active')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Grupos</h3>
                        <div class="col text-right">
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-info btn-sm" role="button" title="Agregar" href="{{ route('crear-grupo') }}">
                                    <i class="ni ni-fat-add" ></i>
                                </a>
                            </span>
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-danger btn-sm" role="button" title="Eliminación Masiva" href="{{ url('') }}">
                                    <i class="ni ni-fat-remove" ></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">

                            <tr>
                                <th scope="col"> <input type="checkbox"></th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Día</th>
                                <th scope="col">Horario</th>
                                <th scope="col">Alumnos</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($Grupos as $grupo)
                              <tr>
                                <td> <input type="checkbox"></td>
                                <th scope="row"><a href="{{route('agregar-alumnos', $grupo->id)}}">{{$grupo->gru_nombre}} </a> </th>
                                <th scope="row"> {{$grupo->gr_dia}}  </th>
                                <th scope="row"> {{$grupo->gru_hora}} </th>
                                <td>
                                    <div class="avatar-group">
                                        @php ($i = 0)
                                        @if($alu_gru->where('gru_id', $grupo->id)->count() != 0)
                                       
                                            @foreach($alu_gru->where('gru_id', $grupo->id) as $alumno)
                                                <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="{{$alumnos->find($alumno->alu_id)->alu_nombre}} {{$alumnos->find($alumno->alu_id)->alu_apellido_paterno}}">
                                                    <img alt="Image placeholder" src="{{asset('storage/alumnos/'.$alumno->alu_id.'/perfil.png')}}" class="rounded-circle">
                                                </a>
                                                @if($i++ == 3)
                                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="">
                                                        <img alt="Image placeholder" src="{{asset('storage/mas.png')}}" class="rounded-circle">
                                                    </a>
                                                    @break
                                                @endif
                                            @endforeach
                                        @endif


                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{ route('agregar-alumnos', $grupo->id) }}">Agregar alumnos</a>
                                            <a class="dropdown-item" href="{{ route('modificar-grupo', $grupo->id) }}">Modificar</a>
                                            <a class="dropdown-item" href="{{route('grupoDelete', $grupo->id)}}">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                              </tr>
                              @endforeach

                         </tbody>
                        </table>
                    </div>
                    <div class="card-header border-0">
                        {{ $Grupos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End of Table -->
@endsection

@section('js_content')


<script type="text/javascript">

function  eliminarGrupo(gru_nombre, gru_id){

  $("#delete_modal").modal().find('.modal-title').text('Eliminar grupo');
  $("#delete_modal").modal().find('.message-text').empty();
  $("#delete_modal").modal().find('.message-text').append('¿Estás seguro de eliminar el grupo ' + gru_nombre + '?');
  $("#delete_modal").modal().find('#borrar').val( gru_id);
}

$("#borrar").click(function(){
    var gru_id = $("#borrar").val();

    var aDatos={
      'gru_id' : gru_id
    };

    $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          type: "POST",
          url: "{{ asset ('api/borrar-grupo') }}",
          data: aDatos,
          cache: false,
          dataType: "json",
          beforeSend: function (){
            //modal.preloader();
          },
          success: function (result) {
            //modal.close("-preloader");
            console.log(result.estatus===1);
            if(result.estatus === 1){
              console.log("Sacar modal y pasar a grupos");
              window.location.href = "{{ asset('/Grupos') }}";

            }else{
              console.log("Sacar modal error y pasar a grupos")
              window.location.href = "{{ asset('/Grupos') }}";
            }
          },
          complete: function () {
          },
          error: function (result) {
            console.log("errorsin");
          }
        });


  });

  $("#btn-agregarGrupo").click(function (){

    var gru_nombre = $("#gru_nombre").val().trim();
    var gru_horario = $("#gru_dia").val() + ' ' + $("#gru_hora_de").val()  + ':' +  $("#gru_minutos_de").val() + ' - ' + $("#gru_hora_a").val() + ':' + $("#gru_minutos_a").val();
    var dis_id = $("#id_disciplina").val();
    var aul_id = $("#id_aula").val();

    console.log(gru_nombre, gru_horario, dis_id, aul_id)

    var aDatos = {
    'gru_nombre': gru_nombre,
    'gru_horario': gru_horario,
    'dis_id': dis_id,
    'aul_id': aul_id
  }


  $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "{{ asset ('api/crear-grupo') }}",
        data: aDatos,
        cache: false,
        dataType: "json",
        beforeSend: function (){
          //modal.preloader();
        },
        success: function (result) {
          //modal.close("-preloader");
          console.log(result.estatus===1);
          if(result.estatus === 1){
            console.log("Sacar modal y pasar a grupos");
            window.location.href = "{{ asset('/Grupos') }}";

          }else{
            console.log("Sacar modal error y pasar a grupos")
            window.location.href = "{{ asset('/Grupos') }}";
          }
        },
        complete: function () {
        },
        error: function (result) {
          console.log("errorsin");
        }
      });
})
</script>
@endsection
