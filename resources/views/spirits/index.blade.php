@extends('layout')

@section('title')Spirits @endsection

@section ('content')
    <div class="block">

        <h1>Spirits</h1>

        <a href="/spirits/create">
            Create a spirit
        </a>

        <div>

            @foreach($spirits as $s)
                <ul>
                    <img src="/img/{{ $s->image_path }}.png">
                    <p>
                        Name: {{ $s->name }}
                    </p>
                    <p>
                        Company: {{ $s->company }}
                    </p>
                    <p>
                        ABV: {{ $s->ABV }}%
                    </p>
                    <a href="{{ route('spirits.edit', $s) }}">
                        Edit
                    </a>
                    <br>
                </ul>
                <br>
                <hr>
            @endforeach
        </div>

    </div>

@endsection()
