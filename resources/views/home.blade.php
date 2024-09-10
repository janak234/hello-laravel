<x-layout>
    <h1>{{$greeting}} From home Page</h1>
    <h2>{{$name}} this side</h2>

    <ul>
        @foreach ( $jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}"><strong>{{$job['title']}}</strong> : pays {{$job['salary']}} per year</a>
        </li>
        @endforeach
    </ul>

</x-layout>