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
 * Call on function to update downloadsCounter in db on button click
 ******************************************************************************/
$('#downloadBtn').on('click', function(){
    update_downloadCounter();	
});