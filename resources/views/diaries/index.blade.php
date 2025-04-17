    <x-layout>
  <x-slot:title>
    Dienasgramatas ieraksti
  </x-slot:title>
  <h1>Dienasgramata</h1>
    <ul>
      @foreach ($diaries as $diary)
        <li>
          <a href="{{ url('diaries/' . $diary->id) }}">{{ $diary->title }}</a>
        </li>
      @endforeach
    </ul>
</x-layout>