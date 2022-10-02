@extends('layout.master')
@section('content')

<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10">
                    <h3 class="m-0 text-dark">Home<span style="text-align: center;margin-left:42%;font-size:22px;font-weight: bold;">Multisectoral Nutrition Dashboard</span></h3>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">SDG Target on Nutrition</div>
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header-custom">SDG 2.1.1: Prevalence of Undernourishment</div>
                                        <div class="card-body">
                                            <div id="graph_1" style="min-width: 310px; height: 280px; margin: 0 auto"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            Data Source: Food and Agriculture Organization of United Nations (FAO) & Unit : %
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card">
                                        <div class="card-header-custom">SDG 2.2.1: Prevalence of Stunting</div>
                                        <div class="card-body">
                                            <div id="graph_2" style="min-width: 310px; height: 280px; margin: 0 auto"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            Data Source: Ministry of Health and Family Welfare (MoHFW)->National Institute of Population Research and Training<br />
                                            (NIPORT)->Bangladesh Demographic and Health Survey (BDHS) & Unit : %
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header-custom">SDG 2.2.2.a: Prevalence of Wasting </div>
                                        <div class="card-body">
                                            <div id="graph_3" style="min-width: 310px; height: 280px; margin: 0 auto"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            Data Source: Ministry of Health and Family Welfare (MoHFW)->National Institute of Population Research and Training<br />
                                            (NIPORT)->Bangladesh Demographic and Health Survey (BDHS) & Unit : %
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card">
                                        <div class="card-header-custom">SDG 2.2.2.b: Prevalence of Overweight</div>
                                        <div class="card-body">
                                            <div id="graph_4" style="min-width: 310px; height: 280px; margin: 0 auto"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            Data Source: Ministry of Health and Family Welfare (MoHFW)->National Institute of Population Research and Training<br />
                                            (NIPORT)->Bangladesh Demographic and Health Survey (BDHS) & Unit : %
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('shared.js_links')
<script type="text/javascript">
    Highcharts.chart('graph_1', {
        chart: {
            type: 'line'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                '2010',
                '2011',
                '2012',
                '2013',
                '2014',
                '2016',
                '2017',
                '2020 (Target)',
                '2025 (Target)',
                '2030 (Target)',
            ],
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr>' +
                '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        series: [{
                showInLegend: false,
                name: null,
                data: [17.2, 17.2, 17.3, 17.3, 17.2, 16.4, 15.2]

            },
            {
                showInLegend: false,
                name: null,
                color: '#E40000',
                pointStart: 7,
                zIndex: -100,
                linkedTo: ':previous',
                marker: {
                    symbol: 'circle',
                    enabled: true
                },
                data: [14, 12, 10]
            }
        ]
    });
</script>
<!--Grap 2-->
<script type="text/javascript">
    Highcharts.chart('graph_2', {
        chart: {
            type: 'line'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                '2011',
                '2014',
                '2017-18',
                '2020 (Target)',
                '2025 (Target)',
                '2030 (Target)',
            ],
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr>' +
                '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        series: [{
                showInLegend: false,
                name: null,
                data: [41, 36.1, 31]

            },
            {
                showInLegend: false,
                name: null,
                color: '#E40000',
                pointStart: 3,
                zIndex: -100,
                linkedTo: ':previous',
                marker: {
                    symbol: 'circle',
                    enabled: true
                },
                data: [25, 16, 12]
            }
        ]
    });
</script>
<!--Grap 3-->
<script type="text/javascript">
    Highcharts.chart('graph_3', {
        chart: {
            type: 'line'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                '2000',
                '2001',
                '2002',
                '2003',
                '2004',
                '2005',
                '2006',
                '2007',
                '2011',
                '2012',
                '2013',
                '2014',
                '2017-2018',
                '2020 (Target)',
                '2025 (Target)',
                '2030 (Target)',
            ],
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr>' +
                '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        series: [{
                showInLegend: false,
                name: null,
                data: [12.5, 12.7, 12.4, 12.5, 14.5, 11.8, 11.9, 17.4, 15.6, 9.6, 18.1, 14.3, 8]

            },
            {
                showInLegend: false,
                name: null,
                color: '#E40000',
                pointStart: 13,
                zIndex: -100,
                linkedTo: ':previous',
                marker: {
                    symbol: 'circle',
                    enabled: true
                },
                data: [12, 10, 5]
            }
        ]
    });
</script>
<!--Grap 4-->
<script type="text/javascript">
    Highcharts.chart('graph_4', {
        chart: {
            type: 'line'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                '2000',
                '2001',
                '2002',
                '2003',
                '2004',
                '2005',
                '2006',
                '2007',
                '2011',
                '2012',
                '2012-2013',
                '2013',
                '2014',
                '2017-18',
                '2020 (Target)',
                '2025 (Target)',
                '2030 (Target)',
            ],
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr>' +
                '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        series: [{
                showInLegend: false,
                name: null,
                data: [0.9, 0.9, 1, 1, 0.9, 1, 0.8, 1.1, 1.9, 1.6, 1.6, 2.6, 1.6, 2.2]

            },
            {
                showInLegend: false,
                name: null,
                color: '#E40000',
                pointStart: 14,
                zIndex: -100,
                linkedTo: ':previous',
                marker: {
                    symbol: 'circle',
                    enabled: true
                },
                data: [1.5, 1, 1]
            }
        ]
    });
</script>
@endsection('content')