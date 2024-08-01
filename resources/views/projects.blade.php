<x-layout>

    <x-slot:heading>
        Projects
    </x-slot:heading>

    <h2>This is the Projects Page!</h2>

    @foreach ($projects as $project)
            <li>
                <a href="/projects/{{ $project['id'] }}">
                {{ $project['project_name'] }}
                </a>
            </li>
    @endforeach
</x-layout>
