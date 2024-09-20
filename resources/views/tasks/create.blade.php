<h1>create nouvelle tâches</h1>
<form method="POST" action="{{ route('tasks.store') }}">
@csrf
<label for = "title">Titre:</label>
<input type="text" id="text" name="title"><br>
<label for = "description">description:</label>
<textarea id="description" name="description"></textarea><br>
<button type="submit">Créer</button>
</form>
   {{-- @foreach($tasks as $task)
    <li> {{ &task->title }}</li>
   @endforeach
   </ul> --}}