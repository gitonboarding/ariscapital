@extends('backend.layouts.index')
@section('title')
Dashboard
@endsection
@section('contents')

<style>
    .main-page {
        display: flex !important;
        align-items: center;
        height: 80vh;
    }

    .main-page .heading-text {
        text-align: center;
        text-transform: uppercase;
    }
</style>

    <section class="main-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-text">
                        <h2>Welcome to admin panel.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>


@endsection