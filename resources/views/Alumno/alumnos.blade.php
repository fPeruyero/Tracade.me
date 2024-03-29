@extends('Instructor.templates.master')
@section('alu-active', 'active')
@section('content')
    <!-- Header -->
    <div class="header bg-gradient-indigo pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Alumnos</h3>
                        <div class="col text-right">
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-info btn-sm" role="button" title="Guardar" href="{{ route('crear-alumno') }}">
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
                                <th scope="col">Disciplina</th>
                                <th scope="col">Grupos</th>
                                <th scope="col">Habilidades</th>
                                <th scope="col">Última Habilidad Aprendida</th>
                                <th scope="col">Próxima Habilidad</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($alumnos as $alumno)
                                <tr>
                                    <td> <input type="checkbox"></td>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="{{route('habilidades-alumno', $alumno['id'])}}" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../public/img/theme/team-2-800x800.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="{{route('habilidades-alumno', $alumno['id'])}}">
                                                    <span class="mb-0 text-sm">{{$alumno->alu_nombre}} {{$alumno->alu_apellido_paterno}} {{$alumno->alu_apellido_materno}}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="row"> {{$disciplinas->where('id', $dis_alu->where('alu_id', $alumno->id)->first()['dis_id'] )->first()->dis_nombre}}</th>

                                    <th scope="row" > <a href="{{ route('agregar-alumnos', intval($grupos->where('id', $gru_alu->where('alu_id', $alumno->id)->first()['gru_id'])->first()['id'])) }}"> {{$grupos->where('id', $gru_alu->where('alu_id', $alumno->id)->first()['gru_id'])->first()['gru_nombre']}} </a>  </th>
                                    <th scope="row"> 10 </th>
                                    <th scope="row"> <a href="#">Dangerous Brian </a> </th>
                                    <th scope="row"> <a href="#"> Fallen Marley </a></th>
                                    <th class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{ route('modificar-alumno-vista', $alumno->id) }}">Modificar</a>
                                                <a class="dropdown-item" href="{{route('eliminar-alumno', $alumno->id)}}">Eliminar</a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="card-header border-0">
                            {{ $alumnos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Table -->
@endsection