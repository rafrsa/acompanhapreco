@if($lista_produtos)
    <div class="row">
    @foreach($lista_produtos as $key => $value)
        <div class="col-md-3  col-xl-3" style="">
            <div class="card">
                <div class="card-header">
                    <div class="circletag" id="nay">
                        {{--<img class="avatar" src="{{ URL::asset('images/faces/female/1.jpg') }}">--}}
                    </div>
                    <span class="nomePost"><a href="{{$value['url']}}" target="_blank"><h3 class="card-title"><b>{{$value['nome_produto']}}</b></h3></a></span>
                    <div class="card-options">
                        {{--<a href="#" class="btn btn-primary btn-sm">Action 1</a>--}}
                        {{--<a href="#" class="btn btn-secondary btn-sm ml-2">Action 2</a>--}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{--<img src="{{ URL::asset('images/erro_imagem.png') }}"/>--}}
                    </div>
                    <div class="row">
                        <span style="font-size: 30px;">R$ {{$value['valor_produto']}}</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@else
    <h1>Sem atividade para exibir!</h1>
@endif
