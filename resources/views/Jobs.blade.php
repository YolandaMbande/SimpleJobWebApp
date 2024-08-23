<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    <p>This is the <b>job listings</b> page.</p>

    @foreach($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}">
                <b>{{$job['title']}}:</b> {{$job['wages']}} per year.
            </a>
        </li>
    @endforeach
</x-layout>
