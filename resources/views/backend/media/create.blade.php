@extends('backend.layouts.index')

@section('title')
Media Create
@endsection

@section('contents')
<section class="section">
    <div class="row">

        <div class="col-2"></div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Media Create</h5>
                    <!-- Form for Media Information -->
                    <form class="row g-3" action="{{ route('media.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Image Upload -->
                        <div class="col-12">
                            <label for="image" class="form-label">Image</label>
                            <input 
                                type="file" 
                                class="form-control" 
                                name="image" 
                                accept="image/*"
                                required
                            >

                        </div>
                        <p style="color:red; font-size: 14px">Recommended Size - 1200px x 650px</p>


                        <!-- Submit Buttons -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
