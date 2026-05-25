@extends('layouts.app')

@section('content')
    <h1>Welcome back, {{ Auth::user()->name }}! ❤️</h1>
    <p>This is your private dashboard. You can start filling this space with your favorite moments.</p>

    <div
        style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-top: 20px;">
        <h3>Dashboard Widget Placeholder</h3>
        <p>Later, we can put a shared calendar, a countdown timer, or recent photos right here.</p>
    </div>
@endsection