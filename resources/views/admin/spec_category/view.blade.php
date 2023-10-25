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

                @include('admin.partial.message')

                <div class="row">

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header" style="display: flex; justify-content: space-between;">
                                <h3>Specification Category Detail</h3>
                                <a href="{{ route('spec_cat.create') }} " class="btn btn-primary"> Add Specification Category</a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="display" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Specification Category</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($spec_cat_view as $data)
                                                <tr>
                                                    <td>{{ $data->spec_cat_id }}</td>
                                                    <td>{{ $data->spec_cat_name }}</td>
                                                    <td>
                                                        <div class="media-body icon-state switch-outline">
                                                            <label class="switch">
                                                                <input type="checkbox" id="status"
                                                                    value="{{ $data['spec_cat_id'] }}"
                                                                    @if ($data['status'] == 1) checked @endif; />
                                                                <span class="switch-state bg-primary"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="action">
                                                            <li class="edit"> <a
                                                                    href="{{ route('spec_cat.edit', encrypt($data->spec_cat_id)) }}"><i
                                                                        class="icon-pencil-alt"></i></a></li>
                                                            <li class="delete"><a
                                                                    href="{{ route('spec_cat.delete', encrypt($data->spec_cat_id)) }}"><i
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
            $.ajax({
                type: "POST",
                url: "{{ route('spec_cat.status') }}", // Use the named route
                data: {
                    Id: Id,
                    _token: '{{ csrf_token() }}' // Add CSRF token for security
                },
                success: function(data) {
                    console.log('hello');
                },

            });
        });
    </script>
    @include('admin.partial.footer-end')
</x-app-layout>
