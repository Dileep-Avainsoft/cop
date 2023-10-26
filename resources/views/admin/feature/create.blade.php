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
                                <div class="card-header">
                                    <h5>Feature Entry</h5>
                                </div>
                                <form class="form theme-form" method="post">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">

                                                <?php
                                                $sql = "SELECT Spec_Id,Spec_Name FROM specification_ms";
                                                $stmt = $dbo->prepare($sql);
                                                $stmt->execute();
                                                $Specifications = $stmt->fetchAll();
                                                ?>
                                                <div class="mb-3">
                                                    <label class="form-label" >Select
                                                        Specifications</label>
                                                    <select style="width: 500px" class="form-select input-air-primary digits"
                                                             name="Spec_Id" required>
                                                        <option selected disabled>Select
                                                            Specifications</option>
                                                        <?php
                                                        foreach ($Specifications as $Specification):
                                                            ?>
                                                            <option value="<?php echo $Specification['Spec_Id']; ?>">
                                                                <?php echo $Specification['Spec_Name'] ?>
                                                            </option>
                                                        <?php
                                                        endforeach;
                                                        ?>
                                                    </select>
                                                </div>



                                                <div class="mb-3">
                                                    <label class="form-label" >Feature Name :</label>
                                                    <input  style="width: 500px" class="form-control input-air-primary" name="Features_Name"
                                                             type="text" placeholder="Enter Feature  Name">
                                                </div>

                                                <?php
                                                $sql = "SELECT F_Option_Id ,F_Option_Values	 FROM `feature_options_ms`";
                                                $stmt = $dbo->prepare($sql);
                                                $stmt->execute();
                                                $FeatureOptions = $stmt->fetchAll();
                                                ?>
                                                <div class="mb-3">
                                                    <label class="form-label" >Select
                                                        Feature Option</label>
                                                    <select style="width: 500px" class="form-select input-air-primary digits"
                                                            name="F_Option_Id" required>
                                                        <option selected disabled>Select
                                                            Feature Option</option>
                                                        <?php
                                                        foreach ($FeatureOptions as $FeatureOption):
                                                            ?>
                                                            <option value="<?php echo $FeatureOption['F_Option_Id']; ?>">
                                                                <?php echo $FeatureOption['F_Option_Values'] ?>
                                                            </option>
                                                        <?php
                                                        endforeach;
                                                        ?>
                                                    </select>
                                                </div>


                                            </div>
                                            <br>
                                            <div class="media mb-2">
                                                <label class="col-form-label m-r-10">Feature Status</label>

                                                <div class="media-body text-end icon-state switch-outline">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="" name="Status"><span
                                                            class="switch-state bg-primary"></span>
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
