@extends('layouts.admin')

@section('content')
    <div class="container p-5">
        <div class="d-flex align-items-center justify-content-between">
            <h1>Add new comic</h1>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-dark">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>

        {{-- @include('partials.validator_error') --}}
        <form action="{{ route('admin.projects.update', $project) }}" method="post">
            @csrf

            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    aria-describedby="nameHelper" placeholder="Lavarel-project" value="{{ old('name', $project->name) }}" />
                <small id="nameHelper" class="form-text text-muted">Type a name for the current project</small>

                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select form-select-lg" name="status" id="status">
                    <option value="0">Completed</option>
                    <option value="1">Incompleted</option>
                    <option value="2" selected>don't initialized</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="text" class="form-control @error('start_date') is-invalid @enderror" name="start_date"
                    id="start_date" aria-describedby="startDateHelper" placeholder="2024-03-20"
                    value="{{ old('start_date', $project->star_date) }}" />
                <small id="startDateHelper" class="form-text text-muted">Type a start date for the current project</small>

                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="finish_date" class="form-label">Finish Date</label>
                <input type="text" class="form-control @error('finish_date') is-invalid @enderror" name="finish_date"
                    id="finish_date" aria-describedby="finishDateHelper" placeholder="2024-03-20"
                    value="{{ old('finish_date', $project->finish_date) }}" />
                <small id="finishDateHelper" class="form-text text-muted">Type a finish date for the current project</small>

                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="6">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <textarea class="form-control @error('notes') is-invalid @enderror" name="notes" id="notes" rows="6">{{ old('notes', $project->notes) }}</textarea>
                @error('notes')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">
                Create
            </button>

        </form>
    </div>
@endsection
