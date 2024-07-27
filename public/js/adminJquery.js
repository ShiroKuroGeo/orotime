$(document).ready(function () {
    openAndSelectImages();
    previewImageToAdd();
    previewMoreImageToAdd();
    totalSalesChartInit();
    totalUsersChartInit();
    totalCategoryChartInit();
    totalRefundsChartInit();
    totalOrdersChartInit();
})


function totalOrdersChartInit () {
    var chartDom = document.getElementById('echart-total-orders');
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
        series: [{
            data: [120, 200, 150, 80, 70, 110, 130],
            type: 'bar'
        }]
    };

    option && myChart.setOption(option);

};

function totalRefundsChartInit () {

    var chartDom = document.getElementById('echart-refunds');
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
        series: [{
            data: [120, 200, 150, 80, 70, 110, 130],
            type: 'bar'
        }]
    };

    option && myChart.setOption(option);

}

function totalCategoryChartInit () {

    var chartDom = document.getElementById('echart-category');
    var myChart = echarts.init(chartDom);
    var option;

    option = {
        title: {
            left: 'center'
        },
        tooltip: {
            trigger: 'item'
        },
        legend: {
            orient: 'vertical',
            left: 'left'
        },
        series: [{
            name: 'Access From',
            type: 'pie',
            radius: '50%',
            data: [{
                value: 1048,
                name: 'Customers'
            },
            {
                value: 735,
                name: 'Products'
            },
            {
                value: 580,
                name: 'Orders'
            },
            ],
            emphasis: {
                itemStyle: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }]
    };

    option && myChart.setOption(option);

}

function totalUsersChartInit () {

    var chartDom = document.getElementById('echarts-customers');
    var myChart = echarts.init(chartDom);
    var option;

    option = {
        tooltip: {
            trigger: 'item'
        },
        legend: {
            top: '5%',
            left: 'center'
        },
        series: [{
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
            data: [{
                value: 1048,
                name: 'CSR'
            },
            {
                value: 735,
                name: 'Customer'
            },
            {
                value: 580,
                name: 'Guest'
            },
            {
                value: 484,
                name: 'Referral'
            },
            ]
        }]
    };

    option && myChart.setOption(option);

}

function totalSalesChartInit () {

    var chartDom = document.getElementById('chartMain');
    var myChart = echarts.init(chartDom);
    var option;

    option = {
        title: {
            text: 'Yearly Graph'
        },
        tooltip: {
            trigger: 'axis'
        },
        legend: {
            data: ['Users', 'Product', 'Orders']
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        toolbox: {
            feature: {
                saveAsImage: {}
            }
        },
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            name: 'Users',
            type: 'line',
            stack: 'Total',
            data: [120, 132, 101, 134, 90, 230, 210]
        },
        {
            name: 'Product',
            type: 'line',
            stack: 'Total',
            data: [220, 182, 191, 234, 290, 330, 310]
        },
        {
            name: 'Orders',
            type: 'line',
            stack: 'Total',
            data: [150, 232, 201, 154, 190, 330, 410]
        },
        ]
    };

    option && myChart.setOption(option);

}

function previewImageToAdd() {

    $('#addProductImage').on('change', function (e) {
        var files = e.target.files;

        $('#previewSelectedImage').empty();

        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            if (!file.type.startsWith('image/')) { continue }

            var reader = new FileReader();

            reader.onload = function (e) {
                var img = `
                        <img class="img-fluid p-2"  style="height:100px; width: 100px;" src="` + e.target.result + `" alt="..."  />
                `;

                $('#previewSelectedImage').empty().append(img);
            };

            reader.readAsDataURL(file);
        }
    });
}

function previewMoreImageToAdd() {

    $('#addMoreProductImage').on('change', function (e) {
        var files = e.target.files;

        $('#previewMoreSelectedImage').empty();

        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            if (!file.type.startsWith('image/')) { continue }

            var reader = new FileReader();

            reader.onload = function (e) {

                var img = `
                        <img class="img-fluid p-2"  style="height:100px; width: 100px;" src="` + e.target.result + `" alt="..."  />
                `;

                $('#previewMoreSelectedImage').append(img);
            };

            reader.readAsDataURL(file);
        }
        var title = `
                <label for="">More Picture</label>
                `;

        $('#title').append(title);
    });
}

function openAndSelectImages() {

    $('#selectImages').on('click', function () {
        $('#addProductImage').click();
    })

}
