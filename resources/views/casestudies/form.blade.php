@php
$edit = $edit ?? false;
@endphp

<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" value="{{ old('title', $edit ? $case->title : '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Tags (comma-separated)</label>
    <input type="text" name="tags" value="{{ old('tags', $edit ? implode(',', $case->tags) : '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Team Involvement</label>
    <input type="text" name="team_involvement" value="{{ old('team_involvement', $edit ? $case->team_involvement : '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Category</label>
    <input type="text" name="category" value="{{ old('category', $edit ? $case->category : '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Short Description</label>
    <input type="text" name="short_desc" class="form-control" value="{{ old('short_desc', $edit ? $case->short_desc : '') }}"></input>
</div>

<div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="image" class="form-control">
    @if ($edit && $case->image)
        <img src="{{$case->image}}" width="120" class="mt-2">
    @endif
</div>

<div class="mb-3">
    <label class="form-label">Services We Provided (comma-separated)</label>
    <input type="text" name="services_we_provided" value="{{ old('services_we_provided', $edit ? implode(',', $case->services_we_provided) : '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Industry</label>
    <input type="text" name="industry" value="{{ old('industry', $edit ? $case->industry : '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Year</label>
    <input type="text" name="year" value="{{ old('year', $edit ? $case->year : '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">The Problem</label>
    <textarea name="the_problem" class="form-control">{{ old('the_problem', $edit ? $case->the_problem : '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">The Solution</label>
    <textarea name="the_solution" class="form-control" rows="4">{{ old('the_solution', $edit ? $case->the_solution : '') }}</textarea>
</div>



<div class="mb-3">
    <label class="form-label">The Results</label>
    <textarea name="the_results" class="form-control">{{ old('the_results', $edit ? $case->the_results : '') }}</textarea>
</div>
