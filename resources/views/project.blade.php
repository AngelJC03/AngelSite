<x-layout>
    <x-slot:heading>
        {{ $project['project_name'] }}
    </x-slot:heading>

    <h2>
        <strong>
            Skills Learned:
        </strong>
        <p>
            {{ $project['hardSkills'] }}.
        </p>
    </h2>
</x-layout>
