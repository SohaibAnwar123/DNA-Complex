jQuery(document).ready(function(){

    jQuery(".single-purchase-text p").click(function(){
        jQuery('.single-purchase-text p').addClass("bg-light-gray text-green");
        jQuery('.single-purchase-text p').removeClass("bg-pink text-white");
        jQuery(this).removeClass("bg-light-gray text-green");
        jQuery(this).addClass("bg-pink text-white");
    });
    var p = $( ".mobile-show-lgm" ).first()
    var offset = p.position();
    var position = offset.top;
    jQuery(window).scroll(function() {    
        var scroll = jQuery(window).scrollTop();
        if (scroll >= position ) {
            jQuery(".mobile-sticky").addClass("visible");
        } else {
            jQuery(".mobile-sticky").removeClass("visible");
        }
    });

    var d = $( ".desktop-show-lgm" ).first()
    var offsets = d.position();
    var positions = offsets.top;
    jQuery(window).scroll(function() {    
        var scroll = jQuery(window).scrollTop();
        if (scroll >= positions ) {
            jQuery(".mobile-sticky").addClass("detop-visible");
        } else {
            jQuery(".mobile-sticky").removeClass("detop-visible");
        }
    });
});


function addBusinessDaysToDate(date, days) {
    var day = date.getDay();
    date = new Date(date.getTime());
    date.setDate(date.getDate() + days + (day === 6 ? 2 : +!day) + (Math.floor((days - 1 + (day % 6 || 1)) / 6) * 1));
    return date;
}
var newDate = addBusinessDaysToDate(new Date(), 5);
document.getElementById("order-scheduled").innerHTML = newDate.toString().replace(/\S+\s(\S+)\s(\d+)\s(\d+)\s.*/, '$1 $2, $3');