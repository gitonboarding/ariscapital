@extends('backend.layouts.index')
@section('title')
Edit Location
@endsection
@section('contents')
<section class="section">
    <div class="row">

        <div class="col-2"></div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Location</h5>

                    
                    

                    <!-- Form for Editing Location -->
                    <form class="row g-3" action="{{ route('location.update', $location->id) }}" method="post">
                        @csrf
                        
                        <div class="col-12">
                            <label for="state_name" class="form-label">state  Name</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                name="state_name" 
                                value="{{ old('state_name', $location->info['state_name'] ?? '') }}" 
                                placeholder="Enter state Name" 
                                required
                            >
                        </div>
                        <!-- District Name -->
                        <div class="col-12">
                            <label for="district_name" class="form-label">District Name</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                name="district_name" 
                                value="{{ old('district_name', $location->info['name'] ?? '') }}" 
                                placeholder="Enter District Name" 
                                required
                            >
                        </div>
                        
                        <!-- Address -->
                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                name="address" 
                                value="{{ old('address', $location->info['address'] ?? '') }}" 
                                placeholder="Enter Address" 
                                required
                            >
                        </div>

                        <!-- Submit Buttons -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('location.index') }}" class="btn btn-secondary">Cancel</a>
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
