
@extends('layouts.app')

@section('content')

<main>
    <div class="container py-4"  style="overflow: scroll ; height: 100vh">
        <ul class="row gy-4 list-unstyled" >
            @foreach ($trains as $train)
                
            
            <li class="col-4 ">
                <div class="card h-100 d-flex align-items-center">
                    
                    <h4>Azienda: {{$train->azienda}}</h4>
                    <p>Stazione di partenza: {{$train->stazione_di_partenza}}</p>
                    <p>Stazione di arrivo: {{$train->stazione_di_arrivo}}</p>
                    <p>Ora di partenza: {{$train->orario_di_partenza}}</p>
                    <p>Ora di arrivo: {{$train->orario_di_arrivo}}</p>
                    <p>Codice treno: {{$train->codice_treno}}</p>
                    <p>Numero di carrozze: {{$train->numero_carrozze}}</p>
                    @if ($train->in_orario === 0)
                    <p>il treno è in ritardo</p>

                        
                    @else
                    <p>il treno è in orario</p>   
                    @endif
                    
                        
                    @if ($train->cancellato === 0)
                    <p>la corsa è attiva</p>

                        
                    @else
                    <p>la corsa è stata cancellata</p>   
                    @endif
                    
                    
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</main>
    
@endsection