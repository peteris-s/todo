<x-layout>
<x-slot:title>Izveidot ierakstu</x-slot:title>
    <h1>Izveidot ierakstu</h1>
    <form method="POST" action="/todos">
    @csrf
    <input name="content" required />
    <input name="completed" required />
    
    @error('content')
        <p>{{ $message }}</p>
    @enderror
    @error('completed')
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">Saglabāt</button>
</form>

</x-layout>