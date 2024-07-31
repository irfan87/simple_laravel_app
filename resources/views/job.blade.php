<x-layout>
	<x-slot:heading>
		Job
	</x-slot:heading>
	<p class="font-bold text-lg">
		{{ $job['title'] }}
	</p>
	<h1>Salary: {{ $job['salary'] }} / year</h1>
</x-layout>