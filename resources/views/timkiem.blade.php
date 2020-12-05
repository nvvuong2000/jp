@extends('home_layout')
@section('home_content')



<div class="careerfy-main-content">

    <!-- Main Section -->
    <div class="careerfy-main-section careerfy-subheader-form-full">
        <div class="container">

            <p class="bg-info text-white text-center"> Có <strong>{{count($chitiet_tintd,COUNT_RECURSIVE)}}</strong> kết quả tìm kiếm</p>
            <div class="row">

                <div class="col-md-12 careerfy-typo-wrap">

                    <div class="careerfy-job careerfy-joblisting-classic">

                        <ul class="careerfy-row">
                            @foreach($chitiet_tintd as $key => $chitiet)
                            <li class="careerfy-column-12">
                                <div class="careerfy-joblisting-classic-wrap">
                                    <figure><a href="#"><img src="extra-images/job-listing-logo-1.png" alt=""></a></figure>
                                    <div class="careerfy-joblisting-text">
                                        <div class="careerfy-list-option">
                                            <h2><a href="{{URL ::to('/chitiet-tintuyendung/'.$chitiet->id_tintuyendung)}}">{{$chitiet->TieuDe}}</a>
                                                <ul>
                                                    <li><a href="{{URL::to('/thongtin-doanhnghiep/'.$chitiet->id_doanhnghiep)}}">@ {{$chitiet->tendoanhnghiep}}</a>
                                                    </li>
                                                    <li><i class="careerfy-icon careerfy-maps-and-flags"></i> {{$chitiet->diachi}}</li>
                                                    <li><i class="careerfy-icon careerfy-filter-tool-black-shape"></i> {{$chitiet->nganhnghe_name}}</li>
                                                </ul>
                                        </div>
                                        <div class="careerfy-job-userlist">
                                            @if($chitiet->hinhThuc_id==1)
                                            <a href="#" class="careerfy-option-btn">{{$chitiet->hinhThuc_name}}</a>;

                                            @elseif($chitiet->hinhThuc_id==2)
                                            <a href="#" class="careerfy-option-btn careerfy-red">{{$chitiet->hinhThuc_name}}</a>

                                            @else
                                            <a href="#" class="careerfy-option-btn careerfy-green">{{$chitiet->hinhThuc_name}}</a>

                                            @endif
                                            <!-- <a href="#" class="careerfy-job-like"><i class="fa fa-heart"></i></a> -->
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- Pagination -->

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Main Section -->

</div>
<!-- Main Content -->

<!-- Footer -->

<!-- Footer -->

</div>
<!-- Wrapper -->

<!-- ModalLogin Box -->
<div class="careerfy-modal fade careerfy-typo-wrap" id="JobSearchModalSignup">
    <div class="modal-inner-area">&nbsp;</div>
    <div class="modal-content-area">
        <div class="modal-box-area">

            <div class="careerfy-modal-title-box">
                <h2>Login to your account</h2>
                <span class="modal-close"><i class="fa fa-times"></i></span>
            </div>
            <form>
                <div class="careerfy-box-title">
                    <span>Choose your Account Type</span>
                </div>
                <div class="careerfy-user-options">
                    <ul>
                        <li class="active">
                            <a href="#">
                                <i class="careerfy-icon careerfy-user"></i>
                                <span>Candidate</span>
                                <small>I want to discover awesome companies.</small>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="careerfy-icon careerfy-building"></i>
                                <span>Employer</span>
                                <small>I want to attract the best talent.</small>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="careerfy-user-form">
                    <ul>
                        <li>
                            <label>Email Address:</label>
                            <input value="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-mail"></i>
                        </li>
                        <li>
                            <label>Password:</label>
                            <input value="Enter Password" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-multimedia"></i>
                        </li>
                        <li>
                            <input type="submit" value="Sign In">
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="careerfy-user-form-info">
                        <p>Forgot Password? | <a href="#">Sign Up</a></p>
                        <div class="careerfy-checkbox">
                            <input type="checkbox" id="r50" name="rr" />
                            <label for="r50"><span></span> Remember Password</label>
                        </div>
                    </div>
                </div>
                <div class="careerfy-box-title careerfy-box-title-sub">
                    <span>Or Sign In With</span>
                </div>
                <div class="clearfix"></div>
                <ul class="careerfy-login-media">
                    <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                    <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                    <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                    <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                </ul>
            </form>

        </div>
    </div>
</div>
<!-- Modal Signup Box -->
<div class="careerfy-modal fade careerfy-typo-wrap" id="JobSearchModalLogin">
    <div class="modal-inner-area">&nbsp;</div>
    <div class="modal-content-area">
        <div class="modal-box-area">

            <div class="careerfy-modal-title-box">
                <h2>Signup to your account</h2>
                <span class="modal-close"><i class="fa fa-times"></i></span>
            </div>
            <form>
                <div class="careerfy-box-title">
                    <span>Choose your Account Type</span>
                </div>
                <div class="careerfy-user-options">
                    <ul>
                        <li class="active">
                            <a href="#">
                                <i class="careerfy-icon careerfy-user"></i>
                                <span>Candidate</span>
                                <small>I want to discover awesome companies.</small>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="careerfy-icon careerfy-building"></i>
                                <span>Employer</span>
                                <small>I want to attract the best talent.</small>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="careerfy-user-form careerfy-user-form-coltwo">
                    <ul>
                        <li>
                            <label>First Name:</label>
                            <input value="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-user"></i>
                        </li>
                        <li>
                            <label>Last Name:</label>
                            <input value="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-user"></i>
                        </li>
                        <li>
                            <label>Email Address:</label>
                            <input value="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-mail"></i>
                        </li>
                        <li>
                            <label>Phone Number:</label>
                            <input value="Enter Your Phone Number" onblur="if(this.value == '') { this.value ='Enter Your Phone Number'; }" onfocus="if(this.value =='Enter Your Phone Number') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-technology"></i>
                        </li>
                        <li class="careerfy-user-form-coltwo-full">
                            <label>Categories:</label>
                            <div class="careerfy-profile-select">
                                <select>
                                    <option>Sales & Marketing</option>
                                    <option>Sales & Marketing</option>
                                </select>
                            </div>
                        </li>
                        <li class="careerfy-user-form-coltwo-full">
                            <img src="extra-images/login-robot.png" alt="">
                        </li>
                        <li class="careerfy-user-form-coltwo-full">
                            <input type="submit" value="Sign Up">
                        </li>
                    </ul>
                </div>
                <div class="careerfy-box-title careerfy-box-title-sub">
                    <span>Or Sign Up With</span>
                </div>
                <div class="clearfix"></div>
                <ul class="careerfy-login-media">
                    <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                    <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                    <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                    <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                </ul>
            </form>

        </div>
    </div>

    @endsection