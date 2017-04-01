@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <h2 style="text-align: center;">Настройки</h2>
                <br>
        </div>
        <form class="form-group" role="form" method="POST" action="{{ url('/setting') }}" enctype="multipart/form-data" class="form-inline">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-12 control-label" style="margin-top: 20px; font-size: 24px;">Сменить логин:</label>
                <div class="col-md-12">
                    <input id="name" type="text" class="form-control input-sm" name="new_name" value="{{ old('name') }}" style="margin-top: 20px;" placeholder='Новый логин'>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-md-offset-1">
                    <input type="submit" class="btn btn-sm btn-default" disabled>
                </div>
            </div>
            <form class="form-group" role="form" method="POST" action="{{ url('/setting') }}" enctype="multipart/form-data" class="form-inline">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-12 control-label" style="margin-top: 20px; font-size: 24px;">Сменить пароль:</label>
                <div class="col-md-12">
                    <input id="name" type="text" class="form-control input-sm" name="new_name" value="{{ old('name') }}" style="margin-top: 20px;" placeholder='Старый пароль'>
                </div>
                 <div class="col-md-12">
                    <input id="name" type="text" class="form-control input-sm" name="new_name" value="{{ old('name') }}" style="margin-top: 20px;" placeholder='Ноый пароль'>
                </div>
                 <div class="col-md-12">
                    <input id="name" type="text" class="form-control input-sm" name="new_name" value="{{ old('name') }}" style="margin-top: 20px;" placeholder='Повтор нового пароля'>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-md-offset-1">
                    <input type="submit" class="btn btn-sm btn-default" disabled>
                </div>
            </div>
        
        <form class="form-group">
            <div class="col-md-12">
                <label for="delete" class="col-md-12 control-label" style="margin-top: 20px; font-size: 24px;">Удалить страницу:</label>
                    <input id="delete" type="submit" name="submit_del" class="btn btn-sm btn-default" value="Удалить" disabled>
            </div>
        </form>

        <div class="panel-body">
        </div>

    </div>
</div>
@endsection
