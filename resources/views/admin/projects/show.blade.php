@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="d-flex align-items-center justify-content-end gap-2">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-dark">
                <i class="fa-solid fa-arrow-left"></i>
            </a>

            <a class="btn btn-dark" href="{{ route('admin.projects.edit', $project) }}"> <i
                    class="fas fa-pencil-alt fa-sm fa-fw"></i>
            </a>

        </div>
        <div class="d-flex justify-content-between align-items-lg-center py-5">

            <div class="col">
                <h3 class=" d-inline">Project Name: </h3>
                <span style="font-size: 30px;">{{ $project->name }}</span>
            </div>


            <div class="col d-flex justify-content-end gap-3">
                <span><strong>Start date:</strong> {{ $project->start_date }}</span>
                <span><strong>Finish date:</strong> {{ $project->finish_date }}</span>
            </div>
        </div>
        <h5 class=" d-inline">Status: </h5>
        @if ($project->status == 0)
            <span>
                Completed
                <td><i class="fa-solid fa-circle" style="color: #0fd212;"></i></td>
            </span>
        @elseif ($project->STATUS == 1)
            <span>
                Incompleted
                <td><i class="fa-solid fa-circle" style="color: #ebee53;"></i></td>
            </span>
        @else
            <span>
                don't initialized
                <td><i class="fa-solid fa-circle" style="color: #fa0000;"></i></td>
            </span>
        @endif


        <p>
            <strong>Description:</strong>
            {{ $project->description }}
        </p>
        <p>
            <strong>Notes:</strong>
            {{ $project->notes }}
        </p>


    </div>
@endsection
