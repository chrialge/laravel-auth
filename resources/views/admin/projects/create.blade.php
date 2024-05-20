@extends('layouts.admin')

@section('content')
    <div class="container p-5">

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="d-flex align-items-center justify-content-between">
            <h1>Add new Project</h1>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-dark">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>

        {{-- @include('partials.validator_error') --}}
        <form action="{{ route('admin.projects.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    aria-describedby="nameHelper" placeholder="Lavarel-project" value="{{ old('name') }}" />
                <small id="nameHelper" class="form-text text-muted">Type a name for the current project</small>

                @error('name')
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
                    value="{{ old('start_date') }}" />
                <small id="startDateHelper" class="form-text text-muted">Type a start date for the current project</small>

                @error('start_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="finish_date" class="form-label">Finish Date</label>
                <input type="text" class="form-control @error('finish_date') is-invalid @enderror" name="finish_date"
                    id="finish_date" aria-describedby="finishDateHelper" placeholder="2024-03-20"
                    value="{{ old('finish_date') }}" />
                <small id="finishDateHelper" class="form-text text-muted">Type a finish date for the current project</small>

                @error('finish_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="6">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <textarea class="form-control @error('notes') is-invalid @enderror" name="notes" id="notes" rows="6">{{ old('notes') }}</textarea>
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
