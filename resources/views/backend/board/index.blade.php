@extends('backend.layouts.index')
@section('title')
Board
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
                            <h5 class="card-title">Board Of Directors</h5>
                            <a href="{{route('board.create')}}" type="button" class="btn btn-primary position-absolute top-0 end-0 mt-3">Create Member</a>
                            <hr>

                            <!-- Table with hoverable rows -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <?php
                                $count = 0;
                                ?>
                                <tbody>
                                    @foreach($data as $row)
                                    <tr>
                                        <th scope="row">{{++$count}}</th>
                                        <td></td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->position}}</td>
                                        <td>{{$row->description}}</td>
                                        <td><a href="{{route('board.edit', $row->id)}}"><i class="bi bi-pencil-square"></i></a>&nbsp;<a href="{{route('board.delete', $row->id)}}"><i class="bi bi-trash-fill" style="color: #f00;"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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