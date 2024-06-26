@extends('layouts.merge.dashboard')
@section('titulo', 'II Reunião Interministerial da Governação Electrónica &  XI Reunião de Ministros das Comunicações da CPLP')
@section('content')



    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                II Reunião Interministerial da Governação Electrónica &  XI Reunião de Ministros das Comunicações da
                <b>CPLP</b> <br>
                <small>Painel Administrativo</small>
            </h2>
        </div>
    </div>

    

    <div class="row">
        <div class="col-12 mb-2">

            <div class="card shadow  text-dark">
                
                <div class="card-body">

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <h5 class="text-dark">Participantes</h5>
    
                        </div>


                     @if ('Administrador' == Auth::user()->level)
                     <div class="col-12 col-md-6 col-lg-6 text-right">
                        <input data-toggle="modal" data-target="#exampleModal" value="Imprimir Relatório" type="button" class="btn btn-primary">
                     </div>
                          @endif

                    </div>

                    
                   
                </div>

                

            </div>
        
        </div>

        <div class="col-12 col-md-3 col-lg-2 mb-2">
            <div class="card shadow bg-secondary text-white">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-light">
                                <i class="fe fe-16 fe-users text-dark mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-light mb-0"><b>GERAL</b></p>
                            <span class="h3 mb-0 text-white">{{$signup_general}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3 col-lg-3 mb-2">
            <div style="background: #180464;" class="card shadow text-white">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-light">
                                <i class="fe fe-16 fe-users text-dark mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-light mb-0"><b>ORGANIZAÇÃO</b></p>
                            <span class="h3 mb-0 text-white">{{$signup_organizer}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-2">
            <div style="background: #180464;" class="card shadow  text-white">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-light">
                                <i class="fe fe-16 fe-users text-dark mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-light mb-0"><b>CONVIDADO</b></p>
                            <span class="h3 mb-0 text-white">{{$signup_invited}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 col-lg-2 mb-2">
            <div style="background: #f0a404;" class="card shadow text-white">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-light">
                                <i class="fe fe-16 fe-users text-dark mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-light mb-0"> <b>IMPRENSA</b>  </p>
                            <span class="h3 mb-0 text-white">{{$signup_press}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3 col-lg-2 mb-2">
            <div style="background: #501c34;" class="card shadow  text-white">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-light">
                                <i class="fe fe-16 fe-users text-dark mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-light mb-0">APOIO TÉCNICO</p>
                            <span class="h3 mb-0 text-white">{{$signup_techinicalSuporter}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


       

        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-primary">
                                <i class="fe fe-16 fe-image text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-dark mb-0">Galerias</p>
                            <span class="h3 mb-0 ">{{ $count_gallery }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-primary">
                                <i class="fe fe-16 fe-image text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-dark mb-0">Programas & Actividades</p>
                            <span class="h3 mb-0 ">{{ $count_schedules }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card shadow bg-primary text-white">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-primary-light">
                                <i class="fe fe-16 fe-users text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-light mb-0">Utilizadores</p>
                            <span class="h3 mb-0 text-white">{{ $count_user }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="h5 page-title">
                        Registo de Actividades
                    </h2>

                    <div class="d-flex flex-column flex-lg-row">

                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas height="400" id="myChart1" style="height:10%; width:0cm "></canvas>
                </div>
            </div>
        </div>

    </div>

    
   
    


    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script>
        var jan = JSON.parse('<?php echo $jan; ?>');

        var fev = JSON.parse('<?php echo $fev; ?>');
        var mar = JSON.parse('<?php echo $mar; ?>');
        var abr = JSON.parse('<?php echo $abr; ?>');
        var maio = JSON.parse('<?php echo $maio; ?>');
        var jun = JSON.parse('<?php echo $jun; ?>');
        var jul = JSON.parse('<?php echo $jul; ?>');
        var ago = JSON.parse('<?php echo $ago; ?>');
        var set = JSON.parse('<?php echo $set; ?>');
        var out = JSON.parse('<?php echo $out; ?>');
        var nov = JSON.parse('<?php echo $nov; ?>');
        var dez = JSON.parse('<?php echo $dez; ?>');
        const ctx = document.getElementById('myChart1').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',

            data: {
                labels: ['Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Ago', 'Setembro',
                    'Outubro', 'Novembro', 'Dezembro'
                ],
                datasets: [{
                    label: 'Acessos Mensais',
                    data: [jan, fev, mar, abr, maio, jun, jul, ago, set, out, nov, dez],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(254, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(254, 159, 64, 0.2)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@include('extra._modalStatistic.index')
@endsection
