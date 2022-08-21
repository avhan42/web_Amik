@extends('layouts.front')
@section('content')
    <section class="bg-dark align-items-center d-flex"
        style="background:url({{ asset('frontend') }}/assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
        <!-- Main banner background image -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Title -->
                    <h1 class="text-white">Daftar Jurusan</h1>
                    <!-- Breadcrumb -->
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pendidikan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">

            <div class="row mt-3">
                <!-- Main content START -->
                <div class="col-12">

                    <!-- Course Grid START -->
                    <div class="row g-4">
                        @foreach ($pendidikan as $data)
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="{{ asset('storage/' . $data->gambar) }}" class="card-img-top"
                                        alt="{{ $data->judul }}">
                                    <!-- Card body -->
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#"
                                                class="badge bg-purple bg-opacity-10 text-purple">{{ $data->Kd_Pendidikan }}</a>
                                            <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="#">{{ $data->jurusan }}</a>
                                        </h5>

                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>{{ $data->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                        @endforeach
                    </div>
                    <!-- Course Grid END -->


                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
@endsection
