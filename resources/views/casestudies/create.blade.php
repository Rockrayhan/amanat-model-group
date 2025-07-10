@extends('layouts.app')

@section('content')



<div class="container mt-4">
    <h1>
        Create Case Studies
    </h1>
    <form action="{{ route('casestudy.store') }}" method="POST" enctype="multipart/form-data"onsubmit="syncTinyMCEContent()" novalidate>
        @csrf
        @include('casestudies.form')
        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection
