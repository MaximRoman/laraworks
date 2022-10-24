@extends('layouts.layout')

@section('title', 'About')

@section('main')
    <div class="about">
        <h1>Num of workers: {{ count($workers) }}</h1>
        <h1>Total Salary: ${{ array_sum(array_map(function ($worker) { return $worker['salary']; }, $workers)) }}</h1>
        <h1>Company income: ${{ $income }}</h1>
    </div>
@endsection