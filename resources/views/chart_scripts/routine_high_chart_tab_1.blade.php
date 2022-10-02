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
                    value: 30, // Value of where the line will appear
                    width: 2,
                    zIndex: 989,
                    label: {
                        text: 'MDG Target 33%'
                    }
                }, {
                    color: 'red', // Color value
                    dashStyle: 'solid', // Style of the plot line. Default to solid
                    value: 33, // Value of where the line will appear
                    width: 2,
                    zIndex: 999,
                    label: {
                        text: 'WHO threshold 30%'
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
    });</script>
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
                    value: 40, // Value of where the line will appear
                    width: 2,
                    zIndex: 989,
                    label: {
                        text: 'MDG Target 40%'
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
                name: 'ABC',
                data: [60, 51, 51, 43, 41, 36, 31]

            }]
    });</script>
<!--Graph 1.3-->
<script type="text/javascript">

    Highcharts.chart('iycf_practices', {
        chart: {
            type: 'bar'
        },
        title: {
            text: null
        },
        subtitle: {
            text: null
        },
        xAxis: {
            categories: ['Number of infants who are breastfed within one hour of birth', 'Number of child exclusive breastfeed  within 6 months of age', 'Number of caregivers of children 0-23 months old receiving age appropriate IYCF counselling'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (millions)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        credits: {
            enabled: false
        },
        series: [{
                name: '2015',
                data: [324947, 242342, 4545455]
            }, {
                name: '2016',
                data: [421517, 453434, 5656565]
            }, {
                name: '2017',
                data: [520759, 345355, 6755443]
            }, {
                name: '2018',
                data: [543901, 353532, 7644453]
            }, {
                name: '2019',
                data: [23444, 122223, 2355433]
            }]
    });</script>
<!--Graph 1.4-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-4', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        subtitle: {
            text: null
        },
        xAxis: {
            categories: [
                '6-11 months',
                '12-59 months',
            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: null,
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            column: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        credits: {
            enabled: false
        },
        series: [{
                name: 'Normal Children',
                data: [339831, 2528159]

            }, {
                name: 'Children with disabilities',
                data: [14200, 82368]

            }]
    });</script>
<script type="text/javascript">

    Highcharts.chart('tab_1_1-4_2', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        subtitle: {
            text: null
        },
        xAxis: {
            categories: [
                '6-11 months',
                '12-59 months',
            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: null,
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            column: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        credits: {
            enabled: false
        },
        series: [{
                name: 'Normal Children',
                data: [307510, 78262]

            }, {
                name: 'Children with disabilities',
                data: [53197, 250357]

            }]
    });</script>
<!--Graph 1.5-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-5', {
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
                'Total number screened',
                'Children with Severe Acute Malnutrition (SAM)',
                'Children with Moderate Acute Malnutrition (SAM)',
                'Children Well Nourished'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
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
                name: 'Number',
                data: [137730, 1819, 6516, 129395]

            }]
    });</script>
<script type="text/javascript">

    Highcharts.chart('tab_1_1-5_2', {
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
                'Total Admission',
                'Cure',
                'Death',
                'Defaulter'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
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
                name: 'Number',
                data: [484, 229, 16, 66]

            }]
    });</script>
<!--Graph 1.9-->
<script type="text/javascript">

    Highcharts.chart('tab_1_1-6', {
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
                '2015',
                '2016',
                '2017',
                '2018',
                '2019'
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
                name: 'Proportion of adults with high blood pressure',
                data: [6, 7, 9, 11, 10]

            }, {
                name: '% of population screened for diet related non-communicable diseases.',
                data: [5, 4, 6, 7, 9]

            }]
    });</script>
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
    });</script>
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
    });</script>
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
                name: 'HFIAS',
                data: [26, 33, 30, 32]

            }, {
                name: 'FDS',
                data: [10, 12, 11, 13]

            }]
    });</script>
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
                name: 'FCS',
                data: [30, 32, 32, 26]

            }, {
                name: 'DD',
                data: [11, 11, 13, 10]

            }]
    });</script>
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
    });</script>
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
                'Slum',
                'Rural',
                'Urban',
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
    });</script>
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
                'Rural',
                'Urban',
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