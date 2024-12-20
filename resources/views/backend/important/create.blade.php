@extends('backend.layouts.index')

@section('title')
important-information Create
@endsection

@section('contents')
<section class="section">
    <div class="row">

        <div class="col-2"></div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Information Create</h5>
                    <!-- Form for Media Information -->
                    <form class="row g-3" action="{{ route('important-information.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Title Field -->
                        <div class="col-12">
                            <label for="title" class="form-label">Title</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                name="title" 
                                value="{{ old('title') }}" 
                                placeholder="Enter Title" 
                                required
                            >
                        </div>
                        
                        <!-- PDF Upload -->
                        <div class="col-12">
                            <label for="pdf" class="form-label">Upload PDF</label>
                            <input 
                                type="file" 
                                class="form-control" 
                                name="pdf" 
                                accept="application/pdf"
                                required
                            >
                        </div>

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
