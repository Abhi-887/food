@extends('admin.layouts.master')

@section('content')


<section class="section">
    <div class="section-header">
        <h1>Services</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Create Services</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>color</label>
                    <input type="text" name="color" class="form-control" value="{{ old('color') }}">
                </div>

                <div class="form-group">
                    <label>icon</label>
                    <input type="text" name="icon" class="form-control" value="{{ old('icon') }}">
                </div>

                <div class="form-group">
                    <label>title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label>description</label>
                    <input type="text" name="description" class="form-control" value="{{ old('description') }}">
                </div>

                <div class="form-group">
                    <label>link</label>
                    <input type="date" name="link" class="form-control" value="{{ old('link') }}">
                </div>



                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" id="">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</section>


@endsection
