/*******************************************************************************
 *  Redirect to the given path   
 ******************************************************************************/
function redirectTo(path){
    window.location.href = "" + path;
}

/*******************************************************************************
 *  Redirect to the given path   
 ******************************************************************************/
$(document).ready(function(){
    //TODO set current active property of nav
    setInterval(get_downloadCounter, 3000);
});   

/*******************************************************************************
 *  Prints the current year to the footer dynamically. (Shouldn't need changed in the foreseeable future)   
 ******************************************************************************/
$(function(){
    var currentYear = (new Date).getFullYear();
    $("#year").html(currentYear);
});

/*******************************************************************************
 * Retrieve downloads counter and update span element
 ******************************************************************************/
function get_downloadCounter() {
    $.ajax({
        url: "includes/get_downloadCounter.php",
        type: "GET",
        dataType: "text"
    }).always(function (response) {
        $('#span_downloadsCounter').text(response);
    });
}

/*******************************************************************************
 * Update downloads counter in db
 ******************************************************************************/
function update_downloadCounter() {
    $.ajax({
        url: "includes/update_downloadCounter.php",
        type: "GET",
        dataType: "text"
    }).always(function (response) {
        if(!response === '1'){
            console.log("failed");
        }
    });
}
/*******************************************************************************
 * Call on function to check if EULA has been agreed, and add download button if so
 ******************************************************************************/
$('#eulaCheckbox').on('click', function(){
    var check = $("#eulaCheckbox").prop("checked");
    if(check) {
        $('.checkbox').before("<p><a id=\"downloadBtn\" class=\"btn btn-primary btn-lg\" href=\"download/BeeRB-1.0.6-win64-beta.exe\" role=\"button\" download>Download</a></p>");
    } else {
        $('#downloadBtn').remove();
    }
    	
});
/*******************************************************************************
 * Call on function to download file and update download counter.
 * Button is only seen if user has agreed to EULA.
 ******************************************************************************/
$('#downloadBtn').on('click', function(){
    update_downloadCounter();
});