<x-layout>
<x-slot:title>Izveidot ierakstu</x-slot:title>
    <h1>Izveidot ierakstu</h1>
    <form method="POST" action="/diaries">
    @csrf
    <input name="title" required />
    <textarea name="body" required></textarea>
    <input type="date" name="date" required>
    
    @error('title')
        <p>{{ $message }}</p>
    @enderror
    @error('body')
        <p>{{ $message }}</p>
    @enderror
    @error('date')
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">Saglabāt</button>
</form>

</x-layout>