@extends('layouts.master')
@section('title','Blog Dashboard')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Categories</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $categories }}
                                    </h5>
                                    <p class="mb-0">
                                        <a class="small text-white stretched-link" href="{{ url('admin/category') }}">
                                            <span class="text-success text-sm font-weight-bolder">View Details</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-archive-2 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Posts</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $posts }}
                                    </h5>
                                    <p class="mb-0">
                                        <a class="small text-white stretched-link" href="{{ url('admin/posts') }}">
                                            <span class="text-success text-sm font-weight-bolder">View Details</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-books text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Users</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $users }}
                                    </h5>
                                    <p class="mb-0">
                                        <a class="small text-white stretched-link" href="{{ url('admin/users') }}">
                                            <span class="text-success text-sm font-weight-bolder">View Details</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Admin</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $admins }}
                                        </h5>
                                        <p class="mb-0">
                                            <a class="small text-white stretched-link" href="{{ url('admin/users') }}">
                                                <span class="text-success text-sm font-weight-bolder">View Details</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-satisfied text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
