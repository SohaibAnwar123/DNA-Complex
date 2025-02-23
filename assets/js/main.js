$(document).ready(function () {
  // Event listener for box click
  $('.pricingBox').click(function () {
    // Remove active class from all boxes
    $('.pricingBox').removeClass('activeBox');
    // Add active class to the clicked box
    $(this).addClass('activeBox');
  });
});



$(document).ready(function () {
  // Get the switch element
  let switchElement = $('.switch #checkProd');

  // Get the toogleRadio element
  let toogleRadio = $('.toogleRadio');

  // Get the price elements
  let modifyPrice1 = $('#modifyPrice1');
  let modifyPrice2 = $('#modifyPrice2');
  let modifyPrice3 = $('#modifyPrice3');
  let modifyShipping = $('.modifyShipping');
  let savePrice1 = $('.savePrice1');
  let savePrice2 = $('.savePrice2');
  let savePrice3 = $('.savePrice3');

  // Add click event listener to the switch element
  switchElement.on('click', function () {
    // Toggle the class on toogleRadio element
    toogleRadio.toggleClass('activeRadio');

    // Check if the class is present on toogleRadio element
    if (toogleRadio.hasClass('activeRadio')) {
      // Update the prices
      modifyPrice1.text('$74');
      modifyPrice2.text('$63');
      modifyPrice3.text('$69');
      modifyShipping.text('Free Shipping');
      savePrice1.text('$25');
      savePrice2.text('$180');
      savePrice3.text('$90');
    } else {
      // Reset the prices to their original values
      modifyPrice1.text('$79');
      modifyPrice2.text('$64');
      modifyPrice3.text('$71');
      modifyShipping.text('+ Shipping $4.95');
      savePrice1.text('$25');
      savePrice2.text('$180');
      savePrice3.text('$90');
    }
  });
});


jQuery(document).ready(function () {
  var d = $(".promiseWrapBtm").first()
  var offsets = d.position();
  var positions = offsets.top;
  jQuery(window).scroll(function () {
    var scroll = jQuery(window).scrollTop();
    if (scroll >= positions) {
      jQuery(".hurryOrder").addClass("desktop-visible");
    } else {
      jQuery(".hurryOrder").removeClass("desktop-visible");
    }
    $(".hurryOrder").parent().css("overflow", "visible");
  });
});

// jQuery(document).ready(function () {
//   var d = $(".promiseWrap").first();
//   var offsets = d.position();
//   var positions = offsets.top;

//   jQuery(window).scroll(function () {
//     var scroll = jQuery(window).scrollTop();
//     var hurryOrder = jQuery(".hurryOrder");
//     var parentContainer = hurryOrder.parent();

//     if (scroll >= positions) {
//       hurryOrder.addClass("desktop-visible");
//       parentContainer.css("overflow-x", "visible");
//     } else {
//       hurryOrder.removeClass("desktop-visible");
//       parentContainer.css("overflow-x", "hidden");
//     }
//   });
// });


// jQuery(document).ready(function() {
//   var promiseWrap = $(".productSteps").first();
//   var promiseWrapOffset = promiseWrap.offset().top;

//   jQuery(window).scroll(function() {
//     var scroll = jQuery(window).scrollTop();
//     var hurryOrder = jQuery(".hurryOrder");
//     var parentContainer = hurryOrder.parent();

//     if (scroll >= promiseWrapOffset) {
//       hurryOrder.addClass("desktop-visible");
//       parentContainer.css("overflow-x", "visible");
//     } else {
//       hurryOrder.removeClass("desktop-visible");
//       parentContainer.css("overflow-x", "hidden");
//     }
//   });
// });


// jQuery(document).ready(function() {
//   var promiseWrap = $(".promiseWrap").first();
//   var promiseWrapHeight = promiseWrap.outerHeight();
//   var promiseWrapOffset = promiseWrap.offset().top;

//   jQuery(window).scroll(function() {
//     var scroll = jQuery(window).scrollTop();
//     var windowHeight = jQuery(window).height();
//     var hurryOrder = jQuery(".hurryOrder");
//     var parentContainer = hurryOrder.parent();

//     if (scroll >= (promiseWrapOffset + promiseWrapHeight - windowHeight)) {
//       hurryOrder.addClass("desktop-visible");
//       parentContainer.css("overflow-x", "visible");
//     } else {
//       hurryOrder.removeClass("desktop-visible");
//       parentContainer.css("overflow-x", "hidden");
//     }
//   });
// });







