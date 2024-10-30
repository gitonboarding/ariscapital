@extends('backend.layouts.index')
@section('title')
Blogs
@endsection
@section('contents')
<section class="section">
    <div class="row">

        <div class="col-2"></div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create a blog</h5>

                    <!-- Form for Team Information -->
                    <form class="row g-3" action="{{route('blog.update', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Title -->
                        <div class="col-12">
                            <label for="blogTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="blogTitle" name="title" value="{{$data->title}}" placeholder="Enter the title here" required>
                        </div>

                        <!-- Description -->
                        <div class="col-12">
                            <label for="blogDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="blogDescription" name="description" value="" rows="4" placeholder="Enter the blog description">{{$data->description}}</textarea>
                        </div>

                        <!-- Featured Image -->
                        <div class="col-12">
                            <label for="blogImage" class="form-label">Featured Image</label>
                            <input type="file" id="image" name="image" class="form-control">
                            <img src="{{asset($data->image)}}" id="image_preview" class="img-fluid rounded mt-2 mb-2" width="100" height="100">
                            
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