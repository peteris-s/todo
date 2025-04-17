<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>

  <h1>{{ $diary->title }}</h1>

  <a href="{{ url('diaries/' . $diary->id . '/edit') }}">
    <button>Edit</button>
  </a>

  <form method="POST" action="/diaries/{{ $diary->id }}">
  @csrf
  @method("delete")

    <button type="submit">dzest</button>
</form>
</x-layout>