@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <?php $user = Auth::user();
        $download = $user->avatar;
        echo '<img src=/uploads/avatars/'.$download.' style="width:150px; height:150px; float:left; margin-right:25px; Alt:Avatar;">';?>
            <h2>{{ $user->name }}</h2>
                <form action="/profile" method="POST" enctype="multipart/form-data">
                    <p><label style="font-size: 18px;">Сменить аватар:</label></p>
                    <p><input type="file" name="avatar"></p>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-sm btn-default">
                </form>
            </div>
    </div>
</div>
@endsection
