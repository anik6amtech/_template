

@extends('admin.layouts.admin')  {{-- Assuming you have an admin layout --}}
@section('main-body')
<div class="row">
    <div class="col">
        <div class="card-header">
            <h3 class="mb-0">Create Blog</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('blogs.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea id="content" name="content" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="published_at">Published At</label>
                    <input type="text" id="published_at" name="published_at" class="form-control" placeholder="YYYY-MM-DD">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create Blog</button>
                    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
