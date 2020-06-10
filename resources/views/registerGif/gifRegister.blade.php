@extends('index')

@section('main')

    <Container >
        <form method="POST" action="{{route('gif.register')}}" class="form-horizontal col-md-6 form-gif">
            @csrf
            <fieldset>
                <div class="panel panel-danger">
                    <div class="panel-heading">Cadastro de GIF</div>

                    <div class="panel-body">
                        @if($errors->any())
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        {{$errors->first()}}
                                    </div>
                                </div>
                            </div>
                        @endif

                            @if (session()->has('sucess'))
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            {{ session()->get('sucess') }}
                                        </div>
                                    </div>
                                </div>
                            @endif

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="URL">URL <h11>*</h11></label>
                            <div class="col-md-8">
                                <input id="URL" name="URL" value="{{ old('URL') }}" placeholder="URL" class="form-control input-md" required="true" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="tags">Tags</label>
                            <div class="col-md-8">
                                <input id="tags" name="tags" value="{{ old('tags') }}" placeholder="Tags" class="form-control input-md" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="password">Senha <h11>*</h11></label>
                            <div class="col-md-8">
                                <input id="password" name="password" value="{{ old('password') }}" placeholder="Senha" class="form-control input-md" required="true" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Cadastrar"></label>
                            <div class="col-md-8">
                                <button id="Cadastrar" class="btn btn-danger" type="Submit">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
        {{--<div class="col-md-6 mx-5">
            <form class="form-horizontal">


                <div class="form-group">
                    <div class="col-md-8">

                        Inclua um gif

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>
                    <div class="col-md-8">
                        <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
                    </div>
                </div>
            </form>
        </div>--}}
    </Container>

@endsection
