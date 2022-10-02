<!--Tab 3 Graphs-->
<!--Graph 3.1-->
<script type="text/javascript">

    Highcharts.chart('tab_3_3-1', {
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
                '1993-94',
                '1996-97',
                '1999-00',
                '2004',
                '2007',
                '2011',
                '2014'
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
                data: [46, 45, 46, 42, 43, 64]

            }]
    });
</script>
<!--Graph 3.2-->
<script type="text/javascript">

    Highcharts.chart('tab_3_3-2', {
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
                '2007',
                '2011',
                '2014'
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
            series: {
                connectNulls: true,
                dataLabels: {
                    enabled: true
                }
            }
        },
        series: [{
                showInLegend: false,
                name: '',
                data: [44, 47,51]

            }]
    });
</script>
<!--Grap 3.3-->
<script type="text/javascript">

    Highcharts.chart('tab_3_3-3', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        xAxis: {
            categories: ['']
        },
        credits: {
            enabled: false
        },
        yAxis: {
            min: 0,
            title: {
                text: 'value (%)'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -15,
            verticalAlign: 'top',
            y: -20,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                }
            }
        },
        series: [{
                name: 'BF+CF',
                data: [15]
            }, {
                name: 'BF+Other milk',
                data: [27]
            }, {
                name: 'BF+ non-milk liquids',
                data: [5]
            }, {
                name: 'BF+ Plain water',
                data: [14]
            }, {
                name: 'Exclusive breastfeeding',
                data: [36]
            }, {
                name: 'Not breastfeeding',
                data: [2]
            }]
    });
</script>
<!--Grap 3.4-->
<script type="text/javascript">

    Highcharts.chart('tab_3_3-4', {
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
                'No education',
                'Primary incomplete',
                'Primary complete',
                'Secondary incomplete',
                'Secondary or higher'
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
                showInLegend: false,
                name: '',
                data: [2.9, 2.9, 3.6, 3.7, 4.4]

            }]
    });
</script>
<!--Graph 3.5-->
<script type="text/javascript">

    Highcharts.chart('tab_3_3-5', {
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
                'No education',
                'Primary incomplete',
                'Primary complete',
                'Secondary incomplete',
                'Secondary or higher'
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
                showInLegend: false,
                name: '',
                data: [10, 17, 18, 23, 36]

            }]
    });
</script>
<!--Grap 1.9-->
<script type="text/javascript">

    Highcharts.chart('tab_3_3-6', {
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
                '0-1',
                '2-3',
                '4-5',
                '6-8',
                '9-11',
                '12-17',
                '18-23'
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
                name: '',
                data: [1, 2, 15, 63, 90, 91, 96]

            }]
    });
</script>
<!--Grap 1.10-->
<script type="text/javascript">

    Highcharts.chart('tab_3_3-7', {
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
                'Minimum diet diversity',
                'Minimum meal frequency',
                'Minimum acceptable diet'
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
                name: 'Minimum diet diversity',
                data: [24, 64, 21]

            }, {
                name: 'Minimum meal frequency',
                data: [41, 69, 15]

            }, {
                name: 'Minimum acceptable diet',
                data: [25, 65, 21]

            }]
    });
</script>
<!--Grap 1.9-->
<script type="text/javascript">

    Highcharts.chart('tab_3_3-8', {
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
                'Sylhet',
                'Chittagong',
                'Barisal',
                'Rangpur',
                'Dhaka',
                'Rajshahi',
                'Khulna'
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
            line: {
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
                name: 'Minimum Acceptable Diet',
                data: [11, 17, 18, 21, 23, 25, 28]

            }, {
                name: 'Stunting',
                data: [49, 41, 45, 43, 43, 34, 34]

            }]
    });
</script>
<!--Grap 1.10-->
<script type="text/javascript">

    Highcharts.chart('tab_3_3-9', {
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
                'Sylhet',
                'Chittagong',
                'Barisal',
                'Rangpur',
                'Dhaka',
                'Rajshahi',
                'Khulna'
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
            line: {
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
                name: 'Minimum Acceptable Diet',
                data: [11, 16, 15, 21, 23, 25, 28]

            }, {
                name: 'Wasting',
                data: [18, 17, 18, 13, 16, 16, 15]

            }]
    });
</script>
<!--Grap 1.10-->
<script type="text/javascript">

    Highcharts.chart('tab_3_3-10', {
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
                name: '',
                data: [14, 24, 28, 20, 24, 27, 25, 25]

            }]
    });
</script>
<!--Grap 1.10-->
<script type="text/javascript">

    Highcharts.chart('tab_3_3-11', {
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
                name: 'Hand washing with soap and water',
                data: [4, 9, 13, 28, 67]

            }, {
                type: 'line',
                name: 'Wasting',
                data: [54, 45, 41, 36, 26]

            }]
    });
</script>
<!--Tab 1 Graphs-->