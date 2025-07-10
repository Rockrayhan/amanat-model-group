@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <a href="{{ route('casestudy.create') }}" class="btn btn-primary mb-3">Add New</a>
    @foreach ($cases as $case)
    <div class="card mb-3">
        <div class="card-body">
            <h5>{{ $case->title }}</h5>
    
            @if($case->image)
                <img src="{{ asset($case->image) }}" width="150" class="mb-2">
            @endif
    
            <p>{{ $case->short_desc }}</p>
    
            <a href="{{ route('casestudy.edit', $case->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <a href="{{ route('casestudy.delete', $case->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</a>
        </div>
    </div>
    
    @endforeach
</div>
@endsection
