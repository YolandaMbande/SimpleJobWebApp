<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <style>
        /* Custom CSS for additional styling */
        .job-listing {
            transition: background-color 0.3s ease;
        }
        .job-listing:hover {
            background-color: #f0f4f8; /* Light gray background on hover */
        }
        .job-link {
            text-decoration: none;
            color: #2c3e50; /* Darker text color */
        }
        .job-link:hover {
            color: #3490dc; /* Blue text on hover */
        }
    </style>

    <p class="text-lg mb-4">This is the <b>job listings</b> page.</p>

    @foreach($jobs as $job)
        <div class="job-listing mb-4 border border-gray-200 rounded-lg overflow-hidden shadow-sm">
            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 job-link">
                <div>
                    {{$job->employer->name}}
                </div>
               <div>
                   <b class="text-xl">{{$job['title']}}</b>: {{$job['wages']}} per year.
               </div>
            </a>
        </div>
    @endforeach
</x-layout>

