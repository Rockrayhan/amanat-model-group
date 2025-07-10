@extends('layouts.app')

@section('content')

<h1>
    Update Case Studies
</h1>
<div class="container mt-4">
    <form action="{{ route('casestudy.update', $case->id) }}" method="POST" enctype="multipart/form-data"onsubmit="syncTinyMCEContent()" novalidate>
        @csrf
        @include('casestudies.form', ['edit' => true])
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
