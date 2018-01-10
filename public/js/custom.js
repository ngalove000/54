$(document).ready(function () {
    $("#modal").iziModal({
        title: 'Thông tin đặt hàng',
        padding: 20,
        radius: 0,
        fullscreen: true,
        headerColor: '#f37335'
    });


    $("#modal2").iziModal({
        title: 'Thông tin đặt hàng',
        padding: 20,
        radius: 0,
        fullscreen: true,
        headerColor: '#f37335'
    });

    $.fn.datetimepicker.dates['en'] = {
        days: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
        daysShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"],
        daysMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7", "CN"],
        months: ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"],
        monthsShort: ["Th1", "Th2", "Th3", "Th4", "Th5", "Th6", "Th7", "Th8", "Th9", "Th10", "Th11", "Th12"],
        today: "Hôm nay",
        suffix: [],
        meridiem: ["sáng", "chiều"],
        weekStart: 1,
        format: "dd/mm/yyyy hh:ii"
    };

    $("#ngaygiao").datetimepicker({
        format: "dd/mm/yyyy - hh:ii",
        autoclose: true,
        todayBtn: true,
        pickerPosition: "top-right"
    });

});
$(document).on('click', '.trigger', function (event) {
    event.preventDefault();
    $('#modal2').iziModal('open');
});

$(document).on('click', '#btnMua', function (event) {
    event.preventDefault();
    $('#modal').iziModal('open');
});