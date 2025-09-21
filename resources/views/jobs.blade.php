<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>

    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}">
            <p><strong>{{ $job['title'] }}:</strong> paid for {{ $job['salary'] }}</p>
        </a>
    @endforeach
</x-layout>
