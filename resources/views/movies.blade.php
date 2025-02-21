@extends('layouts.main')
@section('content')
<main class="mt-3">

    <div class="container">
    <div class="row row-cols-3">
        @foreach ($movies as $movie)
        <div class="col g-3">
            <x-card>
                <x-slot:title>{{$movie['title']}}</x-slot:title>
                <x-slot:orgTitle>{{$movie['original_title']}}</x-slot:orgTitle>
                <x-slot:nationality>{{$movie['nationality']}}</x-slot:nationality>
                <x-slot:date>{{$movie['date']}}</x-slot:date>
                <x-slot:stars>
                    @php
                        $fullStars = floor($movie['vote']);
                        $halfStars = ($movie['vote'] - $fullStars) >= 0.5;
                        $emptyStars = 10 - $fullStars - ($halfStars ? 1 : 0);
                    @endphp
                    @for ($i = 0; $i < $fullStars; $i++)
                    <i class="bi bi-star-fill"></i>
                    @endfor
                    @if ($halfStars)
                    <i class="bi bi-star-half"></i>
                    @endif
                    @for($i = 0; $i < $emptyStars; $i++)
                    <i class="bi bi-star"></i>
                    @endfor
                </x-slot:stars>
                <x-slot:vote>
                    {{$movie['vote']}}
                    
                </x-slot:vote>
            </x-card>
        </div>
            @endforeach
        </div>
</main>

@endsection