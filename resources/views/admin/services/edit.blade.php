@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Services</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Update Services</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.services.update', $services->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>color</label>
                    <input type="text" name="color" class="form-control" value="{{ $services->color }}">
                </div>

                <div class="form-group">
                    <label>icon</label>
                    <input type="text" name="icon" class="form-control" value="{{ $services->icon }}">
                </div>

                <div class="form-group">
                    <label>title</label>
                    <input type="text" name="title" class="form-control" value="{{ $services->title }}">
                </div>

                <div class="form-group">
                    <label>description</label>
                    <input type="text" name="description" class="form-control" value="{{ $services->description }}">
                </div>

                <div class="form-group">
                    <label>link</label>
                    <input type="date" name="link" class="form-control" value="{{ $services->link }}">
                </div>



                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" id="">
                        <option @selected($services->status === 1) value="1">Active</option>
                        <option @selected($services->status === 0) value="0">Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</section>
@endsection
