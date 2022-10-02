<script>
    var svg;

    function drawProgress() {
        d3.select("svg").remove()
        if (svg) {
            svg.selectAll("*").remove();

        }
    }
    // new RadialProgressChart('#maternal-health', {series: [24, 85]});
    // new RadialProgressChart('#child-health', {series: [24, 85]});

    // Firefox 1.0+

    function callMaternalChart(maternal_nutrition_counseling, ifa_distribution, weight_measured) {
        var isFirefox = typeof InstallTrigger !== 'undefined';
        // Safari 3.0+ "[object HTMLElementConstructor]"
        var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) {
            return p.toString() === "[object SafariRemoteNotification]";
        })(!window['safari'] || safari.pushNotification);
        var shadowWidth = 0;
        if (isFirefox || isSafari) {
            var shadowWidth = 0.0001;
        }
        var maternalChart = new RadialProgressChart('#maternal-health', {
            diameter: 100,
            shadow: {
                width: shadowWidth
            },
            stroke: {
                width: 10,
                gap: 3
            },
            animation: {
                // duration: int (default: 1750),
                // delay: int (between each ring, default: 200)
                duration: 2000,
                delay: 300
            },
            min: 0,
            max: 100,
            series: [
                {
                    labelStart: ~~maternal_nutrition_counseling + '%', //maternal_nutrition_counseling
                    value: maternal_nutrition_counseling,
                    color: '#eea039',
                },
                {
                    labelStart: ~~ifa_distribution + '%', // IFA Distributed
                    value: ifa_distribution,
                    color: '#3b8090',
                },
                {
                    labelStart: ~~weight_measured + '%', // Weight Measured
                    value: weight_measured,
                    color: "#ea5c58"
                },
                // {
                // 	labelStart: exclusive_breastfeeding + '%', //Exclusive Breastfeeding
                // 	value: exclusive_breastfeeding,
                // 	color: "#003d48"
                // },
            ],
            center: {
                content: [
                    '', 'MATERNAL', 'NUTRITION'
                ],
            }
        });
    }
    function callChildChart(iycf_counselling, child_growth_monitoring) {
        var isFirefox = typeof InstallTrigger !== 'undefined';
        // Safari 3.0+ "[object HTMLElementConstructor]"
        var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) {
            return p.toString() === "[object SafariRemoteNotification]";
        })(!window['safari'] || safari.pushNotification);
        var shadowWidth = 0;
        if (isFirefox || isSafari) {
            var shadowWidth = 0.0001;
        }
        var childChart = new RadialProgressChart('#child-health', {
            diameter: 100,
            shadow: {
                width: shadowWidth
            },
            stroke: {
                width: 10,
                gap: 3
            },
            animation: {
                // duration: int (default: 1750),
                // delay: int (between each ring, default: 200)
                duration: 2000,
                delay: 300

            },
            min: 0,
            max: 100,
            series: [
                {
                    labelStart: ~~iycf_counselling + '%', //IYCF Counselling
                    value: iycf_counselling,
                    color: '#eea039',
                },
                {
                    labelStart: ~~child_growth_monitoring + '%', //Child Growth Monitoring
                    value: child_growth_monitoring,
                    color: '#3B8090'
                },
            ],
            center: {
                content: [
                    '', 'CHILD', 'NUTRITION'
                ],
            }
        });
    }
    // console.API.clear();
</script>