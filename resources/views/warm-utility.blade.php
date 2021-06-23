@extends('statamic::layout')
@section('title', __('Warm the cache'))

@section('content')
 

    <div class="mt-3">
        <a href="{{ cp_route('utilities.warm-utility.warm') }}" 
            class="mr-2 btn-primary btn-lg text-white">
            Warm the cache</a>
    </div>
@stop