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
                                    <h5>Car Stage</h5>
                                    <a href="{{ route ('car_stage.view')}} " class="btn btn-primary"> Viw Car Stage</a>
                                </div>

                                <form method="post" action="{{ route('car_stage.update', encrypt($car_stage_edit->car_stage_id)) }}" class="form theme-form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <label class="form-label" for="exampleFormControlTextarea14">Car
                                                        Stage: </label>
                                                    <input type="text" class="form-control btn-square"
                                                        id="exampleFormControlTextarea14" name="car_stage_name"
                                                        style="width: 500px" placeholder="Enter Car Stage"
                                                        value="{{$car_stage_edit->	car_stage_name}}">
                                                    @if($errors->has('car_stage_name'))
                                                    <span class="text-danger">{{ $errors->first('car_stage_name')
                                                        }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
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
    {{--<script src="assets/js/clock.js"></script>--}}
    {{--<script src="assets/js/chart/apex-chart/moment.min.js"></script>--}}
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{ asset('assets/js/dashboard/default.js')}}"></script>
    <script src="{{ asset('assets/js/notify/index.js')}}"></script>
    <script src="{{ asset('assets/js/typeahead/handlebars.js')}}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js')}}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
    <script src="{{ asset('assets/js/height-equal.js')}}"></script>
    <script src="{{ asset('assets/js/animation/wow/wow.min.js')}}"></script>
    <!-- Plugins JS Ends-->
    {{--<script>
        --}}
    {{--  new WOW().init();--}}
    {{--
    </script>--}}
    {{--@include('admin.partial.footer-end')--}}



</x-app-layout>
