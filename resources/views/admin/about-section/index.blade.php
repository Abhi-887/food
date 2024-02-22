@extends('admin.layouts.master')
@section('content')



<section class="section">
    <div class="section-header">
        <h1>About-Section</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Updated About-section</h4>

        </div>

            <!-- General Form Elements -->
            <div class="card-body">
              <form action="{{ route('admin.about-section.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Main title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="main" value="{{ $about_section->main }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description" value="{{ $about_section->description }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputFile" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="image">
                        @if($about_section->image)
                            <img src="{{ asset('storage/' . $about_section->image) }}" class="img-thumbnail mt-2" alt="Selected Image">
                        @else
                            <p>No image selected</p>
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
              </form><!-- End General Form Elements -->
            </div>
        </div>
    </div>
</div>
</div>
</section>



@endsection
