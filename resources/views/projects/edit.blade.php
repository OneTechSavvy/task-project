@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3><strong>Edit Project</strong></h3>
            <form action="{{ route('projects.update', $project->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group my-3">
                    <label for="name">Project Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $project->name }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Project</button>
            </form>
        </div>
    </div>
@endsection
