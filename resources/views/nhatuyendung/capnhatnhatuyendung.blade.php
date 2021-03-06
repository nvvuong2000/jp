@extends('home_layout')
@section('home_content')
<div class="careerfy-main-content">

    <!-- Main Section -->
    <div class="careerfy-main-section careerfy-dashboard-fulltwo">
        <div class="container">
            @if(session()->has('message'))
            <div class="alert alert-info text-center " style="font-size:16px">
                {{ session()->get('message') }}
            </div>
            @endif
            <div class="row">
                <aside class="careerfy-column-3">
                    <div class="careerfy-typo-wrap">
                        <div class="careerfy-employer-dashboard-nav">
                            <figure>
                                <a href="#" class="employer-dashboard-thumb"><img style="height:100%" src="{{$user[0]->link}}" alt=""></a>
                                <figcaption>
                                    <form action="{{URL::to('/updateImg')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <!-- Chọn file để upload: -->
                                        <!-- <input type="file" name="fileupload" id="fileupload">
                    -->
                                        <div class="content">

                                            <div class="box">
                                                <input type="file" name="file-7" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple style="display:none" />
                                                <label for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                                        </svg> Cập nhật hình ảnh &hellip;</strong></label>
                                                <!-- <button type="submit" class="btn btn-outline-primary"><i class="fas fa-save"></i></button> -->
                                                <button type="submit" style="background:#2980b9; border-radius: 0px 0px 0px 0px;" class="btn btn-outline-primary btn-lg btn-block"><i class="far fa-save"></i> Save</button>
                                            </div>

                                    </form>
                                </figcaption>
                            </figure>
                            <ul>
                                <li><a href="{{URL::to('/thongtin-doanhnghiep')}}"></i> Thông tin doanh nghiệp</a></li>
                                <!-- <li><a href="{{URL::to('/quan-li-ho-so')}}"></i> Quản lí hồ sơ</a></li> -->
                                <li class="active"><a href="{{URL::to('/capnhat-doanhnghiep')}}"></i> Cập nhật doanh nghiệp</a></li>


                                <li><a href="{{URL::to('/danh-sach-ung-tuyen')}}"> Danh sách ứng tuyển</a></li>
                                <li><a href="{{URL::to('/dangtuyen-nhanvien')}}"> Đăng tuyển nhân viên</a></li>
                                <li><a href="{{URL::to('/quanly-tintuyendung')}}">Quản lý tin tuyển dụng</a></li>

                                <!-- <li><a href="{{URL::to('/thaydoimatkhau')}}"> Đổi mật khẩu</a></li> -->

                            </ul>
                        </div>
                    </div>
                </aside>
                <div class="careerfy-column-9">
                    <div class="careerfy-typo-wrap">
                        <form action="{{url::to('/luu-doanhnghiep')}}" method="post">
                            {{csrf_field()}}
                            <div class="careerfy-employer-box-section">
                                <div class="careerfy-profile-title">
                                    <h2>Thông tin doanh nghiệp</h2>
                                </div>
                                <?php

                                // $message = Session::get('message');
                                // if ($message) {
                                //     echo $message;
                                //     Session::put('message', null);
                                // }

                                ?>
                                @foreach($dn as $key => $dn)
                                <ul class="careerfy-row careerfy-employer-profile-form">
                                    <input value="{{$_SESSION['id']}}" name="id_doanhnghiep" type="hidden">
                                    <li class="careerfy-column-6">
                                        <label>Tên doanh nghiệp</label>
                                        <input value="{{$dn->tendoanhnghiep}}" name="ten" type="text" <?php if ($_SESSION['id_quyen'] == 0) {
                                                                                                            echo "readonly";
                                                                                                        } ?>>
                                    </li>
                                    <li class="careerfy-column-6">
                                        <label>Email *</label>
                                        <input name="email" value="{{$dn->doanhnghiep_email}}" type="text" <?php if ($_SESSION['id_quyen'] == 0) {
                                                                                                                echo "readonly";
                                                                                                            } ?>>
                                    </li>
                                    <li class="careerfy-column-6">
                                        <label>Số điện thoại *</label>
                                        <input name="sdt" value="{{$dn->doanhnghiep_sdt}}" type="text" <?php if ($_SESSION['id_quyen'] == 0) {
                                                                                                            echo "readonly";
                                                                                                        } ?>>
                                    </li>
                                    <li class="careerfy-column-6">
                                        <label>Website</label>
                                        <input name="web" value="{{$dn->doanhnghiep_website}}" type="text" <?php if ($_SESSION['id_quyen'] == 0) {
                                                                                                                echo "readonly";
                                                                                                            } ?>>
                                    </li>
                                    <li class="careerfy-column-6">
                                        <label>Fax</label>
                                        <input name="fax" value="{{$dn->doanhnghiep_fax}}" type="text" <?php if ($_SESSION['id_quyen'] == 0) {
                                                                                                            echo "readonly";
                                                                                                        } ?>>
                                    </li>


                                    <li class="careerfy-column-6">
                                        <label>Loại ngành nghề</label>
                                        <div class="careerfy-profile-select">
                                            <select name="loai">

                                                @foreach($loainganhnghe as $key =>$nganhnghe)
                                                <!-- <option value="{{$nganhnghe->nganhnghe_id}}">{{$nganhnghe->nganhnghe_name}}</option> -->

                                                <option value="{{$nganhnghe->nganhnghe_id}}" <?php
                                                                                                if ($nganhnghe->nganhnghe_id == $dn->id_loainganhnghe) {
                                                                                                    echo 'selected';
                                                                                                } else {
                                                                                                    echo '';
                                                                                                } ?>>{{$nganhnghe->nganhnghe_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </li>



                                    <li class="careerfy-column-12">
                                        <label>Mô tả *</label>
                                        <textarea name="mota">{{$dn->doanhnghiep_mota}}</textarea <?php if ($_SESSION['id_quyen'] == 0) {
                                                                                                        echo "readonly";
                                                                                                    } ?>>
                                    </li>
                                </ul>
                            </div>
                            <div class="careerfy-employer-box-section">
                                <div class="careerfy-profile-title">
                                    <h2>Vị trí</h2>
                                </div>
                                <ul class="careerfy-row careerfy-employer-profile-form">


                                    <li class="careerfy-column-6">
                                        <label>Tỉnh/thành phố *</label>
                                        <div class="careerfy-profile-select">
                                            <select name="tinhthanh">
                                                @foreach($tinhthanh as $key =>$tinhthanh)
                                                <option value="{{$tinhthanh->tinhthanh_id}}" selected=" <?php $tinhthanh->tinhthanh_id == $dn->doanhnghiep_TinhThanhPho ? 'selected' : ''; ?>">{{$tinhthanh->tinhthanh_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </li>

                                    <li class="careerfy-column-10">
                                        <label>Địa chỉ đầy đủ *</label>
                                        <input name="diachi" value="{{$dn->diachi}}" onblur="if(this.value == '') { this.value ='Ha Dong - Ha Noi - Viet Nam'; }" onfocus="if(this.value =='Ha Dong - Ha Noi - Viet Nam') { this.value = ''; }" type="text" <?php if ($_SESSION['id_quyen'] == 0) {
                                                                                                                                                                                                                                                                echo "readonly";
                                                                                                                                                                                                                                                            } ?>>
                                    </li>
                                    <li class="careerfy-column-2">
                                        <button class="careerfy-findmap-btn">Find on Map</button>
                                    </li>
                                    <li class="careerfy-column-6">
                                        <label>Latitude</label>
                                        <input value="{{$dn->doanhnghiep_vido}}" name="vido" type="text" <?php if ($_SESSION['id_quyen'] == 0) {
                                                                                                                echo "readonly";
                                                                                                            } ?>>
                                    </li>
                                    <li class="careerfy-column-6">
                                        <label>Longitude</label>
                                        <input value="{{$dn->doanhnghiep_kinhdo}}" name="kinhdo" type="text" <?php if ($_SESSION['id_quyen'] == 0) {
                                                                                                                echo "readonly";
                                                                                                            } ?>>
                                    </li>
                                    <li class="careerfy-column-12">
                                        <div class="careerfy-profile-map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22589232.038285658!2d-103.9763543971716!3d46.28054447273778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1507595834401"></iframe></div>
                                        <span class="careerfy-short-message">For the precise location, you can drag and drop the pin.</span>
                                    </li>

                                </ul>
                            </div>
                            @endforeach
                            <input type="submit" class="careerfy-employer-profile-submit" value="Save Setting">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Main Section -->
</div>
>

@endsection