$(document).ready(function () {
  let modifyPrice1 = $('#modifyPrice1');
  let modifyPrice2 = $('#modifyPrice2');
  let modifyPrice3 = $('#modifyPrice3');
  let modifyShipping = $('.modifyShipping');
  let savePrice1 = $('.savePrice1');
  let savePrice2 = $('.savePrice2');
  let savePrice3 = $('.savePrice3');

  $(".purchaseBtn").click(function () {
    var purchaseLi = $(this).parent();

    // Remove the "activeBox" class from all purchaseLi elements
    $(".purchaseLi").removeClass("activeBox");

    // Add the "activeBox" class to the clicked purchaseLi element
    purchaseLi.addClass("activeBox");

    // Check if the first purchaseLi has the "activeBox" class
    if ($(".purchaseLi:first").hasClass('activeBox')) {
      // Update the prices for the first case
      modifyPrice1.text('$79');
      modifyPrice2.text('$63');
      modifyPrice3.text('$69');
      modifyShipping.text('Free Shipping');
      savePrice1.text('$20');
      savePrice2.text('$176');
      savePrice3.text('$84');
    } else if ($(".purchaseLi:last").hasClass('activeBox')) {
      // Update the prices for the second case
      modifyPrice1.text('$74');
      modifyPrice2.text('$64');
      modifyPrice3.text('$71');
      modifyShipping.text('+ Shipping $4.95');
      savePrice1.text('$25');
      savePrice2.text('$180');
      savePrice3.text('$90');
    }
  });
});


$(document).ready(function () {
  const section1 = $('#DNAComplexSec');
  const section2 = $('#clientNameInteract');

  // Intersection Observer options
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0
  };

  // Intersection Observer callback function
  const callback = (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        section2.addClass('clientNameClass');
        $('body').addClass('overflowX_V');
      } else {
        section2.removeClass('clientNameClass');
        $('body').removeClass('overflowX_V');
      }
    });
  };

  // Create Intersection Observer instance
  const observer = new IntersectionObserver(callback, options);

  // Start observing section1
  observer.observe(section1[0]);
});


// check out page start 

// var spd = 100;
// var spdVal = 10;
// var cntDown = 5 * 60 * spdVal;
// setInterval(function () {
//   var mn, sc, ms;
//   cntDown--;
//   if (cntDown < 0) {
//     return false;
//   }
//   mn = Math.floor((cntDown / spdVal) / 60);
//   mn = (mn < 10 ? '0' + mn : mn);
//   sc = Math.floor((cntDown / spdVal) % 60);
//   sc = (sc < 10 ? '0' + sc : sc);
//   ms = Math.floor(cntDown % spdVal);
//   ms = (ms < 10 ? '0' + ms : ms);
//   var result = mn + ':' + sc;
//   document.getElementById('desk-stopwatch').innerHTML = result;
//   document.getElementById('mob-stopwatch').innerHTML = result;
// }, spd);


$(document).ready(function () {
  // Event listener for box click
  $('.labelHide').click(function () {
    // Remove active class from all boxes
    $('.labelHide').removeClass('labelShow');
    // Add active class to the clicked box
    $(this).addClass('labelShow');
  });

  // Event listener for clicks outside form_group
  $(document).on('click', function (event) {
    if (!$(event.target).closest('.labelHide').length) {
      // Remove active class from all boxes
      $('.labelHide').removeClass('labelShow');
    }
  });
});



// Quiz page start 
// $(document).ready(function () {
//   // Set up the click event for cards
//   $(".quizItems li").click(function () {
//     $(".quizItems li").removeClass("activeCard");
//     $(this).addClass("activeCard");
//     updateNextButtonVisibility();
//   });

//   // Set up the click event for the "Next" button
//   $(".next").click(function () {
//     var currentFieldset = $(this).closest("fieldset");
//     var nextFieldset = currentFieldset.next();
//     var currentProgress = $("#progressbar li.active");
//     var nextProgress = currentProgress.next();

//     currentFieldset.hide();
//     nextFieldset.show();

//     currentProgress.addClass("completeStep");
//     nextProgress.addClass("active");

//     updateNextButtonVisibility();

//     if (nextFieldset.length === 0) {
//       setTimeout(function () {
//         $("#stepsForm").hide();
//         $(".loader_wrapper").addClass("loader__wrapper");
//         var i = 0;
//         if (i == 0) {
//           i = 1;
//           var elem = document.getElementById("myBar");
//           var width = 10;
//           var id = setInterval(frame, 10);
//           function frame() {
//             if (width >= 100) {
//               clearInterval(id);
//               i = 0;
//             } else {
//               width++;
//               elem.style.width = width + "%";
//               elem.innerHTML = width  + "%";
//             }
//           }
//         }
//         setTimeout(function () {
//           window.location.href = "index.html";
//         }, 2000); // Redirect after 3 seconds
//       }, 500); // Show the last fieldset for 3 seconds
//     }
//   });

