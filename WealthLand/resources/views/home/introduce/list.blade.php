@extends('home.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <div class="contaner ml-2">
        <h1>Danh Sách Giới Thiệu</h1>
    </div>


    <a href="{{ route('introduce.create') }}" class="btn btn-primary" >
        CREATE +
    </a>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tiêu Đề</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Nội Dung</th>
            <th scope="col">Phương Châm</th>
            <th scope="col">Hành Động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($introduces as $key=>$introduce)
            <tr>
                <td scope="col">{{ ++$key }}</td>
                <td scope="col">{{ $introduce->title }}</td>
                <td scope="col">{!! $introduce->description !!}  </td>
                <td scope="col">{!! $introduce->content !!}</td>
                <td scope="col">{{ $introduce->sologan }}</td>
                <td>
                    <a href="{{ route('introduce.edit',$introduce->id) }}" ><i class="far fa-edit btn btn-warning"></i></a> ||
                    <a href="{{ route('introduce.delete',$introduce->id) }}"><i class="far fa-trash-alt ml-2 btn btn-danger"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <!-- modal create -->

@endsection

