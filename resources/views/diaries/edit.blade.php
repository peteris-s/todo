<x-layout>
<x-slot:title>rediget uzdevumu</x-slot:title>
    <h1>rediget uzdevumu</h1>
<form method="POST" action="/diaries/{{ $diary->id }}">
    @csrf
    @method('PUT')
    <label><input name="title" /></label>
    <label>
  Izpildīts:
  <input name="body" type="hidden" value="0">
  <input name="body" type="checkbox" value="1" {{ old("body", $diary->body) ? 'checked' : '' }}> 
</label>
<label><input name="date" /></label>

    @error("title")
      <p>{{ $message }}</p>
    @enderror
    @error("body")
      <p>{{ $message }}</p>
    @enderror

    <button type="submit">Saglabāt</button>
</form>
</x-layout>