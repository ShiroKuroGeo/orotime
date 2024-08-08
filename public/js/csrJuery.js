$(document).ready(function () {
    dropdownOnHover();
    grindListInit();
    listCategoryInit();
    listTableOrderInit();
    listHistoryTransactionInit();
    listTableProductInit();
    totalOrderChartInitCsr();
    totalMainChartInitCsr();
    dataDropdownOnHover();
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

function listTableProductInit() {

    var options = {
        valueNames: ['name', 'price', 'category', 'poster', 'date'],
        page: 10,
        pagination: true
    };

    var userList = new List('productTableInCSR', options);

    $('#search-product-csr').on('keyup', function () {
        userList.search($(this).val());
    })

}

function listTableOrderInit() {

    var options = {
        valueNames: ["order", "product", "customer", "payment_status", "fulfillment_status", "date"],
        page: 10,
        pagination: true
    };

    var orderList = new List('orderTableInCSR', options);

    $('#search-order-csr').on('keyup', function () {
        orderList.search($(this).val());
    })
}

function listHistoryTransactionInit() {
    var options = {
        valueNames: ["order", "total", "customer", "payment_method", "payment_status", "delivery_type", "date"],
        page: 5,
        pagination: true
    };

    var orderList = new List('listHistoryTransaction', options);

    $('#search-order-csr').on('keyup', function () {
        orderList.search($(this).val());
    })
}

function listCategoryInit() {
    var options = {
        valueNames: ["category", "description", "total", "date"],
        page: 5,
        pagination: true
    };

    var categoryList = new List('listCategory', options);

    $('#search-category-csr').on('keyup', function () {
        categoryList.search($(this).val());
    })
}

function grindListInit() {

    $('.matrixFormatList').on('click', function () {
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

function dropdownOnHover () {
    const e = document.querySelector("[data-dropdown-on-hover]");
    e &&
        e.addEventListener("mouseover", (e) => {
            if (e.target?.classList.contains("dropdown-toggle") && !e.target.parentNode.className.includes("dropdown-inside") && window.innerWidth > 992) {
                const o = new window.bootstrap.Dropdown(e.target);
                o._element.classList.add("show"),
                    o._menu.classList.add("show"),
                    o._menu.setAttribute("data-bs-popper", "none"),
                    e.target.parentNode.addEventListener("mouseleave", () => {
                        window.innerWidth > 992 && o.hide();
                    });
            }
        });
};