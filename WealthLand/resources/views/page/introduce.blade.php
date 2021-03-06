@extends('page.master')
@section('page-title','trang chu')
@section('content')

    <!-- carousel start -->
    <section class="banner">
        <div class="banner-img">
            <img src="{{ asset('font_end/img/banner-1.jpg') }}" alt="">
        </div>
    </section>
    <!-- end -->
    <section class="control-tabs container">
        <div class="row">
            @foreach ($introduces as $item)
            <div class="col-md-4">
                <a href="" class="btn btn-outline active">{{ $item->title }}</a>
            </div>
            @endforeach

            {{-- <div class="col-md-4">
                <a href="" class="btn btn-outline ">GIỚI THIỆU NĂNG LỰC</a>
            </div>
            <div class="col-md-4">
                <a href="" class="btn btn-outline ">ĐỊNH HƯỚNG PHÁT TRIỂN</a>
            </div> --}}
        </div>
    </section>

    <!-- laay du lieu -->
    <section class="container call-introduct-data">
        <h1 class="partenr-title">
            Giới thiệu về WEALTHLAND
        </h1>
        @foreach($introduces as $introduce)
        <div class="stack-content">
            <div class="text-above">
                {!! $introduce->description !!}
            </div>
        </div>
        <h2 class="partenr-title mb-5">Tầm nhìn - Sứ mệnh - Giá trị cốt lõi</h2>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('font_end/img/tamnhin.jpg') }}" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <h3>TẦM NHÌN</h3>
              {!! $introduce->content !!}
            </div>
        </div>

           <div class="group-content">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="row">
                           <div class="col-md-6">
                               <img src="{{ asset('font_end/img/sumenh.jpg') }}" alt="">
                           </div>
                           <div class="col-md-6">
                               <h2>Sứ Mệnh</h2>
                               <p>Nâng Cao Giá Trị Sống Của Người Việt Cũng Như Đem Lại Lợi Ích Cho Xã Hội Với Những Hành Động Thiết Thực Chung Tay Cho Cộng Đồng</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-12">
                       <div class="row">
                           <div class="col-md-6">
                               <h2 class="mt-2">GIÁ TRỊ CỐT LÕI</h2>
                               <p>{{ $introduce->sologan }}</p>
                           </div>
                           <div class="col-md-6">
                               <img src="{{ asset('font_end/img/giatri.jpg') }}" alt="">
                           </div>
                       </div>
                       </div>
                   </div>
               </div>
           </div>
           </div>
            </div>
        @endforeach
    </section>
    <!-- end lay du lieu -->



@endsection
