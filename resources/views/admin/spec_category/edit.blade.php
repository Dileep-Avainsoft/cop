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
                                    <h5>Specification Category</h5>
                                    <a href="{{ route ('spec_cat.view')}} " class="btn btn-primary"> View Specification Category</a>
                                </div>

                                <form method="post" action="{{ route('spec_cat.update', encrypt($spec_cat_edit->spec_cat_id)) }}" class="form theme-form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <label class="form-label" for="exampleFormControlTextarea14"> Specification Category : </label>
                                                    <input type="text" class="form-control btn-square"
                                                        id="exampleFormControlTextarea14" name="spec_cat_name"
                                                        style="width: 500px" placeholder="Enter Specification Category"
                                                        value="{{$spec_cat_edit->spec_cat_name}}">
                                                    @if($errors->has('spec_cat_name'))
                                                    <span class="text-danger">{{ $errors->first('spec_cat_name')
                                                        }}</span>
                                                    @endif
                                                </div>

                                                <div class="media-body icon-state switch-outline mt-2">
                                                    <label class="switch">
                                                        <input type="checkbox" id="status" name="status" @if($spec_cat_edit->status) checked @endif value="1" />
                                                        <span class="switch-state bg-primary"></span>
                                                    </label>
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
