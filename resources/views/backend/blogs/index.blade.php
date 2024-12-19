@extends('backend.layouts.index')
@section('title')
Blogs
@endsection
@section('contents')


<section class="section dashboard">
  <div class="row">
    <!-- Start columns -->
    <div class="col-lg-12">
      <div class="row">
        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card">
            <div class="card-body position-relative">
              <h5 class="card-title">Blogs</h5>
              <a href="{{route('blog.create')}}" type="button" class="btn btn-primary position-absolute top-0 end-0 m-3">Create Blog</a>
              <hr>

              <!-- Table with hoverable rows -->
              @if (count($data) > 0)
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col" class="w-25">Title</th>
                    <th scope="col" class="w-50">Description</th>
                    <th scope="col" class="w-10">Action</th>
                  </tr>
                </thead>
                <?php
                $count = 0;
                ?>
                <tbody>
                  @foreach($data as $row)
                  <tr>
                    <th scope="row">{{++$count}}</th>
                    <td>
                      @if($row->image)
                      <img src="{{ asset($row->image) }}" alt="" width="60" height="60" style="object-fit: cover;">
                      @else
                      <span>No Image</span>
                      @endif
                    </td>
                    <td>{{$row->title}}</td>
                    <td>{!!$row->description!!}</td>
                    <td><a href="{{route('blog.edit', $row->id)}}"><i class="bi bi-pencil-square"></i></a>&nbsp;<a onclick="return confirm('Are you sure?')" href="{{route('blog.delete', $row->id)}}"><i class="bi bi-trash-fill" style="color: #f00;"></i></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @else
              <h4 class="text-center">No data</h4>
              @endif

              <!-- End Table with hoverable rows -->
            </div>
          </div>
        </div><!-- End Recent Sales -->
      </div>
    </div><!-- End  columns -->
  </div>
</section>


</main>

@endsection