<x-layout>
<x-slot:title>rediget uzdevumu</x-slot:title>
    <h1>rediget uzdevumu</h1>
<form method="POST" action="/todos/{{ $todo->id }}">
    @csrf
    @method('PUT')
    <label><input name="content" /></label>
    <label>
  Izpildīts:
  <input name="completed" type="hidden" value="0">
  <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }}> 
</label>

    @error("content")
      <p>{{ $message }}</p>
    @enderror
    @error("completed")
      <p>{{ $message }}</p>
    @enderror
    <button type="submit">Saglabāt</button>
</form>
</x-layout>