@extends('layouts.master')
@section('title','Add Post')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">

            <div class="card-header">
                <h4>Add Posts
                    <a href="{{url('admin/posts')}}" class="btn btn-danger float-end">BACK</a>
                </h4>
            </div>
            <div class="card-body">

                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ url('admin/add-post') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            <option value="">-- Select Category --</option>
                            @foreach($category as $cateitem)
                                <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Post Name</label>
                        <input type="text" name="name" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description" id="mySummernote" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Youtube Iframe Link</label>
                        <input type="text" name="yt_iframe" class="form-control"/>
                    </div>

                    <h4>SEO Tags</h4>
                    <div class="mb-3">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Meta Keyword</label>
                        <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                    </div>

                    <h4>Status</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Status</label>
                                <input type="checkbox" name="status"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary float-end">Save Post</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
