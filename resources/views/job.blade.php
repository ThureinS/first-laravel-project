<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>
    <h2 class="font-bold text-xl">{{ $job['title'] }}</h2>
    <p>The average salary is {{ $job['salary'] }}</p>

</x-layout>
