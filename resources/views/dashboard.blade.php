@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/views/dashboard.css') }}">
@endpush

@section('title', 'Dashboard')

@section('content')
    <div class="dashboardContainer">
        <div class="dashboard-title">
            <h1>Dashboard</h1>   
        </div>

        <x-partials.dashboard-filter 
            :search="$search"
        />
        
        <div class="budgets">
            <x-partials.budget-table :budgets="$budgets" />
        </div>
    </div>
@endsection
