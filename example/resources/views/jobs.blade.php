<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </a>
        </li>
        @endforeach
    </ul>

</x-layout>