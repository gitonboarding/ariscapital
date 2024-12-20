@extends('backend.layouts.index')

@section('title')
Location List
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
                            <h5 class="card-title">Location List</h5>
                            <a href="{{ route('location.create') }}" class="btn btn-primary position-absolute top-0 end-0 m-3">Create Location</a>
                            <hr>

                            <!-- Table with hoverable rows -->
                            @if (count($data) > 0)
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col" class="w-20">State Name</th>
                                        <th scope="col" class="w-20">District Name</th>
                                        <th scope="col" class="w-50">Address</th>
                                        <th scope="col" class="w-20">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $location)
                                    <tr>
                                    
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ json_decode($location->info)->state_name ?? 'N/A' }}</td>
                                        <td>{{ json_decode($location->info)->name ?? 'N/A' }}</td>
                                        <td>{{ json_decode($location->info)->address ?? 'N/A' }}</td>
                                        <td>
                                            <a href="{{ route('location.edit', $location->id) }}" class="text-primary"><i class="bi bi-pencil-square"></i></a>
                                            <a href="{{ route('location.delete', $location->id) }}" class="text-danger" onclick="return confirm('Are you sure you want to delete this location?')"><i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <h4 class="text-center">No locations found</h4>
                            @endif
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>
                <!-- End Recent Sales -->
            </div>
        </div>
        <!-- End columns -->
    </div>
</section>
@endsection
