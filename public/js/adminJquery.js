$(document).ready(function () {
    listReferralUserInit();
    listCustomerUserInit();
    listCSRUserInit();
    listTableOrderInit();
    listCategoryInit();
    listTableProductInit();
    grindListInit();
    set();
    openAndSelectImages();
    previewImageToAdd();
    previewMoreImageToAdd();
    totalSalesChartInit();
    totalUsersChartInit();
    totalCategoryChartInit();
    totalRefundsChartInit();
    totalOrdersChartInit();
})


function totalOrdersChartInit() {
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

function totalRefundsChartInit() {

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

function totalCategoryChartInit() {

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

function totalUsersChartInit() {

    var chartDom = document.getElementById('echarts-customers');
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
                value: 580,
                name: 'Referral'
            },
            ],
        }]
    };

    option && myChart.setOption(option);

}

function totalSalesChartInit() {

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

function set() {
    $('#termsService').on('change', function () {
        if ($('#fullname').val() != null && $('#email').val() != null && $('#phNumber').val() != null && $('#type').val() != null && $('#confirmPassword').val() != null) {
            if ($(this).is(':checked')) {
                $('#signup').prop('disabled', false);
            } else {
                $('#signup').prop('disabled', true);
            }
        } else {
            $('#signup').prop('disabled', true);
        }
    });
}

function listCategoryInit() {
    var options = {
        valueNames: ["category", "description", "total", "date"],
        page: 5,
        pagination: true
    };

    var categoryList = new List('listCategory', options);

    $('#search-category').on('keyup', function () {
        categoryList.search($(this).val());
    })
}

function listTableProductInit() {

    var options = {
        valueNames: ['name', 'price', 'category', 'poster', 'date'],
        page: 10,
        pagination: true
    };

    var userList = new List('productTable', options);

    $('#search-product-csr').on('keyup', function () {
        userList.search($(this).val());
    })

}

function grindListInit() {

    $('#matrixFormatList').on('click', function () {
        addRemoveClass('#listProduct', '#gridProduct');
        $('#paginatedProduct').removeClass('d-none');
        $('#searchProductOnList').removeClass('d-none');
    });

    $('#matrixFormatGrid').on('click', function () {
        addRemoveClass('#gridProduct', '#listProduct');
        $('#paginatedProduct').addClass('d-none');
        $('#searchProductOnList').addClass('d-none');
    });

}

function addRemoveClass(addId, removeId) {
    $(addId).removeClass('d-none');
    $(removeId).addClass('d-none');
}

function listTableOrderInit() {

    var options = {
        valueNames: ["order", "product", "customer", "payment_status", "date"],
        page: 10,
        pagination: true
    };

    var orderList = new List('orderTable', options);

    $('#search-order').on('keyup', function () {
        orderList.search($(this).val());
    })
}

function listCSRUserInit() {
    var options = {
        valueNames: ["id","name","email","phone","department","status","date"],
        page: 10,
        pagination: true
    };

    var csrlist = new List('csrlistTable', options);

    $('#csr').on('keyup', function () {
        csrlist.search($(this).val());
    })
}

function listReferralUserInit() {
    var options = {
        valueNames: ["name","status","date"],
        page: 10,
        pagination: true
    };

    var referrallist = new List('referrallistTable', options);

    $('#referral').on('keyup', function () {
        referrallist.search($(this).val());
    })
}

function listCustomerUserInit() {
    var options = {
        valueNames: ["id" ,"name" ,"email" ,"address" ,"phone" ,"status" ,"date" ,"action" ],
        page: 10,
        pagination: true
    };

    var customerlist = new List('customerlistTable', options);

    $('#customerSearch').on('keyup', function () {
        customerlist.search($(this).val());
    })
}