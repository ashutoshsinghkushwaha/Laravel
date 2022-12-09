$(document).ready(function() {
    $("#company_name").hide();
    $("#reporting_manag_detail").hide();
    $('#owned_by').on('change', function() {
        if ($("#company_name").css("display") == 'none') {
            $("#company_name").show();
            $("#reporting_manag_detail").show();
        } else {
            $("#company_name").hide();
            $("#reporting_manag_detail").hide();
        }
    });
});

function showDiv(divId, element) {
    document.getElementById(divId).style.display = element.value == 1 ? 'flex' : 'none';
    document.getElementById('remarks').style.display = element.value == 1 ? 'none' : 'block';
}

$(document).ready(function() {
    $("#start_warranty_div").hide();
    $("#end_warranty_div").hide();
    $('#asset_type').on('change', function() {
        if ($("#start_warranty_div").css("display") == 'none') {
            $("#start_warranty_div").show();
            $("#end_warranty_div").show();
        } else {
            $("#start_warranty_div").hide();
            $("#end_warranty_div").hide();
        }
    });
});

