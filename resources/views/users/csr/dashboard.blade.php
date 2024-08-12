<x-layout.csr>
    @section('title', 'Dashboard');
    @include('components.csrnavtopstart')
    <div class="content">
        <div class="container">
            <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
                <div class="me-4 mb-3 mb-sm-0">
                    <h2 class="mb-0"> Shiro George Alfeser Inoc </h2>
                    <div class="small">
                        <span class="fw-500 text-primary">
                            {{ Carbon\Carbon::now()->format('l') }}
                        </span>
                        . {{ Carbon\Carbon::now()->format('F j, Y') }}
                    </div>
                </div>
            </div>
            <div class="card card-waves mb-4 mt-5">
                <div class="card-body p-5">
                    <div class="row align-items-center justify-content-between">
                        <div class="col">
                            <h2 class="text-primary-light">Welcome back, Shiro George Alfeser!</h2>
                            <p class="text-gray-700">Your dedication and excellence in your work have not gone
                                unnoticed. Your commitment truly sets a standard of excellence for all of us.</p>
                        </div>
                        <div class="col d-none d-lg-block text-center">
                            <img class="img-fluid px-xl-4" width="500"
                                src="{{ asset('images/orotime-images/statistics-illustration.jpg') }}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-start-lg border-start-primary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-primary mb-1">Sales (monthly)</div>
                                    <div class="h5">P 1500</div>
                                    <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                        <i class="me-1" data-feather="trending-up"></i>
                                        12%
                                    </div>
                                </div>
                                <div class="ms-2">
                                    <i data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-start-lg border-start-secondary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-secondary mb-1">Customer Questions</div>
                                    <div class="h5">12</div>
                                    <div class="text-xs fw-bold text-danger d-inline-flex align-items-center">
                                        <i class="me-1" data-feather="trending-down"></i>
                                        3%
                                    </div>
                                </div>
                                <div class="ms-2">
                                    <i data-feather="help-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-start-lg border-start-success h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-success mb-1">Orders</div>
                                    <div class="h5">11</div>
                                    <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                        <i class="me-1" data-feather="trending-up"></i>
                                        12%
                                    </div>
                                </div>
                                <div class="ms-2">
                                    <i data-feather="shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-start-lg border-start-info h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-info mb-1">Total Invoices</div>
                                    <div class="h5">5</div>
                                    <div class="text-xs fw-bold text-danger d-inline-flex align-items-center">
                                        <i class="me-1" data-feather="trending-down"></i>
                                        1%
                                    </div>
                                </div>
                                <div class="ms-2">
                                    <i data-feather="file-text"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 row-cols-1 row-cols-lg-3">

                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="">
                                <span class="text-primary-lighter fw-bold"> Order Statistics </span> <br>
                                <small>
                                    There are 10k Total Order Statistics
                                </small>
                            </div>
                            <div class="p-0 d-none d-lg-block">
                                <div id="orderStatistics" style="width: 130px; height: 130px" class="m-0"></div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                href="#!">
                                <div class="p-0">
                                    <span class=""> Necklaces </span> <br>
                                    <span class=" pt-0 mt-0 small">Jewelry you wear around your neck.</span>
                                </div>
                                <div class="text-secondary small ">
                                    152
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                href="#!">
                                <div class="">
                                    Bracelets <br>
                                    <small>Jewelry you wear around your wrist.</small>
                                </div>
                                <div class="text-secondary small ">
                                    152
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                href="#!">
                                <div class="">
                                    Earrings <br>
                                    <small>Jewelry you wear around your ear.</small>
                                </div>
                                <div class="text-secondary small ">
                                    152
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                href="#!">
                                <div class="">
                                    Rings <br>
                                    <small>Jewelry you wear around your finger.</small>
                                </div>
                                <div class="text-secondary small ">
                                    152
                                </div>
                            </a>
                        </div>
                        <div class="card-footer position-relative border-top-0">
                            <a class="small" href="#!">
                                <div class="d-flex align-items-center justify-content-between">
                                    View More Order Statistics
                                    <i data-feather="arrow-right" class="p-1"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="">
                                <span class="text-primary-lighter fw-bold"> Affiliate Reports</span> <br>
                            </div>
                            <div class="p-0 d-none d-lg-block">
                                <div id="affiliateChart" style="width: 130px; height: 130px" class="m-0"></div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action" href="#!">
                                <div class="d-flex align-items-center">
                                    <i data-feather="dollar-sign" class="p-1"></i>
                                    <div class="ms-2">
                                        Earnings Reports <br>
                                        <small>Total earns as of this week</small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#!">
                                <div class="d-flex align-items-center">
                                    <i data-feather="users" class="p-1"></i>
                                    <div class="ms-2">
                                        Customer Users Reports <br>
                                        <small>Total Registered Customer as of this month of <span
                                                class="text-primary">{{ Carbon\Carbon::now()->format('F') }}</span></small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#!">
                                <div class="d-flex align-items-center">
                                    <i data-feather="star" class="p-1"></i>
                                    <div class="ms-2">
                                        Product Reviews <br>
                                        <small>Customer Product Reviews as of this month of <span
                                                class="text-primary">{{ Carbon\Carbon::now()->format('F') }}</span></small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#!">
                                <div class="d-flex align-items-center">
                                    <i data-feather="message-circle" class="p-1"></i>
                                    <div class="ms-2">
                                        Conversion Rate <br>
                                        <small>Customer active asking about products and Reviews as of this <span
                                                class="text-primary">{{ Carbon\Carbon::now()->format('F') }}</span></small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#!">
                                <div class="d-flex align-items-center">
                                    <i data-feather="users" class="p-1"></i>
                                    <div class="ms-2">
                                        Referral Users Reports <br>
                                        <small>Number of people being referred to the product as this <span
                                                class="text-primary">{{ Carbon\Carbon::now()->format('F') }}</span></small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="">
                                <span class="text-primary-lighter fw-bold"> Sales and Traffic </span> <br>
                            </div>
                            <div class="p-0 d-none d-lg-block">
                                <div id="affiliateChart" style="width: 130px; height: 130px" class="m-0"></div>
                            </div>
                        </div>
                        <div id="salesAndTraffic" style="height: 320px; width: 100%"></div>
                    </div>
                </div>

            </div>
            <div class="row gx-6">
                <div class="col-12">
                    <div data-list='{"valueNames":["country","users","transactions","revenue","conv-rate"],"page":5, "pagination": true}'
                        id="listHistoryTransaction">
                        <div class="mb-5 mt-7">
                            <h3>History Transaction</h3>
                            <p class="text-body-tertiary">Where you record of financial undertakings</p>
                        </div>
                        <div class="table-responsive scrollbar">
                            <table class="table table-hover fs-10 mb-0">
                                <thead>
                                    <tr>
                                        <th class="sort border-top border-translucent ps-0 align-middle"
                                            style="width: 10%" scope="col" data-sort="country">Product</th>
                                        <th class="sort border-top border-translucent align-middle" style="width: 10%"
                                            scope="col" data-sort="users">Customer</th>
                                        <th class="sort border-top border-translucent align-middle" style="width: 10%"
                                            scope="col" data-sort="transactions">Type
                                        </th>
                                        <th class="sort border-top border-translucent align-middle" style="width: 10%"
                                            scope="col" data-sort="revenue">Price</th>
                                        <th class="sort border-top border-translucent pe-0 align-middle"
                                            style="width: 10%" scope="col" data-sort="conv-rate">DATE</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="table-regions-by-revenue">
                                    @for ($i = 1; $i <= 150; $i++)
                                        <tr>
                                            <td class="white-space-nowrap ps-0">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="mb-0 me-3">1. </h6><a href="#!"
                                                        class="list-group-item list-group-item-action">
                                                        <div class="d-flex align-items-center"><img
                                                                src="{{ asset('images/orotime-images/earring.jpg') }}"
                                                                alt="" width="24" />
                                                            <p class="mb-0 ps-3 text-primary fw-bold fs-9">
                                                                Pure Silver Earring 5 grams <br>
                                                                <small class="text-secondary">Hello world</small>
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="align-middle users">
                                                <h6 class="mb-0">
                                                    Shiro George Alfeser
                                                </h6>
                                            </td>
                                            <td class="align-middle transactions">
                                                <h6 class="mb-0">
                                                    @if ($i % 2 == 0)
                                                        Guest Customer
                                                    @else
                                                        Accounted Customer
                                                    @endif
                                                </h6>
                                            </td>
                                            <td class="align-middle revenue">
                                                <h6 class="mb-0">
                                                    P 1589.00
                                                </h6>
                                            </td>
                                            <td class="align-middle pe-0 conv-rate">
                                                <h6>
                                                    Nov 28
                                                </h6>
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end py-1">
                            <div class="pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-layout.csr>