//   // Set up the click event for the "Previous" button
//   $(".previous").click(function () {
//     var currentFieldset = $(this).closest("fieldset");
//     var prevFieldset = currentFieldset.prev();
//     var currentProgress = $("#progressbar li.active");
//     var prevProgress = currentProgress.prev();

//     currentFieldset.hide();
//     prevFieldset.show();

//     currentProgress.removeClass("active");
//     prevProgress.removeClass("completeStep").addClass("active");
//     prevProgress.nextAll().removeClass("completeStep");
//     prevProgress.prevAll().addClass("completeStep");

//     updateNextButtonVisibility();
//   });

//   function updateNextButtonVisibility() {
//     var activeCard = $(".quizItems li.activeCard");
//     var nextButton = activeCard.closest("fieldset").find(".next");

//     if (activeCard.length > 0) {
//       // nextButton.show();
//       nextButton.addClass("nextBtnFull");
//     } else {
//       // nextButton.hide();
//       nextButton.removeClass("nextBtnFull");
//     }
//   }

//   // Initial update of the Next button visibility
//   updateNextButtonVisibility();
// });

$(document).ready(function () {
  var currentFieldsetIndex = 0;

  // Set up the click event for cards
  $(".quizItems li").click(function () {
    var fieldset = $(this).closest("fieldset");
    var fieldsetIndex = $("fieldset").index(fieldset);

    if (fieldsetIndex === 0) {
      // Only one active card for fieldset 1
      $(".quizItems li").removeClass("activeCard");
      $(this).addClass("activeCard");
    } else if (fieldsetIndex === 1 || fieldsetIndex === 2) {
      // Multiple active cards for fieldset 2 and 3
      $(this).toggleClass("activeCard");
    }

    updateNextButtonVisibility();
  });

  // Set up the click event for the "Next" button
  $(".next").click(function () {
    var currentFieldset = $(this).closest("fieldset");
    var nextFieldset = currentFieldset.next();
    var currentProgress = $("#progressbar li.active");
    var nextProgress = currentProgress.next();

    currentFieldset.hide();
    nextFieldset.show();

    currentProgress.addClass("completeStep");
    nextProgress.addClass("active");

    updateNextButtonVisibility();

    if (nextFieldset.length === 0) {
      setTimeout(function () {
        $("#stepsForm").hide();
        $(".loader_wrapper").addClass("loader__wrapper");
        var i = 0;
        if (i == 0) {
          i = 1;
          var elem = document.getElementById("myBar");
          var width = 10;
          var id = setInterval(frame, 10);
          function frame() {
            if (width >= 100) {
              clearInterval(id);
              i = 0;
            } else {
              width++;
              elem.style.width = width + "%";
              elem.innerHTML = width + "%";
            }
          }
        }
        setTimeout(function () {
          window.location.href = "index.html";
        }, 2000); // Redirect after 3 seconds
      }, 500); // Show the last fieldset for 3 seconds
    }
  });

  // Set up the click event for the "Previous" button
  $(".previous").click(function () {
    var currentFieldset = $(this).closest("fieldset");
    var prevFieldset = currentFieldset.prev();
    var currentProgress = $("#progressbar li.active");
    var prevProgress = currentProgress.prev();

    currentFieldset.hide();
    prevFieldset.show();

    currentProgress.removeClass("active");
    prevProgress.removeClass("completeStep").addClass("active");
    prevProgress.nextAll().removeClass("completeStep");
    prevProgress.prevAll().addClass("completeStep");

    updateNextButtonVisibility();
  });

  function updateNextButtonVisibility() {
    var activeCard = $(".quizItems li.activeCard");
    var nextButton = activeCard.closest("fieldset").find(".next");

    if (activeCard.length > 0) {
      nextButton.addClass("nextBtnFull");
    } else {
      nextButton.removeClass("nextBtnFull");
    }
  }

  // Initial update of the Next button visibility
  updateNextButtonVisibility();
});





$(document).ready(function() {
  let BtmIconImg = $('.btmIconImg');
  let crossIcon = $('.cross');
  // Add click event listener
  BtmIconImg.on('click', function() {
    // Remove active class from the parent '.btmIcon' element
    $(this).closest('.btmIcon').toggleClass('btmIconActive');
  });
 
  // Add click event listener
  crossIcon.on('click', function() {
    // Remove active class from the parent '.btmIcon' element
    $(this).closest('.btmIcon').toggleClass('btmIconActive');
  });
});
