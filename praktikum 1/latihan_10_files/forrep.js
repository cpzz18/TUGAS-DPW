$(function () {
    $("[data-type='list']").click(function () {
        location.href = list;
    });
    $("[data-type='print']").click(function () {
        var nav = $(this).parents("nav").eq(0);
        var div = $("#div_debug");

        nav.hide();
        div.hide();
        window.print();
        nav.show();
        div.show();
    });
});

function goSubmitRep(elem) {
    if (cekRequired(elem)) {
        $("#noback").val(1);
        goSubmit(elem);
    }
}

function goSubmitBlankRep(elem) {
    if (cekRequired(elem)) {
        $("#noback").val(0);
        goSubmitBlank(elem);
    }
}