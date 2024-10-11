@extends('layouts.habbolayout')
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{asset('css/melon.css')}}">
    @endpush
    @section('main')
            {{var_dump($test)}}
    @endsection