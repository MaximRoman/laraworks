@extends('layouts.layout')

@section('title', 'Workers')

@section('main')
    <div class="workers">
        @forelse ($workers as $worker)
            <div class="worker">
                <h1 class="id">{{ $worker['id'] }}</h1>
                <h1>Name: {{ $worker['firstname'] }} {{ $worker['lastname'] }};</h1>
                <h1>Age: {{ $worker['age'] }};</h1>
                <h1>Job: {{ $worker['job-title'] }};</h1>
                <h1>Salary: ${{ $worker['salary'] }};</h1>
            </div>
        @empty
            <h1>We don`t have workers</h1>
        @endforelse
    </div>
@endsection