@extends('layouts.auth')

@section('content')

    <x-profile-card :username="$username" />
@endsection
