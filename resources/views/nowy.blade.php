@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                    <!-- Formularz -->

                    {!! Form::open(['url'=>'strazaki','class'=>'form-horizontal']) !!}

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('nazwa','wpisz nazwe') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('nazwa',null,['class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('buttonText',['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}

                    {!! Form::open(['url'=>'videos','class'=>'form-horizontal']) !!}

                    @include('videos.form_errors')
                    @include('videos.form',['buttonText'=>'Dodaj wideo'])

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@stop