<!--Tab 1 Graphs-->
<!--Graph 1.1-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-1', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                '1996/97',
                '1999/2000',
                '2004',
                '2007',
                '2011',
                '2014',
                '2017/2018'
            ],
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            },
            plotLines: [{
                    color: 'green', // Color value
                    dashStyle: 'solid', // Style of the plot line. Default to solid
                    value: 15, // Value of where the line will appear
                    width: 2,
                    zIndex: 989,
                    label: {
                        text: 'NPAN2 Target 2025 (15%)'
                    }
                }]
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                showInLegend: false,
                name: '',
                data: [52, 43, 43, 41, 36, 33, 22]

            }]
    });
</script>
<!--Graph 1.2-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-2', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                '1996/97',
                '1999/2000',
                '2004',
                '2007',
                '2011',
                '2014',
                '2017/2018'
            ],
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            },
            plotLines: [{
                    color: 'green', // Color value
                    dashStyle: 'solid', // Style of the plot line. Default to solid
                    value: 25, // Value of where the line will appear
                    width: 2,
                    zIndex: 989,
                    label: {
                        text: 'NPAN2 Target 2025 (25%)'
                    }
                }]
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                showInLegend: false,
                name: '',
                data: [60, 51, 51, 43, 41, 36, 31]

            }]
    });
</script>
<!--Graph 1.3-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-3', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                '1996/97',
                '1999/2000',
                '2004',
                '2007',
                '2011',
                '2014',
                '2017/2018'
            ],
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            },
            plotLines: [{
                    color: 'green', // Color value
                    dashStyle: 'solid', // Style of the plot line. Default to solid
                    value: 8, // Value of where the line will appear
                    width: 2,
                    zIndex: 989,
                    label: {
                        text: 'NPAN2 Target 2025 (8%)'
                    }
                }]
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                showInLegend: false,
                name: '',
                data: [12, 20, 15, 17, 16, 14, 8]

            }]
    });
</script>
<!--Graph 1.7-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-7', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                'Q1',
                'Q2',
                'Q3',
                'Q4',
                'Q5'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                name: 'Stunting',
                data: [40, 37, 30, 27, 17]

            }, {
                name: 'Wasting',
                data: [10, 8, 8, 9, 7]

            }]
    });
</script>
<!--Graph 1.8-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-8', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                'Barisal',
                'Chittagong',
                'Dhaka',
                'Khulna',
                'Rajshahi',
                'Rangpur',
                'Sylhet',
                'National'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                name: 'Inadequate height',
                data: [14, 12, 15, 10, 11, 12, 11, 12]

            }, {
                name: 'Low BMI',
                data: [15, 11, 10, 11, 17, 20, 29, 16]

            }]
    });
</script>
<!--Graph 1.9-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-9', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                'Secure',
                'Insecure',
                'No deficit',
                'Deficit'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                name: 'Inadequate height',
                data: [10, 13, 11, 16]

            }, {
                name: 'Chronically Energy Deficient',
                data: [14, 25, 19, 28]

            }]
    });
</script>
<!--Graph 1.10-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-10', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                'Acceptable',
                'Bordln/poor',
                '5+ groups',
                'Inadequate'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                name: 'Inadequate height',
                data: [11, 16, 11, 13]

            }, {
                name: 'Chronically Energy Deficient',
                data: [19, 28, 16, 23]

            }]
    });
</script>
<!--Graph 1.11-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-11', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                'Barisal',
                'Chittagong',
                'Dhaka',
                'Khulna',
                'Rajshahi',
                'Rangpur',
                'Sylhet',
                'National'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                name: 'Inadequate height',
                data: [14, 12, 15, 10, 11, 12, 11, 12]

            }, {
                name: 'Underweight',
                data: [15, 11, 10, 11, 17, 20, 29, 16]

            }]
    });
</script>
<!--Graph 1.12-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-12', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                'Secure',
                'Insecure',
                'No deficit',
                'Deficit'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                name: 'Inadequate height',
                data: [26, 33, 30, 32]

            }, {
                name: 'Underweight',
                data: [10, 12, 11, 13]

            }]
    });
</script>
<!--Graph 1.13-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-13', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                'Acceptable',
                'Bordln/poor',
                '5+ groups',
                'Inadequate'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                name: 'Inadequate height',
                data: [30, 32, 32, 26]

            }, {
                name: 'Underweight',
                data: [11, 11, 13, 10]

            }]
    });
</script>
<!--Graph 1.13-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-14', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                'Children 6-59 month',
                'Pregnant women',
                'Non-PLW'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            },
            plotLines: [{
                    color: 'green', // Color value
                    dashStyle: 'solid', // Style of the plot line. Default to solid
                    value: 40, // Value of where the line will appear
                    width: 2,
                    zIndex: 989,
                    label: {
                        text: 'WHO threshold 40%'
                    }
                }]
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                name: '2004',
                data: [49, 46, 30]

            }, {
                name: '2011',
                data: [51, 50, 40]

            }, {
                name: '2013',
                data: [33, null, 26]

            }]
    });
</script>
<!--Graph 1.13-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-15', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                'School age children',
                'NPNL woman'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                name: 'Slum',
                data: [27, 34]

            }, {
                name: 'Rural',
                data: [41, 45]

            }, {
                name: 'Urban',
                data: [39, 33]

            }, {
                name: 'National',
                data: [40, 42]

            }]
    });
</script>
<!--Graph 1.13-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-16', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                '1996',
                '1999',
                '2004-05',
                '2012'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }
        },
        series: [{
                name: 'Rural',
                data: [40, 48, 45, 52]

            }, {
                name: 'Urban',
                data: [74, 77, 71, 75]

            }, {
                name: 'National',
                data: [54, 55, 51, 58]

            }]
    });
</script>
<!--Tab 1 Graphs-->