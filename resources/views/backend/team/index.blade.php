@extends('backend.layouts.index')

@section('contents')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Team</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Start columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Team members</h5>

                                <a href="{{route('team.create')}}" type="button" class="btn btn-primary">create</a>

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
                                    $count=0;
                                    ?>
                                    <tbody>
                                        @foreach($data as $row)
                                        <tr>
                                            <th scope="row">{{++$count}}</th>
                                            <td></td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->position}}</td>
                                            <td>{{$row->description}}</td>
                                            <td><a href="{{route('team.edit',$row->id)}}"><i class="bi bi-pencil-square"></i></a>&nbsp;<a href="{{route('team.delete',$row->id)}}"><i class="bi bi-trash-fill" style="color: #f00;"></i></a></td>
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