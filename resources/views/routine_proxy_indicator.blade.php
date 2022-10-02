@extends('layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="m-0 text-dark">Routine Monitoring Indicator</h3>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
   /*
   $sql_default = "SELECT period,period_year,(SUM(nutrition_counselling_unique)/SUM(registered_pregnant_women))*100 AS per_of_maternal_nutrition_counselling,(SUM(ifa_distributed_unique)/SUM(registered_pregnant_women))*100 AS per_of_maternal_pregnant_women_who_received_ifa,(SUM(weight_measured_unique)/SUM(registered_pregnant_women))*100 AS per_of_maternal_weight_measured_unique,(SUM(child_counselled_on_complementary_feeding)/SUM(registered_child_0_6_month+registered_child_6_23_month))*100 AS per_of_child_iyci_counseling,(SUM(child_counselled_about_breast_feeding)/SUM(registered_child_0_6_month+registered_child_6_23_month))*100 AS per_of_child_weight_taken FROM `maternal_child_health`";
    $result_default = $GLOBALS['conn']->query($sql_default);
    $row_default = $result_default->fetch_assoc();
    $per_of_maternal_nutrition_counselling = $row_default['per_of_maternal_nutrition_counselling'];
    $per_of_maternal_pregnant_women_who_received_ifa = $row_default['per_of_maternal_pregnant_women_who_received_ifa'];
    $per_of_maternal_weight_measured_unique = $row_default['per_of_maternal_weight_measured_unique'];
    $per_of_child_iyci_counseling = $row_default['per_of_child_iyci_counseling'];
    $per_of_child_weight_taken = $row_default['per_of_child_weight_taken'];*/
    ?> 
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Row start -->
            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Thematic Area-1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Thematic Area-2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Thematic Area-3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Thematic Area-4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Thematic Area-5</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#tab6" role="tab" aria-controls="tab5" aria-selected="false">Thematic Area-6</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab1">
                                    <!--Group 1-->
                                    <div class="graph-group">
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="graph-group-heading">Thematic Area-1: Nutrition for All following Life Cycle Approach</div>
                                                <hr />
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-6">
                                                <div class="card">
                                                    <div class="card-header-custom">Maternal Nutrition</div>
                                                    <div class="card-body">
                                                        <div class="row gutters">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="maternal_division" name="maternal_division" onchange="maternal_health()">
                                                                        <option value="">Division</option>
                                                                        <?php
                                                                        $sql = "select division_id,division_name from divisions where length(division_name)>0 group by division_name order by division_name asc";

                                                                        $result = $GLOBALS['conn']->query($sql);

                                                                        while ($row = $result->fetch_assoc()) {
                                                                        ?>
                                                                            <option value="<?php echo $row['division_id']; ?>" <?php
                                                                                                                                if (!empty($_POST['division'])) {
                                                                                                                                    if ($_POST['division'] == $row['division_id']) {
                                                                                                                                        echo "selected";
                                                                                                                                    }
                                                                                                                                }
                                                                                                                                ?>><?php echo $row['division_name']; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="maternal_year" name="maternal_year" onchange="maternal_health()">
                                                                        <option value="">Year</option>
                                                                        <?php
                                                                        $sql = "select distinct(period_year) from maternal_child_health order by period_year desc";

                                                                        $result = $GLOBALS['conn']->query($sql);

                                                                        while ($row = $result->fetch_assoc()) {
                                                                        ?>
                                                                            <option value="<?php echo $row['period_year']; ?>"><?php echo $row['period_year']; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="maternal_month" name="maternal_month" onchange="maternal_health()">
                                                                        <option value="">Month</option>
                                                                        <?php
                                                                        foreach ($GLOBALS['months'] as $month) {
                                                                        ?>
                                                                            <option value="<?php echo $month; ?>"><?php echo date("F", mktime(0, 0, 0, $month, 10)); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-swiper-parallax="0" data-swiper-parallax-opacity="0">
                                                            <div id="maternal-health" style="width: 100%;"></div>

                                                            <div class="legend row">
                                                                <div class="dashboard-legend conselling-given col-12 col-md-10 offset-lg-2 offset-md-2 offset-xs-2">% of women receiving maternal nutrition counselling</div>
                                                                <div class="ifa-distributed dashboard-legend col-12 col-md-10 offset-lg-2 offset-md-2 offset-xs-2">% of visits with pregnant women who received any IFA</div>
                                                                <div class="weight-measured dashboard-legend col-12 col-md-10 offset-lg-2 offset-md-2 offset-xs-2">% of times women attended a facility during pregnancy that they were weighed</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card">
                                                    <div class="card-header-custom">Child Nutrition</div>
                                                    <div class="card-body">
                                                        <div class="row gutters">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="child_division" name="child_division" onchange="child_health()">
                                                                        <option value="">Division</option>
                                                                        <?php
                                                                        $sql = "select division_id,division_name from divisions where length(division_name)>0 group by division_name order by division_name asc";

                                                                        $result = $GLOBALS['conn']->query($sql);

                                                                        while ($row = $result->fetch_assoc()) {
                                                                        ?>
                                                                            <option value="<?php echo $row['division_id']; ?>" <?php
                                                                                                                                if (!empty($_POST['division'])) {
                                                                                                                                    if ($_POST['division'] == $row['division_id']) {
                                                                                                                                        echo "selected";
                                                                                                                                    }
                                                                                                                                }
                                                                                                                                ?>><?php echo $row['division_name']; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="child_year" name="child_year" onchange="child_health()">
                                                                        <option value="">Year</option>
                                                                        <?php
                                                                        $sql = "select distinct(period_year) from maternal_child_health order by period_year desc";

                                                                        $result = $GLOBALS['conn']->query($sql);

                                                                        while ($row = $result->fetch_assoc()) {
                                                                        ?>
                                                                            <option value="<?php echo $row['period_year']; ?>"><?php echo $row['period_year']; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="child_month" name="child_month" onchange="child_health()">
                                                                        <option value="">Month</option>
                                                                        <?php
                                                                        foreach ($GLOBALS['months'] as $month) {
                                                                        ?>
                                                                            <option value="<?php echo $month; ?>"><?php echo date("F", mktime(0, 0, 0, $month, 10)); ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-swiper-parallax="0" data-swiper-parallax-opacity="0">
                                                            <div id="child-health" style="width: 100%;"></div>
                                                            <div class="legend row">
                                                                <div class="dashboard-legend conselling-given col-12 col-md-10 offset-lg-2 offset-md-2 offset-xs-2">% of caregivers of children 0-23 months old receiving age appropriate IYCF counselling</div>
                                                                <div class="ifa-distributed dashboard-legend col-12 col-md-10 offset-lg-2 offset-md-2 offset-xs-2">% of children 0-23 months old whose weight was taken at a facility</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header-custom">IYCF Practices</div>
                                                    <div class="card-body">
                                                        <div id="iycf_practices" style="min-width: 310px; height: 420px; margin: 0 auto"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card">
                                                    <div class="card-header-custom">Vitamin A plus campaign (Target)</div>
                                                    <div class="card-body">
                                                        <div id="tab_1_1-4" style="min-width: 310px; height: 420px; margin: 0 auto"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card">
                                                    <div class="card-header-custom">Vitamin A plus campaign (Received)</div>
                                                    <div class="card-body">
                                                        <div id="tab_1_1-4_2" style="min-width: 310px; height: 420px; margin: 0 auto"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-6">
                                                <div class="card">
                                                    <div class="card-header-custom">Screening</div>
                                                    <div class="card-body">
                                                        <div id="tab_1_1-5" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card">
                                                    <div class="card-header-custom">SAM Case Management</div>
                                                    <div class="card-body">
                                                        <div id="tab_1_1-5_2" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab1">
                                    <!--Group 1-->
                                    <div class="graph-group">
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="graph-group-heading">Thematic Area 2: Agriculture & Diet diversification & locally adapted recipes</div>
                                                <hr />
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header-custom">&nbsp;</div>
                                                    <div class="card-body">
                                                        <div id="tab_2_2-14" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="contact-tab1">
                                    <!--Group 9-->
                                    <div class="graph-group">
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="graph-group-heading">Thematic Area 3: Social Protection</div>
                                                <hr />
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header-custom">&nbsp;</div>
                                                    <div class="card-body">
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th style="width:40%">&nbsp;</th>
                                                                <th style="width:12%">2015</th>
                                                                <th style="width:12%">2016</th>
                                                                <th style="width:12%">2017</th>
                                                                <th style="width:12%">2018</th>
                                                                <th style="width:12%">2019</th>
                                                            </tr>
                                                            <tr>
                                                                <td>No. of beneficiaries (pregnant, lactating and children) covered by social protection program</td>
                                                                <td>25000</td>
                                                                <td>30000</td>
                                                                <td>45000</td>
                                                                <td>78000</td>
                                                                <td>56000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>No. of beneficiaries (pregnant, lactating and children) covered by social protection program</td>
                                                                <td>50</td>
                                                                <td>67</td>
                                                                <td>89</td>
                                                                <td>67</td>
                                                                <td>88</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="contact-tab1">
                                    <!--Group 1-->
                                    <div class="graph-group">
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="graph-group-heading">Thematic Area 4: Integrated and Comprehensive SBCC</div>
                                                <hr />
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header-custom">&nbsp;</div>
                                                    <div class="card-body">
                                                        <div id="tab_2_2-14" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="contact-tab1">
                                    <!--Group 1-->
                                    <div class="graph-group">
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="graph-group-heading">Thematic Area 5: Monitoring Evaluation and Research</div>
                                                <hr />
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="card">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th>Activities</th>
                                                            <th>2018</th>
                                                            <th>2019</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Number of dissemination of NPAN2 in District and sub-district levels</td>
                                                            <td>28</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Number of meeting conducted on M&E platform </td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Number of orientation held on Multi-sectoral Coordination committee at District level</td>
                                                            <td>26</td>
                                                            <td>12</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Number of orientation held on Multi-sectoral Coordination committee at Sub-district level</td>
                                                            <td>45</td>
                                                            <td>34</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="profile-tab1">
                                    <!--Group 1-->
                                    <div class="graph-group">
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="graph-group-heading">Thematic Area 6: Capacity Building</div>
                                                <hr />
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header-custom">&nbsp;</div>
                                                    <div class="card-body">
                                                        <div id="tab_2_2-14" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

    @include('shared.js_links');

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type='text/javascript' src='http://www.google.com/jsapi'></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCAnl32vaikM_PoAUQOlbKzxVRYCi3IckE" async="" defer="defer"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            packages: ['corechart']
        });
    </script>
    <script src="redial_progress_chart/js/d3.js"></script>
    <script type="text/javascript" src="redial_progress_chart/js/radial-progress-chart.js"></script>

    @include('chart_scripts.routine_high_chart_tab_1')
    @include('chart_scripts.routine_high_chart_tab_2')
    @include('chart_scripts.routine_high_chart_tab_3')
    @include('chart_scripts.routine_high_chart_tab_4')
    @include('chart_scripts.routine_high_chart_tab_5')
    @include('chart_scripts.geo_chart')

    <script type="text/javascript">
        function maternal_health() {
            //alert("came1");
            drawProgress('maternal-health');
            var division = $("#maternal_division").val();
            var year = $("#maternal_year").val();
            var month = $("#maternal_month").val();
            $.ajax({
                type: 'GET',
                url: 'maternal_child_health_data.php', // put your real file name 
                data: {
                    progress_chart_type: 'maternal_health',
                    division: division,
                    year: year,
                    month: month
                },
                success: function(data) {
                    var obj = JSON.parse(data);
                    //alert(obj[0]);
                    callMaternalChart(obj[0], obj[1], obj[2]);
                }
            });
        }
    </script>
    <script type="text/javascript">
        function child_health() {
            //alert("came2");
            drawProgress();
            var division = $("#child_division").val();
            var year = $("#child_year").val();
            var month = $("#child_month").val();
            $.ajax({
                type: 'GET',
                url: 'maternal_child_health_data.php', // put your real file name 
                data: {
                    progress_chart_type: 'child_health',
                    division: division,
                    year: year,
                    month: month
                },
                success: function(data) {
                    var obj = JSON.parse(data);
                    //alert(obj[0]);
                    callChildChart(obj[0], obj[1]);
                }
            });
        }
    </script>
    <script>
        callMaternalChart(<?php echo $per_of_maternal_nutrition_counselling . "," . $per_of_maternal_pregnant_women_who_received_ifa . "," . $per_of_maternal_weight_measured_unique; ?>);
        callChildChart(<?php echo $per_of_child_iyci_counseling . "," . $per_of_child_weight_taken; ?>);
    </script>
    @endsection('content')