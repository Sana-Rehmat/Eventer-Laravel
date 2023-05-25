$('.yearpicker').datepicker({
    autoclose: true,
    format: " yyyy",
    viewMode: "years",
    minViewMode: "years",
    startDate: '1947',
    endDate: new Date(),

});
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
$('#DOB').datepicker({
    autoclose: true,
    format: "dd/mm/yyyy",
    viewMode: "years",
    minViewMode: "days",
    startDate: "01/01/1950",
    endDate: new Date(),

});
var endYear = new Date(new Date().getFullYear(), 11, 31);
$(".monthyearpicker").datepicker({
    format: "MM-yyyy",
    startDate: "8-1947",
    endDate: endYear,
    startView: "months",
    minViewMode: "months",
    maxViewMode: "years"
})
$('#sandbox-container .input-daterange').datepicker({
    todayBtn: true,
    keyboardNavigation: false,
    datesDisabled: ['08/06/2022', '08/21/2022'],
    toggleActive: true,
    defaultViewDate: {
        year: 1977,
        month: 04,
        day: 25
    }
});
