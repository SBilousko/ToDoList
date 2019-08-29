$( document ).ready(function() {

    $("a.add").click(function () {
        $(".new-task").slideDown(500);
    });

    $( "#datepicker" ).datepicker({
        dateFormat: "dd.mm.yy",
        dayNamesMin: [ "Нд", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб" ],
        firstDay: 1,
        monthNames: [ "Січень", "Лютий", "Березень", "Квітень", "Травень", "Червень", "Липень", "Серпень", "Вересень", "Жовтень", "Листопад", "Грудень" ],
        showOtherMonths: true
    }); 

    $( "#datepicker" ).datepicker();

    $(".submit-btn").click(function() {
        $(".new-task").slideUp(500);
    });

    $(".cancel").click(function() {
        $(".new-task").slideUp(500);
        $("#datepicker").val("");
        $("#task-name").val("");
    });

    $(".star-label").click(function(){
        $(this).parents(".note-container").toggleClass("highlighted-task");
        $(this).find("i.fa-star").toggleClass("fas");
    });

    $(".check-label").click(function(){
        $(this).parents(".note-container").toggleClass("finished-task");
    });

});