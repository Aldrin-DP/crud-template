@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    {{ auth()->user()->name }}
@endsection