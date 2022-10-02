<!--Tab 5 Graphs-->
<!--Graph 5.2-->
<script type="text/javascript">

    Highcharts.chart('tab_5_5-2', {
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
                'National',
                'Urban',
                'Rural'
            ]
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
            line: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }, column: {
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
                type: 'column',
                showInLegend: true,
                name: 'HFIAS',
                data: [59, 61, 49, 59, 53, 65, 64, 56, 41, 59]

            }, {
                type: 'line',
                showInLegend: true,
                name: 'Stunting',
                data: [36, 40, 33, 34, 35, 41, 50, 37, 28, 38]

            }, {
                type: 'line',
                showInLegend: true,
                name: 'Severe Stunting (FSNSP)',
                data: [11, 18, 10, 7, 9, 11, 21, 11, 7, 12]

            }]
    });
</script>
<!--Graph 5.3-->
<script type="text/javascript">

    Highcharts.chart('tab_5_5-3', {
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
            ]
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
            line: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                }
            }, column: {
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
                type: 'column',
                showInLegend: true,
                name: 'Food Insecurity',
                data: [84, 72, 60, 40, 18]

            }, {
                type: 'line',
                showInLegend: true,
                name: 'Stunting',
                data: [48, 42, 39, 29, 19]

            }]
    });
</script>
<!--Graph 5.4-->
<script type="text/javascript">

    Highcharts.chart('tab_5_5-4', {
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
                'Food Deficit',
                'Acceptable',
                'Bord./poor'
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
                data: [30, 42, 35, 48, 35, 46]

            }]
    });
</script>
<!--Tab 4 Graphs-->