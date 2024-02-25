<!-- resources/views/admin/pages/blogs/index.blade.php -->

@extends('admin.layouts.admin')  {{-- Assuming you have an admin layout --}}
@section('main-body')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Blog List</h3>
                <a href="{{ route('blogs.create') }}" class="btn btn-primary float-right">Create Blog</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">titel</th>
                                <th scope="col">content</th>
                                <th scope="col">action</th>

                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <th scope="row">
                                        {{$blog->id}}
                                    </th>
                                    <td>
                                        {{ $blog->title }}
                                    </td>
                                    <td>
                                        {{ $blog->content }}
                                    </td>

                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{ route('blogs.show', $blog->id) }}">View</a>
                                                <a class="dropdown-item" href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
                                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
