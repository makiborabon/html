$(function() {
    $body = $('body');
    $body.on('change', '#billingType', getBillingSubType);
    $body.on('change', '#billing_sub_type', getBillingSubTypeValue);
});

function getBillingSubType()
{
    var bid = $('#billingType').val();
    console.log(bid);
    $.ajax({
        url: window.location.origin+"/get-billing-sub-type/"+bid,
        method: "GET",
        dataType: "json",
        success: function(response){
            var markup = "<select name='billing_sub_type_id' class='form-control' id='billing_sub_type' style='border: 1px solid red;'>";
                markup += "<option disabled selected>Chooses Billing Sub Type</option>"
            $.each(response, function(i, val ) {
                markup += "<option value='"+val.id+"'>"+val.title+"<option>";
            })
            markup += "</select>";
            $("#billing-sub-type-container").html(markup);
            $('#billing-sub-type-row').show();
            // $('#billing_sub_type').prop('required', true); // why dont want to required
        }
    });
}

function getBillingSubTypeValue()
{
    if($('#billing_sub_type').val()){
        $('#billing_sub_type').css('border', '1px solid #CCC');
    }
}