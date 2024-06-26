@extends('layouts.merge.dashboard')
@section('titulo', 'Lista De Registos')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-md-6 col-12 col-lg-6">
                    <h2 class="h5 page-title">
                        Lista De Registos
                    </h2>
                </div>
               
            </div>

        </div>
    </div>
    <div class="card shadow mb-4">

        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>#</th>
                        <th>PASSAPORTE/BI</th>
                        <th>CÓDIGO</th>
                        <th>NOME</th>
                        <th>ESTADO</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($signups as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->idcard }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->name }} </td>
                            <td>
                                @if ($item->status == 'RECEBIDO')
                                    <b class="bg-primary p-2 rounded text-white">
                                        {{ $item->status }}
                                    </b>
                                @elseif($item->status == 'RECUSADO')
                                    <b class="bg-danger p-2 rounded text-white">
                                        {{ $item->status }}
                                    </b>

                                @else
                                <b class="bg-success p-2 rounded text-white">
                                    {{ $item->status }}
                                </b>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a href='{{ route('admin.signup.show', $item->id) }}'
                                            class="dropdown-item">Detalhes</a>

                                        @if ($item->status == 'APROVADO')
                                            <a href='{{ route('admin.credencial.print', $item->code) }}'
                                                class="dropdown-item" target='_blank'>Imprimir Credencial</a>
                                        @endif

                                        <a href='{{ route('admin.signup.edit', $item->id) }}'
                                            class="dropdown-item">Editar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('JS')
    <script>
        $('#dataTable-2').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [8, 16, 32, -1],
                [8, 16, 32, "All"]
            ],
            "order": [
                [0, 'desc']
            ]
        });
    </script>
@endsection
