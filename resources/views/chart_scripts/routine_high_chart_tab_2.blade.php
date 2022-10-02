<!--Tab 2 Graphs-->
<!--Graph 2.1-->
<script type="text/javascript">

    Highcharts.chart('tab_2_2-1', {
        title: {
            text: null
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                '1992',
                '1993',
                '1994',
                '1995',
                '1996',
                '1997',
                '1998',
                '1999',
                '2000',
                '2001',
                '2002',
                '2003',
                '2004',
                '2006',
                '2007',
                '2008',
                '2009',
                '2010',
                '2011',
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
                connectNulls: true,
                dataLabels: {
                    enabled: true
                }
            }
        },
        series: [{
                showInLegend: true,
                name: 'Stunting (<5 children)',
                type: 'line',
                marker: {
                    symbol: 'circle',
                    enabled: true
                },
                data: [null, null, null, null, null, 60, null, null, 51, null, null, null, 51, null, null, 43, null, null, 41, null, null, 36, null, null, null, 31]

            }, {
                showInLegend: true,
                name: 'Wasting(<5 children)',
                type: 'line',
                marker: {
                    symbol: 'circle',
                    enabled: true
                },
                data: [null, null, null, null, null, 12, null, null, 20, null, null, null, 15, null, null, 17, null, null, 36, null, null, 14, null, null, null, 31]

            }, {
                showInLegend: true,
                name: 'Poverty',
                type: 'line',
                marker: {
                    symbol: 'circle',
                    enabled: true
                },
                data: [57, null, null, null, 50, null, null, null, 49, null, null, null, null, null, 40, null, null, null, 32, null, null, null, null, null, null, null, null]

            }, {
                showInLegend: true,
                name: 'GDP/Capita (USD)',
                type: 'line',
                marker: {
                    symbol: 'circle',
                    enabled: true
                },
                data: [null, null, null, null, null, 339, null, null, 356, null, null, null, 400, null, null, null, 732, null, null, null, null, null, null, null, null]

            }]
    });
</script>
<!--Graph 1.2-->
<script type="text/javascript">

    Highcharts.chart('tab_2_1-2', {
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
                data: [35, 25, 33, 41, 43, 38, 16, 33]

            }]
    });
</script>
<!--Grap 1.3-->
<script type="text/javascript">

    Highcharts.chart('tab_2_1-3', {
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
                '2011'
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
                showInLegend: true,
                name: '<18 years',
                data: [73, 69, 65, 68, 66, 65]

            }, {
                showInLegend: true,
                name: '<15 years',
                data: [47, 47, 38, 37, 32, 29]

            }]
    });
</script>
<!--Grap 1.7-->
<script type="text/javascript">

    Highcharts.chart('tab_2_1-4', {
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
                data: [14.8, 14.9, 15.4, 16.3, 19.9]

            }]
    });
</script>
<!--Grap 1.8-->
<script type="text/javascript">

    Highcharts.chart('tab_2_1-5', {
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
                '1993-94',
                '1996-97',
                '1999-00',
                '2004',
                '2007'
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
                    enabled: true
                }
            }
        },
        series: [{
                name: 'Rural',
                data: [17.5, 19.0, 18.3, 17.1, 17.7]

            }, {
                name: 'Urban',
                data: [15.1, 15.0, 15.7, 15.7, 15.1]

            }]
    });
</script>
<!--Grap 1.9-->
<script type="text/javascript">

    Highcharts.chart('tab_2_2-6', {
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
                name: 'Stunting',
                data: [51, 49, 45, 37, 23]

            }, {
                name: 'Wasting',
                data: [18, 17, 19, 14, 11]

            }]
    });
</script>
<!--Grap 1.10-->
<script type="text/javascript">

    Highcharts.chart('tab_2_2-7', {
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
                'Never to school or primary incomplete',
                'Primary complete',
                'Secondary incomplete',
                'Secondary or more'
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
                name: 'Unmarried',
                data: [17, 20, 32, 32]

            }, {
                name: 'Married',
                data: [30, 29, 27, 15]

            }]
    });
</script>
<!--Tab 1 Graphs-->