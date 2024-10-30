@extends('backend.layouts.index')
@section('title')
Teams
@endsection
@section('contents')
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
                            <input type="file" id="image" name="image" class="form-control">
                            <img src="#" id="image_preview" class="d-none img-fluid rounded mt-2 mb-2" width="100" height="100">
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
    ClassicEditor.create(document.querySelector('#blogDescription'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    const input = document.getElementById("image");
    const preview = document.getElementById("image_preview");
    input.addEventListener('change', function() {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.classList.remove('d-none');
                preview.setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    });
</script>
@endsection