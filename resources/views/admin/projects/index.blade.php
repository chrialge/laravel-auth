@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="d-flex align-items-center justify-content-between py-5">
            <h3>Projects</h3>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                Add Project
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">slug</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Finish Date</th>
                        <th scope="col">Notes</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($projects as $project)
                        <tr class="">
                            <td scope="row">{{ $project->id }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>{{ $project->start_date }}</td>
                            <td>{{ $project->finish_date }}</td>
                            <td>{{ $project->notes }}</td>
                            @if ($project->status == 0)
                                <td><i class="fa-solid fa-circle" style="color: #0fd212;"></i></td>
                            @elseif ($project->status == 1)
                                <td><i class="fa-solid fa-circle" style="color: #ebee53;"></i></td>
                            @else
                                <td><i class="fa-solid fa-circle" style="color: #fa0000;"></i></td>
                            @endif
                            <td>
                                <div class="d-flex justify-content-between alig-items-center gap-2">
                                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-dark">
                                        <i class="fa-solid fa-eye fs-sm"></i>
                                    </a>
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-dark">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>

                            </td>

                        </tr>
                    @empty
                        <tr class="">
                            <h1>
                                I don't have Projects!!! 😭
                            </h1>
                        </tr>
                    @endforelse


                </tbody>
            </table>
        </div>

        {{-- {{ $projects->link('pagination::bootstrap-5') }} --}}

    </div>
@endsection
