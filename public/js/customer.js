$(document).ready(function () {
    selectedMore();
    thisMonthChartInit();
    typedText();
    aosFadeInit();
    heroScroll();
    userProfileReview();
});

function selectedMore() {

    $('[name="oid"]').on('change', function () {
        const anyChecked = $('[name="oid"]:checked').length > 0;

        if (anyChecked) {
            $('#actionMoreSelectedActionOrders').removeClass('d-none');
        } else {
            $('#actionMoreSelectedActionOrders').addClass('d-none');
        }
    });

}

function addRemoveClass(addId, removeId) {

    $(addId).removeClass('d-none');

    $(removeId).addClass('d-none');

}

function thisMonthChartInit() {
    var chartDom = document.getElementById('thisMonthChart');
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
                type: 'bar',
                color: "rgba(197, 174, 124. 1)",
            }
        ]
    };

    option && myChart.setOption(option);
}

function heroScroll() {
    $('.hero__scroll').on('click', function (e) {
        $('html, body').animate({
            scrollTop: $(window).height()
        }, 1200);
    });
}

function userProfileReview() {
    $('#profileImage').on('change', function (e) {
        var files = e.target.files;

        $('#previewSelectedImage').empty();

        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            if (!file.type.startsWith('image/')) {
                continue
            }

            var reader = new FileReader();

            reader.onload = function (e) {
                var img =
                    `<img class="h5 d-flex justify-content-center align-items-center flex-shrink-0 text-primary bg-primary-subtle lh-1 rounded-circle mb-0" style="width: 3rem; height: 3rem"  src="` + e.target.result + `" alt="..." onclick="document.getElementById('profileImage').click()"  />`;

                $('#previewSelectedImage').empty().append(img);
            };

            reader.readAsDataURL(file);
        }
    });
}