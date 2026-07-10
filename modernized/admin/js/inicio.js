$(function(){
    $('.fecha_input_inicio').datepicker({
        weekStart: 1,
        minViewMode: 1,
        maxViewMode: 2,
        format: "dd/mm/yyyy",
        language: "es",
        todayBtn: "linked",
        daysOfWeekDisabled: "0",
        autoclose: true,
        todayHighlight: true,
        orientation: "bottom left"
    });
});