<script>
    orderStatisticsChart();
    affiliateReportsChart();
    salesAndTrafficChart();

    function orderStatisticsChart() {
        var chartDom = document.getElementById('orderStatistics');
        var myChart = echarts.init(chartDom);
        var option;

        option = {
            tooltip: {
                trigger: 'item'
            },
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    show: false,
                    position: 'center'
                },
                labelLine: {
                    show: false
                },
                data: [{
                        value: 1048,
                        name: 'Search Engine'
                    },
                    {
                        value: 735,
                        name: 'Direct'
                    },
                    {
                        value: 580,
                        name: 'Email'
                    },
                    {
                        value: 484,
                        name: 'Union Ads'
                    },
                    {
                        value: 300,
                        name: 'Video Ads'
                    }
                ]
            }]
        };
        option && myChart.setOption(option);
    }


    function affiliateReportsChart() {
        var chartDom = document.getElementById('affiliateChart');
        var myChart = echarts.init(chartDom);
        var option;

        option = {
            tooltip: {
                trigger: 'item'
            },
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    show: false,
                    position: 'center'
                },
                labelLine: {
                    show: false
                },
                data: [{
                        value: 1048,
                        name: 'Search Engine'
                    },
                    {
                        value: 735,
                        name: 'Direct'
                    },
                    {
                        value: 580,
                        name: 'Email'
                    },
                    {
                        value: 484,
                        name: 'Union Ads'
                    },
                    {
                        value: 300,
                        name: 'Video Ads'
                    }
                ]
            }]
        };
        option && myChart.setOption(option);
    }

    function salesAndTrafficChart() {
        var chartDom = document.getElementById('salesAndTraffic');
        var myChart = echarts.init(chartDom);
        var option;

        option = {
            toolbox: {
                show: true,
                feature: {
                    dataView: {
                        show: true,
                        readOnly: false
                    },
                    restore: {
                        show: true
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            calculable: true,
            xAxis: [{
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            }],
            yAxis: [{
                type: 'value'
            }],
            series: [{
                    type: 'bar',
                    data: [
                        2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3
                    ],
                    markPoint: {
                        data: [{
                                type: 'max',
                                name: 'Max'
                            },
                            {
                                type: 'min',
                                name: 'Min'
                            }
                        ]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: 'Avg'
                        }]
                    }
                },
                {
                    type: 'bar',
                    data: [
                        2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3
                    ],
                    markPoint: {
                        data: [{
                                name: 'Max',
                                value: 182.2,
                                xAxis: 7,
                                yAxis: 183
                            },
                            {
                                name: 'Min',
                                value: 2.3,
                                xAxis: 11,
                                yAxis: 3
                            }
                        ]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: 'Avg'
                        }]
                    }
                }
            ]
        };

        option && myChart.setOption(option);
    }
</script>
