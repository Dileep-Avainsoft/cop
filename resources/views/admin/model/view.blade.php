<x-app-layout>

    @include('admin.partial.header')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    @include('admin.partial.loader')
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        {{-- @include('admin.partial.topbar') --}}
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->

            @include('admin.partial.sidebar')
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block"><strong>{{ $message }}</strong></div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="row">

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header" style="display: flex; justify-content: space-between;">
                                    <h3>Model Details</h3>
                                    <a href="{{ route('carstage.insert') }} " class="btn btn-primary"> Add Model </a>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display" id="basic-1">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Brand Name</th>
                                                    <th>Model Name</th>
                                                    <th>Model Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cat_stage as $data)
                                                    <tr>
                                                        <td>{{ $data->car_stage_id }}</td>
                                                        <td>{{ $data->car_stage_name }}</td>
                                                        <td>
                                                            <ul class="action">
                                                                <li class="edit"> <a
                                                                        href="edit/{{ encrypt($data->car_stage_id) }}"><i
                                                                            class="icon-pencil-alt"></i></a></li>
                                                                <li class="delete"><a
                                                                        href="delete/{{ encrypt($data->car_stage_id) }}"><i
                                                                            class="icon-trash"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>

            @include('admin.partial.footer')
        </div>
    </div>

    @include('admin.partial.scripts')

    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>

    @include('admin.partial.footer-end')
</x-app-layout>
