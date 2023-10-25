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
                   @include('admin.partial.message')

                    <div class="row">

                        <div class="col-sm-12">
                            <div class="card">
                                {{-- <div class="card-header pb-0 card-no-border">
                                    <h3 class="mb-3">Car Stage Details</h3><span>
                                </div> --}}
                                <div class="card-header" style="display: flex; justify-content: space-between;">
                                    <h3>Brand Details</h3>
                                    <a href="{{ route('brand.create')}} " class="btn btn-primary"> Add Brand</a>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display" id="basic-1">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Car Stage</th>
                                                    <th>Brand Name</th>
                                                    <th>Brand Logo</th>
                                                    <th>Brand Status</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>

                                            @foreach ($brand_view as $data)
                                                <tbody>

                                                    <td>{{ $data->brand_id }}</td>
                                                    <td>{{ $data->car_stage_name }}</th>
                                                    <td>{{ $data->brand_name }}</td>


                                                    <td><img src="{{ asset('brand/' . $data->brand_name . '/' . $data->brand_logo) }}"
                                                            width="100px"></td>


                                                    {{-- <td>{{ $data->status }}</td> --}}
                                                    <td>
                                                        <div class="media-body icon-state switch-outline">
                                                            <label class="switch">
                                                                <input type="checkbox" id="status"
                                                                    value="{{ $data['brand_id'] }}"
                                                                    @if ($data['status'] == 1) checked @endif; />
                                                                <span class="switch-state bg-primary"></span>
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <ul class="action">
                                                            <li class="edit"> <a href="{{ encrypt($data->brand_id) }}/edit"><i
                                                                        class="icon-pencil-alt"></i></a></li>
                                                            <li class="delete"><a href="{{ encrypt($data->brand_id) }}/delete"><i
                                                                        class="icon-trash"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>


                                                </tbody>
                                            @endforeach


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

    @include('admin.partial.view_scripts')

    <script type="text/javascript">
        $(document).on('click', '#status', function() {
            var Id = this.value;
            // console.log(Id);
            $.ajax({
                type: "POST",
                url: "{{ route('brand.status') }}", // Use the named route
                data: {
                    Id: Id,
                    _token: '{{ csrf_token() }}' // Add CSRF token for security
                },
                success: function(data) {
                    // console.log('hello');
                }
            });
        });
    </script>
    @include('admin.partial.footer-end')
</x-app-layout>
