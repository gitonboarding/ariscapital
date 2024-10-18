@extends('backend.layouts.index')

@section('contents')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Team</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Team</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

           <div class="col-2"></div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Team Member Information</h5>

                        <!-- Form for Team Information -->
                        <form class="row g-3" method="POST" action="{{ route('team.save') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Name -->
                            <div class="col-12">
                                <label for="teamName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="teamName" name="name" value="" placeholder="Enter name" required>
                            </div>
                            <!-- Position -->
                            <div class="col-12">
                                <label for="teamPosition" class="form-label">Position</label>
                                <input type="text" class="form-control" id="teamPosition" name="position" value="" placeholder="Enter position" required>
                            </div>

                            <!-- Description -->
                            <div class="col-12">
                                <label for="teamDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="teamDescription" name="description" value="" rows="4" placeholder="Enter a brief description"></textarea>
                            </div>

                            <!-- Image Upload -->
                            <div class="col-12">
                                <label for="teamImage" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" id="teamImage" name="image" value="" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End Team Form -->

                    </div>
                </div>
            </div>
            <div class="col-2"></div>

        </div>
    </section>
</main>

<script>
    // JavaScript to handle image preview
    function previewImage(event) {
        const imagePreview = document.getElementById('profileImagePreview');
        imagePreview.src = URL.createObjectURL(event.target.files[0]);
        imagePreview.onload = () => {
            URL.revokeObjectURL(imagePreview.src); // free memory
        }
    }
</script>
@endsection
