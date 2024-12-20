@extends('backend.layouts.index')

@section('title')
Important Information List
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
                            <h5 class="card-title">Important Information List</h5>
                            <a href="{{ route('important-information.create') }}" class="btn btn-primary position-absolute top-0 end-0 m-3">Add Information</a>
                            <hr>

                            <!-- Table with hoverable rows -->
                            @if (count($data) > 0)
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col" class="w-30">Title</th>
                                        <th scope="col" class="w-30">PDF File</th>
                                        <th scope="col" class="w-20">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $media)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>
                                            {{ optional(json_decode($media->info))->title ?? 'Untitled' }}
                                        </td>
                                        <td>
                                            @if (optional(json_decode($media->info))->pdf)
                                            <a href="{{ asset('images/important_pdfs/' . json_decode($media->info)->pdf) }}" target="_blank">View PDF</a>
                                            @else
                                            No File
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('important-information.edit', $media->id) }}" class="text-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="{{ route('important-information.delete', $media->id) }}" class="text-danger" onclick="return confirm('Are you sure you want to delete this information?')">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            @else
                            <h4 class="text-center">No records found</h4>
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