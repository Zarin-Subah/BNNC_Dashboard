<!--Tab 4 Graphs-->
<!--Graph 4.1-->
<script type="text/javascript">

    Highcharts.chart('tab_4_4-1', {
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
                showInLegend: true,
                name: 'Height <145 cm',
                data: [16, 15, 13, 12]

            }, {
                showInLegend: true,
                name: 'BMI <18.5',
                data: [34, 30, 24, 18]

            }]
    });
</script>
<!--Graph 4.2-->
<script type="text/javascript">

    Highcharts.chart('tab_4_4-2', {
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
                showInLegend: true,
                name: 'No ANC',
                data: [42, 37, 32, 21.4]

            }, {
                showInLegend: true,
                name: 'Four of more check-ups',
                data: [17, 22, 26, 32.2]

            }]
    });
</script>
<!--Grap 4.3-->
<script type="text/javascript">

    Highcharts.chart('tab_4_4-3', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        xAxis: {
            categories: ['1st trim', '2nd trim', '3rd trim', 'Pregnant', 'Non-pregnant']
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
                showInLegend: true,
                name: 'At risk (MUAC <230mm)',
                data: [19, 24, 23, 17, 26]
            }, {
                showInLegend: true,
                name: 'Severe (MUAC <207 mm)',
                data: [4, 4, 5, 4, null]
            }]
    });
</script>
<!--Grap 4.4-->
<script type="text/javascript">

    Highcharts.chart('tab_4_4-4', {
        chart: {
            type: 'column'
        },
        title: {
            text: null
        },
        xAxis: {
            categories: ['Barisal', 'Chittagong', 'Dhaka', 'Khulna', 'Rajshahi', 'Rangpur', 'Sylhet', 'National', 'Urban', 'Rural']
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
                showInLegend: true,
                name: 'At risk (MUAC <230mm)',
                data: [19, 24, 23, 17, 20, 28, 29, 23, 17, 25]
            }, {
                showInLegend: true,
                name: 'Severe (MUAC <207 mm)',
                data: [5, 4, 5, 2, 2, 5, 8, 4, 5, 4]
            }]
    });
</script>
<!--Graph 4.5-->
<script type="text/javascript">

    Highcharts.chart('tab_4_4-5', {
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
                name: 'Urban',
                data: [40, 43, 57.7]

            }, {
                showInLegend: true,
                name: 'Rural',
                data: [25, 34, 67.3]

            }]
    });
</script>
<!--Tab 4 Graphs-->