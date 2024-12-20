@extends('backend.layouts.index')

@section('title')
Edit Important Information
@endsection

@section('contents')
<section class="section">
    <div class="row">

        <div class="col-2"></div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Important Information</h5>
                    <!-- Form for Editing Important Information -->
                    <form class="row g-3" action="{{ route('important-information.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf        
                        <!-- Title -->
                        <div class="col-12">
                            <label for="title" class="form-label">Title</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                name="title" 
                                value="{{ old('title', $info['title']) }}" 
                                placeholder="Enter Title" 
                                required
                            >
                        </div>
                        
                        <!-- Existing PDF -->
                        <div class="col-12">
                            <label class="form-label">Current PDF</label>
                            <div>
                                @if (isset($info['pdf']))
                                    <a href="{{ asset('images/important_pdfs/' . $info['pdf']) }}" target="_blank">View Current PDF</a>
                                @else
                                    No PDF Uploaded
                                @endif
                            </div>
                        </div>

                        <!-- New PDF Upload -->
                        <div class="col-12">
                            <label for="pdf" class="form-label">Upload New PDF (Optional)</label>
                            <input 
                                type="file" 
                                class="form-control" 
                                name="pdf" 
                                accept="application/pdf"
                            >
                        </div>

                        <!-- Submit Buttons -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('important-information.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form><!-- End Edit Form -->

                </div>
            </div>
        </div>
        
        <div class="col-2"></div>

    </div>
</section>
</main>
@endsection
