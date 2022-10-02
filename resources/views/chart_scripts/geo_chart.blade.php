<script type="text/javascript">
    google.charts.load('upcoming', {'packages': ['geochart']});
    google.charts.setOnLoadCallback(drawRegionsMap);

    function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
            ["Country", "Popularity"],
            ['Dhaka', 200],
            ['Rajshahi', 300],
            ['Barishal', 400],
            ['Khulna', 500],
            ['Sylhet', 600],
            ['Rangpur', 700],
            ['Mymansing', 800],
        ]);

        var options = {
            region: 'BD',
            displayMode: 'markers',
            resolution: 'provinces',
            colorAxis: {colors: ['Gold', 'GreenYellow']}

        };

        var chart = new google.visualization.GeoChart(document.getElementById('map_chart_2'));

        chart.draw(data, options);
    }
</script>