<x-app-layout>
    @include('admin.partial.header')
    {{-- @include('admin.partial.header') --}}
    {{-- @include('admin.partial.loader') --}}
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
                                    <h5>Brand Entry</h5>
                                    <a href="{{ route('brand.view')}} " class="btn btn-primary"> View Brand</a>
                                </div>

                                <form class="form theme-form" action="{{ route('brand.update', ['id' => encrypt($brand_edit->brand_id)]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">

                                                <div class="mb-3">
                                                    <label class="form-label" for="exampleFormControlSelect17">Select Car Stage</label>
                                                    <select style="width: 500px" class="form-select input-air-primary digits"
                                                        id="exampleFormControlSelect17" name="car_stage_id">
                                                        <option value="" selected disabled>Select Car Stage</option>
                                                        @foreach ($CarStage_name as $data)
                                                            <option value="{{ $data->car_stage_id }}"
                                                                @if (old('car_stage_id') == $data->car_stage_id) selected @endif>
                                                                {{ $data->car_stage_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->has('car_stage_id'))
                                                        <span class="text-danger">{{ $errors->first('car_stage_id') }}</span>
                                                    @endif
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="exampleInputPassword16">Brand Name
                                                        :</label>
                                                    <input style="width: 500px" class="form-control input-air-primary"
                                                        name="brand_name" id="exampleInputPassword16" type="text"
                                                        placeholder="Enter Brand Name" value="{{ $brand_edit->brand_name}}">
                                                        @if($errors->has('brand_name'))
                                                        <span class="text-danger">{{ $errors->first('brand_name') }}</span>
                                                        @endif
                                                </div>
                                                <td><img src="{{ asset('brand/' . $brand_edit->brand_name . '/' . $brand_edit->brand_logo) }}"
                                                    width="100px"></td>
                                                <div class="mb-3">
                                                    <label class="form-label" for="exampleInputPassword16">Brand Logo:</label>
                                                    <input style="width: 500px" class="form-control input-air-primary" name="brand_logo" accept="image/png, image/jpeg" id="submitdata" placeholder="Enter Brand Logo URL" type="file">





                                                </div>

                                            </div>
                                            <br>
                                            <div class="media mb-2">
                                                <label class="col-form-label m-r-10">Brand Status</label>

                                                <div class="media-body text-end icon-state switch-outline">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="" name="status"><span
                                                            class="switch-state bg-primary"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-primary" name="submit"
                                                    type="submit">Update</button>
                                            </div>
                                        </div>
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
    {{-- <script> --}}
    {{--  new WOW().init(); --}}
    {{-- </script> --}}
    {{-- @include('admin.partial.footer-end') --}}



</x-app-layout>
