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
                    <form class="row g-3" action="{{url('blog/save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Title -->
                        <div class="col-12">
                            <label for="blogTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="blogTitle" name="title" value="" placeholder="Enter the title here" required>
                        </div>

                        <!-- Description -->
                        <div class="col-12">
                            <label for="blogDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="blogDescription" name="description" value="" rows="4" placeholder="Enter the blog description"></textarea>
                        </div>

                        <!-- Featured Image -->
                        <div class="col-12">
                            <label for="blogImage" class="form-label">Featured Image</label>
                            <input type="file" class="form-control" id="blogImage" name="image" value="" required>
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
@endsection