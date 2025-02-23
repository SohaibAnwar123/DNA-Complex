jQuery(document).ready(function(){
    jQuery(".single-purchase-text p").click(function(){
        jQuery('.single-purchase-text p').addClass("bg-light-gray text-green");
        jQuery('.single-purchase-text p').removeClass("bg-pink text-white");
        jQuery(this).removeClass("bg-light-gray text-green");
        jQuery(this).addClass("bg-pink text-white");
    });
});