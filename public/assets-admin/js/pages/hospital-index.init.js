var options = {
        chart: { height: 335, type: "area", toolbar: { show: !1 } },
        colors: ["#67c8ff", "#6d81f5"],
        dataLabels: { enabled: !1 },
        stroke: {
            show: !0,
            curve: "smooth",
            width: [2, 2],
            dashArray: [0, 4],
            lineCap: "round",
        },
        series: [
            {
                name: "OPD",
                data: [10, 10, 50, 20, 70, 20, 80, 30, 75, 40, 60, 60],
            },
            {
                name: "General Patients",
                data: [0, 30, 10, 40, 30, 60, 50, 80, 70, 100, 90, 130],
            },
        ],
        labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ],
        yaxis: { labels: { offsetX: -12, offsetY: 0 } },
        grid: {
            borderColor: "#e0e6ed",
            strokeDashArray: 3,
            xaxis: { lines: { show: !0 } },
            yaxis: { lines: { show: !1 } },
        },
        legend: { show: !0, position: "top", horizontalAlign: "right" },
        fill: {
            type: "gradient",
            gradient: { type: "vertical", opacityFrom: 0.28, opacityTo: 0.05 },
        },
    },
    chart = new ApexCharts(document.querySelector("#patients-survey"), options),
    options =
        (chart.render(),
        {
            chart: { type: "radialBar", height: 255 },
            plotOptions: {
                radialBar: {
                    offsetY: -10,
                    startAngle: 0,
                    endAngle: 270,
                    hollow: {
                        margin: 5,
                        size: "50%",
                        background: "transparent",
                    },
                    track: { show: !1 },
                    dataLabels: {
                        name: { fontSize: "18px" },
                        value: { fontSize: "16px", color: "#50649c" },
                    },
                },
            },
            colors: ["#2a76f4", "#67c8ff", "#fdb5c8"],
            stroke: { lineCap: "round" },
            series: [71, 93, 10],
            labels: ["Active", "Recovered", "Deaths"],
            legend: {
                show: !0,
                floating: !0,
                position: "left",
                offsetX: -10,
                offsetY: 0,
            },
            responsive: [
                {
                    breakpoint: 480,
                    options: {
                        legend: {
                            show: !0,
                            floating: !0,
                            position: "left",
                            offsetX: 10,
                            offsetY: 0,
                        },
                    },
                },
            ],
        }),
    options =
        ((chart = new ApexCharts(
            document.querySelector("#covid_status"),
            options
        )).render(),
        {
            chart: { height: 210, type: "bar", toolbar: { show: !1 } },
            plotOptions: {
                bar: {
                    horizontal: !1,
                    endingShape: "rounded",
                    columnWidth: "25%",
                },
            },
            dataLabels: { enabled: !1 },
            stroke: { show: !0, width: 2, colors: ["transparent"] },
            colors: ["#4d79f6", "#e0e7fd"],
            series: [
                { name: "Male", data: [68, 44, 55, 57, 56, 61, 58] },
                { name: "Female", data: [51, 76, 85, 101, 98, 87, 105] },
            ],
            xaxis: {
                categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Set"],
                axisBorder: { show: !0, color: "#bec7e0" },
                axisTicks: { show: !0, color: "#bec7e0" },
            },
            legend: { show: !1, position: "top", horizontalAlign: "right" },
            fill: { opacity: 1 },
            grid: {
                row: { colors: ["transparent", "transparent"], opacity: 0.2 },
                borderColor: "#f1f3fa",
                strokeDashArray: 3,
            },
            tooltip: {
                y: {
                    formatter: function (e) {
                        return "" + e;
                    },
                },
            },
        });
(chart = new ApexCharts(
    document.querySelector("#patient_dash_report"),
    options
)).render();
