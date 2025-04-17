<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>

  <h1>{{ $todo->content }}</h1>

  <a href="{{ url('todos/' . $todo->id . '/edit') }}">
    <button>Edit</button>
  </a>
  <form method="POST" action="/todos/{{ $todo->id }}">
  @csrf
  @method("delete")

    <button type="submit">dzest</button>
</form>
</x-layout>