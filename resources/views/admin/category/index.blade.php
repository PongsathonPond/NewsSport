@extends('layouts.master')
@section('title','Category')
@section('content')

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
               <form action="{{ url('admin/delete-category') }}" method="POST">
                   @csrf

                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Delete Category with its Post</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                       <input type="hidden" name="category_delete_id" id="category_id">
                       <h5>Are you sure you want to delete this Category with all its posts. ?</h5>
                   </div>
                   <div class="modal-footer">
                       <button type="submit" class="btn btn-danger">Yes Delete</button>
                   </div>
               </form>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card mt-4">

            <div class="card-header">
                <h4>View Category
                    <a href="{{ url('admin/add-category') }}" class="btn btn-primary btn-sm float-end">Add Category</a>
                </h4>
            </div>

            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <div class="table-responsive">
                    <table id="myDataTable" class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <img src="{{ asset('uploads/category/'.$item->image) }}" width="50px" height="50px" alt="Img">
                                </td>
                                <td>{{ $item->status == '1'? 'Hidden':'Shown' }}</td>
                                <td>
                                    <a href="{{ url('admin/edit-category/'.$item->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
{{--                                    <a href="{{ url('admin/delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>--}}
                                    <button type="button" class="btn btn-danger deleteCategoryBtn" value="{{ $item->id }}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="card mb-4">--}}
{{--                    <div class="card-header pb-0">--}}
{{--                        <h3>--}}
{{--                            View Category--}}
{{--                            <a href="{{ url('admin/add-category') }}" class="btn btn-primary btn-sm float-end">Add Category</a>--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                    <div class="card-body px-0 pt-0 pb-2">--}}

{{--                        @if (session('message'))--}}
{{--                            <div class="alert alert-success">{{ session('message') }}</div>--}}
{{--                        @endif--}}

{{--                        <div class="table-responsive p-0">--}}
{{--                            <table class="table align-items-center mb-0">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>--}}
{{--                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>--}}
{{--                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>--}}
{{--                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>--}}
{{--                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>--}}
{{--                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach($category as $item)--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex px-2 py-1">--}}
{{--                                                <div class="d-flex flex-column justify-content-center">--}}
{{--                                                    <h6 class="mb-0 text-sm">{{ $item->id }}</h6>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <p class="text-xs font-weight-bold mb-0">{{ $item->name }}</p>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center text-sm">--}}
{{--                                            <img src="{{ asset('uploads/category/'.$item->image) }}" class="avatar avatar-sm me-3" alt="Img">--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            @if($item->status == '0')--}}
{{--                                                <span class="badge badge-sm bg-gradient-success">Shown</span>--}}
{{--                                            @else--}}
{{--                                                <span class="badge badge-sm bg-gradient-secondary">Hidden</span>--}}
{{--                                            @endif--}}
{{--                                            <span class="text-secondary text-xs font-weight-bold">{{ $item->status == '1'? 'Hidden':'Shown' }}</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <a href="{{ url('admin/edit-category/'.$item->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edid">Edit</a>--}}
{{--                                        </td>--}}
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <button type="button" class="btn btn-danger deleteCategoryBtn" value="{{ $item->id }}">Delete</button>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
@section('scripts')
    <script>

        $(document).ready(function (){
            // $('.deleteCategoryBtn').click(function (e){
            $(document).on('click','.deleteCategoryBtn',function(e){
               e.preventDefault();

               var category_id = $(this).val();
               $('#category_id').val(category_id);
               $('#deleteModal').modal('show');
           });
        });
    </script>
@endsection
