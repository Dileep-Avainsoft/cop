<x-app-layout>
    @include('admin.partial.header')
    {{-- @include('admin.partial.header') --}}
    @include('admin.partial.loader')
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        {{-- @include('admin.partial.topbar') --}}
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('admin.partial.sidebar')


            <div class="page-body">

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header" style="display: flex; justify-content: space-between;">
                                    <h5>Car Type</h5>
                                    <a href="{{ route('car_type.view') }} " class="btn btn-primary">View Car Type</a>
                                </div>

                                <form method="post" action="{{route('car_type.update',encrypt($car_type_edit->car_type_id))}}"
                                    class="form theme-form" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <label class="form-label" for="exampleFormControlTextarea14">Car
                                                        Type: </label>
                                                    <input type="text" class="form-control btn-square"
                                                        id="exampleFormControlTextarea14" name="car_type_name"
                                                        style="width: 500px" placeholder="Enter Car Type"
                                                        value="{{ $car_type_edit->car_type_name }}">
                                                    @if ($errors->has('car_type_name'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('car_type_name') }}</span>
                                                    @endif
                                                </div>
                                                <br>
                                                <div>
                                                    <img src="{{asset('CarType/'.$car_type_edit->car_type_id.'/'.$car_type_edit->car_type_image)}}" width="300px" alt="">
                                                    <label class="form-label" for="exampleFormControlTextarea14">Car
                                                        Type Image: </label>
                                                    <input type="file" class="form-control btn-square"
                                                        id="exampleFormControlTextarea14" name="car_type_image"
                                                        style="width: 500px"
                                                        value="{{ $car_type_edit->car_type_image }}">
                                                    {{-- @if ($errors->has('cartype_image'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('cartype_image') }}</span>
                                                    @endif --}}
                                                </div>
                                                <br>
                                                <div class="media mb-2">
                                                    <label class="col-form-label m-r-10">Status</label>
                                                    <div class="media-body text-end icon-state switch-outline">
                                                        <label class="switch">
                                                            <input type="checkbox" id="status" name="status"
                                                                @if ($car_type_edit->status  == 1) checked @endif; />
                                                            <span class="switch-state bg-primary"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary" name="submit" type="submit">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>



        </div>
    </div>
    @include('admin.partial.scripts')
    <!-- Plugins JS start-->
    {{-- <script src="assets/js/clock.js"></script> --}}
    {{-- <script src="assets/js/chart/apex-chart/moment.min.js"></script> --}}
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('assets/js/notify/index.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>
    <!-- Plugins JS Ends-->
    {{-- <script>
        --}}
    {{--  new WOW().init(); --}}
    {{--
    </script> --}}
    {{-- @include('admin.partial.footer-end') --}}



</x-app-layout>
