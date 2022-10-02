<!--Tab 3 Graphs-->
<!--Graph 3.1-->
<script type="text/javascript">

    Highcharts.chart('tab_3_3-1', {
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
                '2016',
                '2017',
                '2018',
                'NPAN2 Target 2025'
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
                showInLegend: false,
                name: '',
                data: [2.65, 7.15, 10.22, 50]

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
                '2011',
                '2014',
                'NPAN2 Target 2025'
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
                data: [12, 14, 90]

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
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                '2011',
                '2014',
                'NPAN2 Target 2025'
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
                data: [65, 59, 30]

            }]
    });
</script>
<!--Tab 1 Graphs-->