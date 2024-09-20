<h1>Liste des tâches</h1>
<table>
   <thead>
        <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
    <tr>
    <td>{{ $task->title }}</td>
    <td>{{ $task->description }}</td>
    <td> 
    <a href="{{ route('tasks.create', $task->id) }}">Créer</a>
    <a href="{{ route('tasks.show', $task->id) }}">Voir</a>
    <a href="{{ route('tasks.edit', $task->id) }}">Editer</a>
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer<button>
    </form>
    </td>
    </tr>

   @endforeach
  