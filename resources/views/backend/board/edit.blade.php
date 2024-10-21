@extends('backend.layouts.index')
@section('title')
Board
@endsection
@section('contents')
<section class="section">
    <div class="row">

        <div class="col-2"></div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Board Of Director Information</h5>

                    <!-- Form for Team Information -->
                    <form class="row g-3" action="{{route('board.update',$data->id)}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <!-- Name -->
                        <div class="col-12">
                            <label for="boardName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="boardName" name="name" value="{{$data->name}}" placeholder="Enter name" required>
                        </div>
                        <!-- Position -->
                        <div class="col-12">
                            <label for="boardPosition" class="form-label">Position</label>
                            <input type="text" class="form-control" id="boardPosition" name="position" value="{{$data->position}}" placeholder="Enter position" required>
                        </div>

                        <!-- Description -->
                        <div class="col-12">
                            <label for="boardDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="teamDescription" name="description" value="" rows="4" placeholder="Enter a brief description">{{$data->description}}</textarea>
                        </div>

                        <!-- Image Upload -->
                        <div class="col-12">
                            <label for="boardImage" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="boardImage" name="image" value="" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
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