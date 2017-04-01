@extends ('layouts.app')

@section ('content')
		
	<h2>Создание новой темы</h2>
	<br>

<form method="POST" action="/topics">
{{ csrf_field() }}


  <div class="form-group">
    <label for="title">Название темы:</label>
    <input type="text" class="form-control col-md-6" id="title" name="title" required>
  </div>

  <div class="form-group">
    <label for="section">Выбор раздела:</label>
    <select class="form-control col-md-2" id="section" name="section" required>
    	<option value='1'>1й</option>
    	<option value='2'>2й</option>
    	<option value='3'>3й</option>
    	<option value='4'>4й</option>
    </select>
  </div>

  <div class="form-group">
    <label for="body">Сообщение:</label>
    <textarea class="form-control col-md-6" id="body" name="body" required></textarea>
  </div>
  
  <button type="submit" class="btn btn-default">Отправить</button>

</form>

@endsection