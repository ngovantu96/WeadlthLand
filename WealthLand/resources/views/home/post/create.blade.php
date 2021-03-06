@extends('home.master')
@section('page-title','Danh Sách Banner')
@section('content')
    <div class="contaner ml-2">
        <h1>Thêm Mới Bài Viết</h1>
    </div>

    <div class="container">
        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="title">Tiêu Đề</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="category_post">Loại Bài Viết</label>
                        <select class="form-control" name="category_post">
                            @foreach($categoryPosts as $categoryPost)
                                <option value="{{ $categoryPost->id }}">{{ $categoryPost->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="image">Hình Ảnh</label>
                        <input type="file" class="form-control" name="image" id="image" >
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="content">Nội Dung</label>
                        <textarea class="ckeditor" id="ckeditor" name="content"></textarea>
                        @error('content')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>


@endsection

