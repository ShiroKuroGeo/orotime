$(document).ready(function () {
    thisMonthChartInit();
    selectedMore();
    typedText();
    aosFadeInit();
    heroScroll();
});

function selectedMore() {

    $('[name="oid"]').on('change', function() {
        const anyChecked = $('[name="oid"]:checked').length > 0;

        if (anyChecked) {
            $('#actionMoreSelectedActionOrders').removeClass('d-none');
        } else {
            $('#actionMoreSelectedActionOrders').addClass('d-none');
        }
    });

}

function typedText() {
    var typed = new Typed('#mainTyped', {
        strings: ['<i>Affordable Price</i>', '<i>High Quality</i>', '<i>High Value</i>', 'Pawnedable Jewels'],
        typeSpeed: 100,
        loop: true,
    });
}

function addRemoveClass(addId, removeId) {

    $(addId).removeClass('d-none');

    $(removeId).addClass('d-none');

}

function aosFadeInit(){
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
}

function thisMonthChartInit(){
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

function heroScroll(){
    $('.hero__scroll').on('click', function(e) {
        $('html, body').animate({
            scrollTop: $(window).height()
        }, 1200);
    });
}