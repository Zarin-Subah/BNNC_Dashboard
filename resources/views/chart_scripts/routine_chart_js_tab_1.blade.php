<!--Tab 1 Graphs-->
<!--Graph 1.1-->
<script type="text/javascript">
/*chart 1*/
var randomScalingFactor = function() {
    return Math.round(Math.random() * 100);
};
var randomColorFactor = function() {
    return Math.round(Math.random() * 255);
};

var config = {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [
                13,
                40,
                1,
            ],
                backgroundColor: [
                "#F7464A",
                "#46BFBD",
                "#FDB45C",
            ],
        }, {
            data: [
                15,
                33,
                2,
            ],
                backgroundColor: [
                "#F7464A",
                "#46BFBD",
                "#FDB45C",
            ],
        }, {
            data: [
                15,
                44,
                3,
            ],
                backgroundColor: [
                "#F7464A",
                "#46BFBD",
                "#FDB45C",
            ],
        }, {
            data: [
                11,
                38,
                4,
            ],
                backgroundColor: [
                "#F7464A",
                "#46BFBD",
                "#FDB45C",
            ],
        }, {
            data: [
                10,
                39,
                4,
            ],
                backgroundColor: [
                "#F7464A",
                "#46BFBD",
                "#FDB45C",
            ],
        }],
        labels: [
            "% of women receiving maternal nutrition counselling",
            "% of visits with pregnant women who received any IFA",
            "% of times women attended a facility during pregnancy that they were weighed"
        ]
    },
    options: {
        responsive: true
    }
};
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
                name: '',
                data: [60, 51, 51, 43, 41, 36, 31]

            }]
    });
</script>
<!--Tab 1 Graphs-->