<h1>Editer une tâches</h1>
<form method="POST" action="{{ route('tasks.update', $task->id) }}">
@csrf
@method('PUT')
<label for = "title">Titre:</label>
<input type="text" id="text" name="title" value="{{ $task->title }}"><br>
<label for = "description">description:</label>
<textarea id="description" name="description">{{ $task->description }}</textarea><br>
<button type="submit">Editer</button>
</form>