<x-layout>
    <h1>Coffee</h1>

    <ul>
        @foreach ($coffees as $coffee)
            <li>
                <a href="{{ route('coffee.show', $coffee) }}">
                    {{ $coffee['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>