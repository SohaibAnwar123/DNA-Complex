$(document).ready(function () {
    $('.ajax-popup-link').magnificPopup({
        type: 'ajax',
        callbacks: {
            beforeOpen: function() {
                $('body').addClass('mfp-active');
            },
            beforeClose: function() {
                $('body').removeClass('mfp-active');
            }
        }
    });

});
//send upsell form
$('body').on("click", '[data-uitype="save_upsell"]', function (e) {

    e.preventDefault();
    e.stopPropagation();

    openLoadingModal();

    if($(this).attr("data-tracking-price")){
        try {
            if (fbq !== undefined) {
                fbq('track', 'Purchase', {currency: "USD", value: $(this).attr("data-tracking-price")});
            }
        }catch (err) {console.log(err);}
    }

    if($("[name=x_amount]").length > 0 && $("[name=x_card_num]").val() != ""){
        submitButtonClick();
    } else {
        $(this).closest('[data-uitype="upsell_form"]').submit();
    }

});

//send upsell form
function loadingAndSubmit(){
    openLoadingModal();
    if($("[name=x_amount]").length > 0 && $("[name=x_card_num]").val() != ""){
        submitButtonClick();
    } else {
        $('[data-uitype="upsell_form"]').submit();
    }

}

function openLoadingModal(messageArray) {
    $.magnificPopup.open({
        items: {
            src: $('[data-uitype="modal-container"]').html(),
            type: 'inline',
        },
        modal: 'true'
    });

    var messages = [ "Securing your order", "Applying your coupon", "Confirming your discount", "Checking out" ];

    if (typeof(messageArray)!=='undefined'){
        rotateMessages(messageArray);
    } else {
        rotateMessages(messages);
    }
}

function rotateMessages(messages){
    //"Securing your order",
    var counter = 1;
    var elem = $(".loading-message");
    var inst = setInterval(change, 2000);

    $(".loading-message").html(messages[0]);

    function change() {
        elem.html(messages[counter]);
        counter++;
        if (counter >= messages.length) {
            counter = 0;
            clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
        }
    }
}

function openConfirmModal() {
    $.magnificPopup.open({
        items: {
            src: $('[data-uitype="confirm-modal-container"]').html(),
            type: 'inline',
        },
        modal: 'true'
    });
}

function closeConfirmModal() {
    $.magnificPopup.close();
    setTimeout(function () {
        openLoadingModal();
    }, 300);
}

$('body').on("click", '[data-uitype="close_modal"]', function (e) {
    $.magnificPopup.close();
})

function getDate(days) {
    var monthNames = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    var dayNames = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    var now = new Date();
    now.setDate(now.getDate() + days);
    var nowString = dayNames[now.getDay()] + ", " + monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear();
    document.write(nowString);
}

$(document).ready(function() {
    $('.numeric-data').on("keyup", function () {
        var value = $(this).val();
        var regex_cell = /[^[0-9]]*/gi;
        var new_value = value.replace(regex_cell, '');
        $(this).val(new_value);
    });
});


// Popup JS
function openNewWindow(page_url, type, button, window_name, width, height, top, left, features) {

    if (!type) {
        type = 'popup';
    }

    if (!width) {
        width = 480;
    }

    if (!height) {
        height = 480;
    }

    if (!top) {
        top = 50;
    }

    if (!left) {
        left = 50;
    }

    if (!features) {
        features = 'resizable,scrollbars';
    }

    if (type == 'popup') {
        var settings = 'height=' + height + ',';
        settings += 'width=' + width + ',';
        settings += 'top=' + top + ',';
        settings += 'left=' + left + ',';
        settings += features;

        win = window.open(page_url, window_name, settings);
        win.window.focus();
    } else if (type == 'modal') {
        var html = '';
        html += '<div id="app_common_modal">';
        html += '<div class="app_modal_body"><a href="javascript:void(0);" id="app_common_modal_close">X</a><div id="p-frame"></div>';
        if (button) {
            html += '<div id="bottom"><p>Please scroll down to activate Accept button</p><button onclick="chkBox()" disabled="disabled">' + button + '</button></div>';
        }

        html += '</div></div>';

        if (!$('#app_common_modal').length) {
            $('body').append(html);
        }
        $('#app_common_modal').fadeIn();
    }
    // Hide Popup
    $('#app_common_modal_close').click(function() {
        $('#app_common_modal').remove();
    });


    $.ajax({
        url: page_url,
    }).done(function(data) {
        $('#p-frame').html(data);
        $('#p-frame').scroll(function() {
            if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight - 50) {
                $('#bottom button').removeAttr('disabled');
            }
        })

    });

}
$('#error_handler_overlay_close').click(function() {
    $('#error_handler_overlay').hide();
    var error_handler_body = $('.error_handler_body');
    error_handler_body.find('ul').remove();
});

$('#error_handler_overlay_paypal_close').click(function() {
    $('#error_handler_overlay_paypal').hide();
});

function showDefaultErrorDialog(errors) {
    var error_handler_body = $('.error_handler_body');
    error_handler_body.append("<ul><li>" + errors + "</li></ul>");
    $('#error_handler_overlay').show();
}

function hideDefaultErrorDialog() {
    var error_handler_body = $('.error_handler_body');
    error_handler_body.find('ul').remove();
}