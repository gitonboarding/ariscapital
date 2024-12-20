@extends('backend.layouts.index')

@section('title')
Media List
@endsection

@section('contents')
<section class="section dashboard">
    <div class="row">
        <!-- Start columns -->
        <div class="col-lg-12">
            <div class="row">
                <!-- Recent Media -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body position-relative">
                            <h5 class="card-title">Media List</h5>
                            <a href="{{ route('media.create') }}" class="btn btn-primary position-absolute top-0 end-0 m-3">Add Media</a>
                            <hr>

                            <!-- Table with hoverable rows -->
                            @if (count($data) > 0)
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col" class="w-30">Title</th>
                                        <th scope="col" class="w-30">Image</th>
                                        <th scope="col" class="w-20">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $media)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ json_decode($media->info)->image ?? 'Untitled' }}</td>
                                        <td>
                                            @if (json_decode($media->info)->image)
                                            <img src="{{ asset('images/media/' . json_decode($media->info)->image) }}" width="100" alt="Media Image">
                                            @else
                                            No Image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('media.edit', $media->id) }}" class="text-primary"><i class="bi bi-pencil-square"></i></a>
                                            <a href="{{ route('media.delete', $media->id) }}" class="text-danger" onclick="return confirm('Are you sure you want to delete this media?')"><i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <h4 class="text-center">No media records found</h4>
                            @endif
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>
                <!-- End Recent Media -->
            </div>
        </div>
        <!-- End columns -->
    </div>
</section>
@endsection
