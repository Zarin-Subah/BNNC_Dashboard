@extends('layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0 text-dark">NPAN Priority Indicator</h3>
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

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Row start -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
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
                                                            <div class="card-header-custom">% of children (0-5m) exclusively breastfed</div>
                                                            <div class="card-body">
                                                                <div id="tab_1_1-1" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="card">
                                                            <div class="card-header-custom">% of children (6-23 m) receiving MAD</div>
                                                            <div class="card-body">
                                                                <div id="tab_1_1-2" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gutters">
                                                    <div class="col-6">
                                                        <div class="card">
                                                            <div class="card-header-custom">% of children (6-23 m) receiving Minimum Acceptable Diet (MAD)</div>
                                                            <div class="card-body">
                                                                <div id="tab_1_1-3" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="card">
                                                            <div class="card-header-custom">% of children (<5y) with ARI treated with antibiotics</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_1_1-4" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">%of women 15-49 yrs who are overweight or obese (BMI ≥23)</div>
                                                                <div class="card-body">
                                                                    <div id="tab_1_1-5" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">% of adolescent girls (15-19 yrs.) with height <145 cm</div>
                                                                        <div class="card-body">
                                                                            <div id="tab_1_1-6" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row gutters">
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">% of women (15-19 yrs) who have begun childbearing</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_1_1-7" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">% of population that use improved drinking water</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_1_1-8" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row gutters">
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">% of population that use improved sanitary latrine (not shared)</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_1_1-9" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
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
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">Per capita consumption of fruits and vegetables</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_2_2-1" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">% share of total dietary energy from consumption of cereals</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_2_2-2" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
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
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">% of upazilas covered under VGD program to providing nutritionally enriched fortified food</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_3_3-1" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">% of women who completed secondary/higher education</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_3_3-2" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row gutters">
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">% of women who completed secondary/higher education</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_3_3-3" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
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
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">&nbsp;</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_2_2-1" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">&nbsp;</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_2_2-2" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
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
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">&nbsp;</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_2_2-1" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">&nbsp;</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_2_2-2" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                                    </div>
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
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">&nbsp;</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_2_2-1" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-header-custom">&nbsp;</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_2_2-2" style="min-width: 310px; height: 320px; margin: 0 auto"></div>
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
                        </div>
                    </div>
                    <!-- Row end -->
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        
    </div>

    @include('shared.js_links')

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type='text/javascript' src='http://www.google.com/jsapi'></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCAnl32vaikM_PoAUQOlbKzxVRYCi3IckE" async="" defer="defer"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            packages: ['corechart']
        });
    </script>
    @include('chart_scripts.npan_high_chart_tab_1')
    @include('chart_scripts.npan_high_chart_tab_2')
    @include('chart_scripts.npan_high_chart_tab_3')
    @include('chart_scripts.npan_high_chart_tab_4')
    @include('chart_scripts.npan_high_chart_tab_5')
    @include('chart_scripts.geo_chart')
    @endsection('content')
    