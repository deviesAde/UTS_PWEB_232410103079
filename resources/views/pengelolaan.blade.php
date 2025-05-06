@extends('layouts.auth')

@section('content')
    <x-table :username="$username" :dataHewan="$dataHewan" />
@endsection
