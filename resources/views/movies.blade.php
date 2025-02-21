@extends('layouts.main')
@section('content')
    <h1>questo è il titolo
    </h1>
    <x-card>
        <x-slot:title>titolo</x-slot:title>
        <x-slot:description>descrizione della card</x-slot:description>
    </x-card>
@endsection