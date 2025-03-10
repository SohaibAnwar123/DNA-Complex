// Easy Responsive Tabs Plugin
(function ($) {
    $.fn.extend({
        easyResponsiveTabs: function (options) {
            //Set the default values, use comma to separate the settings, example:
            var defaults = {
                type: 'default', //default, vertical, accordion;
                width: 'auto',
                fit: true,
                closed: false,
                activate: function(){}
            }
            //Variables
            var options = $.extend(defaults, options);            
            var opt = options, jtype = opt.type, jfit = opt.fit, jwidth = opt.width, vtabs = 'vertical', accord = 'accordion';

            //Events
            $(this).bind('tabactivate', function(e, currentTab) {
                if(typeof options.activate === 'function') {
                    options.activate.call(currentTab, e)
                }
            });

            //Main function
            this.each(function () {
                var $respTabs = $(this);
                var $respTabsList = $respTabs.find('ul.resp-tabs-list');
                $respTabs.find('ul.resp-tabs-list li').addClass('resp-tab-item');
                $respTabs.css({
                    'display': 'block',
                    'width': jwidth
                });

                $respTabs.find('.resp-tabs-container > div').addClass('resp-tab-content');
                jtab_options();
                //Properties Function
                function jtab_options() {
                    if (jtype == vtabs) {
                        $respTabs.addClass('resp-vtabs');
                    }
                    if (jfit == true) {
                        $respTabs.css({ width: '100%', margin: '0px' });
                    }
                    if (jtype == accord) {
                        $respTabs.addClass('resp-easy-accordion');
                        $respTabs.find('.resp-tabs-list').css('display', 'none');
                    }
                }

                //Assigning the h2 markup to accordion title
                var $tabItemh2;
                $respTabs.find('.resp-tab-content').before("<h2 class='resp-accordion' role='tab'><span class='resp-arrow'></span></h2>");

                var itemCount = 0;
                $respTabs.find('.resp-accordion').each(function () {
                    $tabItemh2 = $(this);
                    var innertext = $respTabs.find('.resp-tab-item:eq(' + itemCount + ')').html();
                    $respTabs.find('.resp-accordion:eq(' + itemCount + ')').append(innertext);
                    $tabItemh2.attr('aria-controls', 'tab_item-' + (itemCount));
                    itemCount++;
                });

                //Assigning the 'aria-controls' to Tab items
                var count = 0,
                    $tabContent;
                $respTabs.find('.resp-tab-item').each(function () {
                    $tabItem = $(this);
                    $tabItem.attr('aria-controls', 'tab_item-' + (count));
                    $tabItem.attr('role', 'tab');

                    //First active tab, keep closed if option = 'closed' or option is 'accordion' and the element is in accordion mode 
                    if(options.closed !== true && !(options.closed === 'accordion' && !$respTabsList.is(':visible')) && !(options.closed === 'tabs' && $respTabsList.is(':visible'))) {                  
                        $respTabs.find('.resp-tab-item').first().addClass('resp-tab-active');
                        $respTabs.find('.resp-accordion').first().addClass('resp-tab-active');
                        $respTabs.find('.resp-tab-content').first().addClass('resp-tab-content-active').attr('style', 'display:block');
                    }

                    //Assigning the 'aria-labelledby' attr to tab-content
                    var tabcount = 0;
                    $respTabs.find('.resp-tab-content').each(function () {
                        $tabContent = $(this);
                        $tabContent.attr('aria-labelledby', 'tab_item-' + (tabcount));
                        tabcount++;
                    });
                    count++;
                });
				
				$(window).resize(function () {
					
					if($('.resp-tabs-list').is(':visible')){
						// desktop					
						
						if($respTabs.find('.resp-tab-item.resp-tab-active').length >1 || $respTabs.find('.resp-tab-content-active').length==0 || $respTabs.find('.resp-tab-item.resp-tab-active').length==0){
							
							$respTabs.find('.resp-tab-active').removeClass('resp-tab-active');
							$respTabs.find('.resp-tab-content-active').removeClass('resp-tab-content-active').removeAttr('style');
							//alert('aa');
							$('.resp-tab-item:first').addClass('resp-tab-active');
							$('.resp-accordion:first').addClass('resp-tab-active');
							$('.resp-tab-content:first').addClass('resp-tab-content-active').attr('style', 'display:block');
						}
					}
					
					
					if($('.resp-accordion').is(':visible')){						
						// mobile					
						if($('.resp-accordion.resp-tab-active').length ==0 ){
							$('.resp-tab-item:first').addClass('resp-tab-active');
							$('.resp-accordion:first').addClass('resp-tab-active');
							$('.resp-tab-content:first').addClass('resp-tab-content-active').attr('style', 'display:block');
						}
					}
					
					
					
				});
				
				
                //Tab Click action function
                $respTabs.find("[role=tab]").each(function () {
                    var $currentTab = $(this);
                    $currentTab.click(function () {
						var pageWidth = $(window).width();
                        var $tabAria = $currentTab.attr('aria-controls');

                        if ($currentTab.hasClass('resp-accordion') && $currentTab.hasClass('resp-tab-active')) {
							if(pageWidth < 786){
								$currentTab.next('.resp-tab-content-active').slideUp('', function () { $(this).removeClass('resp-tab-content-active'); });
								$currentTab.removeClass('resp-tab-active');
							} else {
								$respTabs.find('.resp-tab-content-active').slideUp('', function () { $(this).addClass('resp-accordion-closed'); });
                            	$currentTab.removeClass('resp-tab-active');
							}
                            return false;
                        }
                        if (!$currentTab.hasClass('resp-tab-active') && $currentTab.hasClass('resp-accordion')) {
							if(pageWidth < 786){
								$respTabs.find("[aria-controls=" + $tabAria + "]").addClass('resp-tab-active');
								$respTabs.find('.resp-tab-content[aria-labelledby = ' + $tabAria + ']').slideDown().addClass('resp-tab-content-active');
							} else {
								$respTabs.find('.resp-tab-active').removeClass('resp-tab-active');
								$respTabs.find('.resp-tab-content-active').slideUp().removeClass('resp-tab-content-active resp-accordion-closed');
								$respTabs.find("[aria-controls=" + $tabAria + "]").addClass('resp-tab-active');
	
								$respTabs.find('.resp-tab-content[aria-labelledby = ' + $tabAria + ']').slideDown().addClass('resp-tab-content-active');
							}
                        } else {
							
							if(pageWidth < 786){
								$respTabs.find("[aria-controls=" + $tabAria + "]").addClass('resp-tab-active');
								$respTabs.find('.resp-tab-content[aria-labelledby = ' + $tabAria + ']').addClass('resp-tab-content-active').attr('style', 'display:block');
							} else {
								$respTabs.find('.resp-tab-active').removeClass('resp-tab-active');
								$respTabs.find('.resp-tab-content-active').removeAttr('style').removeClass('resp-tab-content-active').removeClass('resp-accordion-closed');
								$respTabs.find("[aria-controls=" + $tabAria + "]").addClass('resp-tab-active');
								$respTabs.find('.resp-tab-content[aria-labelledby = ' + $tabAria + ']').addClass('resp-tab-content-active').attr('style', 'display:block');
							}
                        }
                        //Trigger tab activation event
                        $currentTab.trigger('tabactivate', $currentTab);
                    });
                    //Window resize function                   
                    $(window).resize(function () {
                        $respTabs.find('.resp-accordion-closed').removeAttr('style');
                    });
					
					
					
                });
				
				if($('.resp-accordion').is(':visible')){
					// mobile					
					if($('.resp-accordion.resp-tab-active').length ==0 ){
						$('.resp-tab-item:first').addClass('resp-tab-active');
						$('.resp-accordion:first').addClass('resp-tab-active');
						$('.resp-tab-content:first').addClass('resp-tab-content-active').attr('style', 'display:block');
					}
				}
				
            });
        }
    });
})(jQuery);
