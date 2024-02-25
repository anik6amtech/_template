
@extends('admin.layouts.admin')  {{-- Assuming you have an admin layout --}}
@section('main-body')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Edit Blog</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ $blog->title }}" required>
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="content" name="content" class="form-control" required>{{ $blog->content }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="published_at">Published At</label>
                        <input type="text" id="published_at" name="published_at" class="form-control" value="{{ $blog->published_at }}" placeholder="YYYY-MM-DD">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Blog</button>
                        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
