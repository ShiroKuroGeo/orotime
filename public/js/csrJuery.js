$(document).ready(function () {
    totalOrderChartInitCsr();
    totalMainChartInitCsr();
})

function totalOrderChartInitCsr() {

    var chartDom = document.getElementById('cs-chart-main');
    var myChart = echarts.init(chartDom);
    var option;

    option = {
        title: {
            text: 'Orders',
            subtext: 'Fasten Data'
        },
        tooltip: {
            trigger: 'axis'
        },
        toolbox: {
            show: true,
            feature: {
                dataView: { show: true, readOnly: false },
                magicType: { show: true, type: ['line', 'bar'] },
                restore: { show: true },
                saveAsImage: { show: true }
            }
        },
        calculable: true,
        xAxis: [
            {
                type: 'category',
                data: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ]
            }
        ],
        yAxis: [
            {
                type: 'value'
            }
        ],
        series: [
            {
                name: 'Orders',
                type: 'bar',
                data: [
                    2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3
                ],
                markPoint: {
                    data: [
                        { type: 'max', name: 'Max' },
                        { type: 'min', name: 'Min' }
                    ]
                },
                markLine: {
                    data: [{ type: 'average', name: 'Avg' }]
                }
            }
        ]
    };

    option && myChart.setOption(option);

}

function totalMainChartInitCsr() {

    var chartDom = document.getElementById('totalMain');
    var myChart = echarts.init(chartDom);
    var option;

    option = {
        title: {
            text: 'Issues Discovered',
            subtext: 'Fasten Data',
            left: 'center'
        },
        tooltip: {
            trigger: 'item'
        },
        series: [
            {
                name: 'Access From',
                type: 'pie',
                radius: '50%',
                data: [
                    { value: 78, name: 'Pending' },
                    { value: 63, name: 'Success' },
                    { value: 56, name: 'Approve' },
                ],
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };

    option && myChart.setOption(option);

}