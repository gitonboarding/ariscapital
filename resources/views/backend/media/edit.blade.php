@extends('backend.layouts.index')

@section('title')
Media Edit
@endsection

@section('contents')
<section class="section">
    <div class="row">

        <div class="col-2"></div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Media Edit</h5>
                    <!-- Form for Media Information -->
                    <form class="row g-3" action="{{ route('media.update', $media->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                       
                        
                        <!-- Current Image -->
                        <div class="col-12 mb-3">
                            <label for="current_image" class="form-label">Current Image</label>
                            <div>
                                @if (json_decode($media->info)->image)
                                    <img src="{{ asset('images/media/' . json_decode($media->info)->image) }}" width="200" alt="Current Media Image">
                                @else
                                    <p>No image available</p>
                                @endif
                            </div>
                        </div>

                        <!-- Image Upload -->
                        <div class="col-12">
                            <label for="image" class="form-label">New Image (Optional)</label>
                            <input 
                                type="file" 
                                class="form-control" 
                                name="image" 
                                accept="image/*"
                            >
                        </div>

                        <!-- Submit Buttons -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Media Form -->

                </div>
            </div>
        </div>
        
        <div class="col-2"></div>

    </div>
</section>
</main>
@endsection
