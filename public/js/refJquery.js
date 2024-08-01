$(document).ready(function () {
    totalReferredLeadChart();
    totalCommessionChart();
    totalProductOnListChart();
});

function totalCommessionChart() {

    var chartDom = document.getElementById('main');
    var myChart = echarts.init(chartDom);
    var option;

    option = {
        xAxis: {
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value'
        },
        series: [
            {
                data: [120, 200, 150, 80, 70, 110, 130],
                type: 'bar'
            }
        ]
    };

    option && myChart.setOption(option);

}

function totalProductOnListChart() {

    var chartDom = document.getElementById('productOnListMain');
    var myChart = echarts.init(chartDom);
    var option;

    option = {
        tooltip: {
            trigger: 'item'
        },
        series: [
            {
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                itemStyle: {
                    borderRadius: 10,
                    borderColor: '#fff',
                    borderWidth: 2
                },
                label: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    label: {
                        show: true,
                        fontSize: 40,
                        fontWeight: 'bold'
                    }
                },
                labelLine: {
                    show: false
                },
                data: [
                    { value: 80, name: 'Necklace' },
                    { value: 65, name: 'Bracelet' },
                    { value: 40, name: 'Ring' },
                    { value: 220, name: 'Earring' },
                    { value: 120, name: 'Done Referred' },
                    { value: 35, name: 'Others' }
                ]
            }
        ]
    };

    option && myChart.setOption(option);

}

function totalReferredLeadChart() {
    var chartDom = document.getElementById('totalReferredLead');
    var myChart = echarts.init(chartDom);
    var option;

    option = {
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value'
        },
        series: [
            {
                data: [820, 932, 901, 934, 1290, 1330, 1320],
                type: 'line',
                areaStyle: {}
            }
        ]
    };

    option && myChart.setOption(option);

}

function copyReferralCode() {
    $('#changeText').text("Hello world!");
}