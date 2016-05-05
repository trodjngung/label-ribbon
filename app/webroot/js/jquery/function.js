// JavaScript Document

var api;
var w;
$(function(){	
    
    $(".info_slides").each(function(){
        var cur = $(this);
        cur.children('li').children('a').click(function(){
            var cur_li = $(this).closest('li');
            cur_li.toggleClass('active');
            cur_li.children('.text').slideToggle(300);
            cur_li.siblings().removeClass('active').children('.text').slideUp(300);
            return false;
        })
    })
	
    $('.checkbox').each(function(){
        var cur = $(this);
        var label = cur.find('label');
        var checkbox = cur.find('input[type="checkbox"]');
        if(checkbox.attr('checked') || checkbox.attr('checked') == 'checked'){
            label.addClass('active');
        }
        label.on('click', function(){
            label.toggleClass('active');
            checkbox.removeClass('error');
            if(label.hasClass('active')){
                checkbox.attr('checked', true);
            } else {
                checkbox.attr('checked', false);
            }
        })
    })
    $('.contact_form input[type="text"], .contact_form textarea').on('keyup', function(){
        $(this).removeClass('error');
    })
    
    w = $(window).width();
    if($(".fullwidthbanner").length) {
        $('.fullwidthbanner').revolution({
            delay:9000,
            startheight:520,
            startwidth:960,

            navigationType:"none",					//bullet, thumb, none, both		(No Thumbs In FullWidth Version !)
            navigationArrows:"nexttobullets",		//nexttobullets, verticalcentered, none
            navigationStyle:"round",				//round,square,navbar
			

            touchenabled:"on",						// Enable Swipe Function : on/off
            onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

            navOffsetHorizontal:0,
            navOffsetVertical:20,

            stopAtSlide:-1,
            stopAfterLoops:-1,

            fullWidth:"on"							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
        });
    }
	
    
	

    topMenu();
    footer();
    carousels();
    infoDeviders();
	
    if($(".fancy").length){
        $("a.fancy").fancybox({        
            'padding'	: 10,
            'transitionIn'	: 'fade',
            'transitionOut'	: 'fade',
            'speedIn' : 600, 
            'speedOut' : 200, 
            'overlayShow'	: true,
            'hideOnContentClick' : true,
            'hideOnOverlayClick' : true,
            'enableEscapeButton' : true
        });
    }
    if($(".fancy-video").length){
        $("a.fancy-video").click(function() {
            $.fancybox({
                'padding' : 0,
                'autoScale' : false,
                'transitionIn' : 'fade',
                'transitionOut' : 'fade',
                'title' : this.title,
                'href' : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
                'type' : 'swf',
                'swf' : {
                    'wmode' : 'transparent',
                    'allowfullscreen' : 'true'
                }
            });
            return false;
        });	
    }
})
// JavaScript Document
var scrollTop, window_h;

$(function(){
    scrollTop = $(window).scrollTop();
    window_h = $(window).height();
})

$(window).scroll(function(){
    scrollTop = $(window).scrollTop();
    initProgressBarWithImage();
    progress_bars(true);
    trends();
    easePieChart();
    animatedNumbers();
})

$(window).load(function(){
    animatedNumbers();
})

$(window).resize(function(){
    window_h = $(window).height();
    progress_bars(true);
    initProgressBarWithImage();
})

function initProgressBarWithImage(){
    if($('.progress_bars_with_image').length){
        $('.progress_bars_with_image').not('.visible').each(function(){
            var cur = $(this);
            if(scrollTop + window_h > cur.offset().top){
            
                cur.html('');
            
                var number = parseInt(cur.attr('data-number'));
                var value = parseInt(cur.attr('data-value'));
                var color = cur.attr('data-color');
                var icon = cur.attr('data-icon');
                var height = parseInt(cur.attr('data-height'));
                var letter_spacing = cur.attr('data-letterSpacing');
                if(!letter_spacing) letter_spacing = 0;
                
                cur.css({'font-size': height + 'px', 'line-height': height + 'px', 'letter-spacing': letter_spacing + 'em'});
                for(var i = 0; i < number; i++){
                    var _item = $('<div class="item ' + icon + '"></div>');
                    cur.append(_item);
                }
                cur.find('.item').each(function(index, element){
                    if(index < value) {
                        var cur_item = $(this);
                        cur_item.addClass('active')
                        setTimeout(function(){
                            cur_item.css('color', color);
                        }, index*300)
                    }
                })
                
                setTimeout(function(){
                    var item_width = _item.width();
                    var global_width = item_width * number;
                    if(global_width > cur.width()) cur.find('.item.active:last').addClass('break');
                }, 200);
                
                cur.addClass('visible');
                
            } else {
                var _item = cur.find('.item');
                var number = parseInt(cur.attr('data-number'));
                cur.find('.item.break').removeClass('break');
                var item_width = _item.width();
                var global_width = item_width * number;
                if(global_width > cur.width()) cur.find('.item.active:last').addClass('break');
            }
        })
    }
}

function progress_bars(update){
    if($('.progress_bars').length){
        $('.progress_bars').not('.visible').each(function(){
            var cur = $(this);
            
            cur.css('width', '');
            var width = cur.attr('data-width') ? parseInt(cur.attr('data-width')) : cur.width();
            if(cur.hasClass('horizontal') && width > cur.width()) width = cur.width();
            var height = parseInt(cur.attr('data-height'));
            var color = cur.attr('data-color');
            var bg = cur.attr('data-bg');
            var title = cur.attr('data-title');
            var value = parseInt(cur.attr('data-value'))/100;
            if(!value) value = 1;
            
            color = hexDec(color);
            
            cur.css({'width': width, 'height': height})
            if(!bg) bg = '#ccc';
            cur.css({'background-color': bg});
            
            if(!update){
                cur.html('');
                var progress_line = $('<div class="progress_line"></div>').css('background-color', 'rgb(' + color + ')');
            
                if(title && title!='' && title!='false'){
                    var title_block = $('<div class="title_block"></div>');
                     if(title != 'bottom') {
                         title_block.css({
                            'height': height*2 - 2,
                            'width': height*2 - 2,
                            'margin-right': 1 - height
                        }); 
                     }
                    if(cur.hasClass('style1')) {
                        if(title == 'inner'){
                            title_block.css({
                                'border-color': 'rgb(' + color + ')',
                                'color': 'rgb(' + color + ')',
                                'line-height': height*2 - 6 + 'px',
                                'font-size': cur.hasClass('vertical') ? width/1.7 : height/1.7
                            });
                        } else if(title == 'bottom'){
                            title_block.css({
                                'color': 'rgb(' + color + ')',
                                'font-size': cur.hasClass('vertical') ? width*0.35 : height*0.35,
                                'line-height': cur.hasClass('vertical') ? (width*0.35 + 20 + 'px') : (height*0.35 + 20 + 'px')
                            });
                            cur.css('margin-bottom', cur.hasClass('vertical') ? width*0.6 : height*0.6) 
                        }
                    }
                    if(cur.hasClass('style2')) {
                        if(title == 'inner'){
                            title_block.css({
                                'background': 'rgb(' + color + ')',
                                'margin-bottom': 1 - height,
                                'line-height': height*2 - 2 + 'px',
                                'font-size': cur.hasClass('vertical') ? width/1.7 : height/1.7
                            });
                        } else if(title == 'bottom'){
                            title_block.css({
                                'color': 'rgb(' + color + ')',
                                'font-size': cur.hasClass('vertical') ? width*0.35 : height*0.35,
                                'line-height': cur.hasClass('vertical') ? (width*0.35 + 20 + 'px') : (height*0.35 + 20 + 'px')
                            });
                            cur.css('margin-bottom', cur.hasClass('vertical') ? width*0.6 : height*0.6) 
                        }
                    }
                    cur.append(title_block);
                }
                
                cur.append(progress_line);
            } else {
                if(title && title!='' && title!='false'){
                    var title_block = cur.find('.title_block');
                }
                var progress_line = cur.find('.progress_line');
            }
            
            if(cur.hasClass('vertical')){
                var progress_size = height*(1 - value);
                if(scrollTop + window_h > cur.offset().top){
                    progress_line.animate(
                        {'top': progress_size}, 
                        {
                            duration: 2000, 
                            step: function(now, fx) {
                                if(title && title!='' && title!='false'){
                                    var data = Math.round((1 - now/height) * 100);
                                    title_block.html(data + '%');
                                }
                            }   
                        }
                    );
                    if(title && title!='' && title!='false' && title!='bottom'){
                        title_block.animate({'top': progress_size}, 2000);
                    }
                    cur.addClass('visible');
                }
            } else {
                var progress_size = width*(1 - value);
                if(scrollTop + window_h > cur.offset().top){
                    progress_line.animate(
                        {'right': progress_size}, 
                        {
                            duration: 2000, 
                            step: function(now, fx) {
                                if(title && title!='' && title!='false'){
                                    var data = Math.round((1 - now/width) * 100);
                                    title_block.html(data + '%');
                                }
                            }   
                        }
                    );
                    if(title && title!='' && title!='false' && title!='bottom'){
                        title_block.animate({'right': progress_size}, 2000);
                    }
                    
                    cur.addClass('visible');
                }
            }
        })
    }   
}

function easePieChart(){
    if($('.easy-pie-chart').length){
        $('.easy-pie-chart').not('.visible').each(function(){
            var cur = $(this);
            
            if(scrollTop + window_h > cur.offset().top){
                            
                cur.html('<span></span>');          
                            
                var size = cur.attr('data-size');
                var trackColor = cur.attr('data-trackColor');
                var barColor = cur.attr('data-color');
                var bgColor = cur.attr('data-bgColor');
                var lineWidth = cur.attr('data-lineWidth');
                var lineCap = cur.attr('data-cap');
                                
                if(!bgColor) bgColor = '#cccccc';
                
                cur.easyPieChart({
                    animate: 2000,
                    scaleColor: false,
                    lineWidth: lineWidth,
                    lineCap: lineCap,
                    size: size,
                    trackColor: bgColor,
                    barColor: barColor
                });
                cur.addClass('visible');
            }
        });
    }
}





function processBox(){
    if($(".styled_list").length){
        $('.styled_list').each(function(){
            var cur = $(this);
            var colors = cur.attr('data-color');
            var type = cur.attr('data-type');
            
            if(colors){
                colors = colors.split(',');
            } else {
                colors = ['#ffffff']
            }
            cur.children('li').each(function(index, element){
                if($(this).find('.text').length) {
                    var html = $(this).find('.text').html();
                } else {
                    var html = $(this).html();
                }
                $(this).html('');
                var text_block = $('<div class="text">' + html + '</div>');
                
                if(type == 'process_box'){
                    var num = index + 1 + '';
                    if(num.length < 2) num = '0' + num;
                    var num_background = colors[index%colors.length];
                    var num_block = $('<div class="num" style="background-color: ' + num_background + '">' + num + '</div>');
                } else if(type == 'large_numbers'){
                    var num = index + 1 + '.';
                    var num_color = colors[index%colors.length];
                    var num_block = $('<div class="num" style="color: ' + num_color + '">' + num + '</div>');
                }
                
                $(this).append(num_block);
                $(this).append(text_block);
            })
        })
    }   
}

function infoDeviders(){
    if($(".info_divider").length){
        $(".info_divider").each(function(){
            var cur = $(this);
            var width = cur.attr('data-width');
            var height = cur.attr('data-height');
            if(width) cur.css('width', width);
            if(height) cur.css('height', height);
            
            var label = $('<i style=""></i>');
            if(cur.hasClass('vertical')) {
                if(width) var label_size = width;
            } else {
                if(height) var label_size = height;
            }
            if(label_size) label.css({
                'width': label_size,
                'height': label_size,
                'line-height': label_size + 'px'
            })
            cur.append(label);
        })
    }   
}

function animatedNumbers(){
    if($('.animateNum').length){
        $('.animateNum').not('.visible').each(function(){
            var cur = $(this);
            
            var num = parseInt(cur.data('num'));
            if(num) {
                var suffix = cur.data('suffix');
                var speed = cur.data('speed');
                if(!speed) speed = 1000;
                var minAnimateDelay = 40;
                
                var curNum = 0;
                if(scrollTop + window_h > cur.offset().top){
                    var intSpeed = Math.ceil(speed/num);
                    if(intSpeed < minAnimateDelay) intSpeed = minAnimateDelay;
                    var step = num/speed * intSpeed;
                    
                    var t = setInterval(function(){
                        if(Math.round(curNum) == num) {
                            clearInterval(t);
                            return false;
                        } 
                        curNum = curNum + step;
                        suffix ? cur.html(Math.round(curNum) + suffix) : cur.html(Math.round(curNum));
                        
                    }, intSpeed)
                    cur.addClass('visible');
                } else {
                    suffix ? cur.html(curNum + suffix) : cur.html(curNum);
                }
            }
        })
    }
}

function trends(){
    if($('.trend').length){
        $('.trend').each(function(){
            var cur = $(this);
            
            var padding_bottom = 100;
            
            var height = cur.outerHeight() - padding_bottom;
            var width = cur.width();
            
            var color = cur.attr('data-color');
            var value = parseInt(cur.attr('data-value'));
            var trend = cur.attr('data-trend');
            var name = cur.attr('data-name');
            
            var arrow_w = height*0.356;
            var border_w_bottom = height*0.48;
            
            var arrow = $("<div class='arrow'></div>");
            var arrow_i = $("<i />");
            var value_block = $("<div class='value'></div>");
            var name_block = $("<div class='name'>" + name + "</div>");
            
            if(scrollTop + window_h > cur.offset().top && !cur.hasClass('visible')){
                value_block.css({
                    'color': color
                })
                name_block.css({
                    'color': color
                })
                
                arrow.append(arrow_i);
                cur.append(arrow);
                cur.append(value_block);
                cur.append(name_block);
                
                arrow.css({
                    'width': arrow_w,
                    'margin-left' : '-' + arrow_w/2 + 'px',
                    'background': color,
                    'height': height*0.52
                })
                arrow_i.css({
                    'border-width': arrow_w + 'px',
                    'margin-left': -arrow_w + 'px'
                })
                
                if(trend == 'up'){
                    arrow.css({
                        'bottom': -height
                    })
                    arrow_i.css({
                        'border-bottom-color': color,
                        'border-bottom-width' : border_w_bottom + 'px',
                        'bottom': '100%'
                    })
                    arrow.animate({'bottom': padding_bottom}, {
                        duration: 2000,
                        step: function(now, fx) {
                            var data = Math.round((now + height)/(height + padding_bottom) * value);
                            value_block.html(data + '%');
                        }                   
                    })
                } else if(trend == 'down'){
                    arrow.css({
                        'top': -height  
                    })
                    arrow_i.css({
                        'border-top-color': color,
                        'border-top-width' : border_w_bottom + 'px',
                        'top': '100%'
                    })
                    arrow.animate({'top': 0}, {
                        duration: 2000,
                        step: function(now, fx) {
                            var data = Math.round((1 - now/(-height)) * value);
                            value_block.html(data + '%');
                        }                       
                    })
                }
                cur.addClass('visible');
            }
            
        })
    }   
}


function hexDec(color){
    var m=color.slice(1).match(/.{2}/g);
     
    m[0]=parseInt(m[0], 16);
    m[1]=parseInt(m[1], 16);
    m[2]=parseInt(m[2], 16);
     
    return m[0] + ', ' + m[1] + ', ' + m[2];
    
};
// JavaScript Document
var scrollTop, window_h;

$(function(){
    scrollTop = $(window).scrollTop();
    window_h = $(window).height();
})

$(window).scroll(function(){
    scrollTop = $(window).scrollTop();
    initProgressBarWithImage();
    progress_bars(true);
    trends();
    easePieChart();
    animatedNumbers();
})

$(window).load(function(){
    animatedNumbers();
})

$(window).resize(function(){
    window_h = $(window).height();
    progress_bars(true);
    initProgressBarWithImage();
})

function initProgressBarWithImage(){
    if($('.progress_bars_with_image').length){
        $('.progress_bars_with_image').not('.visible').each(function(){
            var cur = $(this);
            if(scrollTop + window_h > cur.offset().top){
            
                cur.html('');
            
                var number = parseInt(cur.attr('data-number'));
                var value = parseInt(cur.attr('data-value'));
                var color = cur.attr('data-color');
                var icon = cur.attr('data-icon');
                var height = parseInt(cur.attr('data-height'));
                var letter_spacing = cur.attr('data-letterSpacing');
                if(!letter_spacing) letter_spacing = 0;
                
                cur.css({'font-size': height + 'px', 'line-height': height + 'px', 'letter-spacing': letter_spacing + 'em'});
                for(var i = 0; i < number; i++){
                    var _item = $('<div class="item ' + icon + '"></div>');
                    cur.append(_item);
                }
                cur.find('.item').each(function(index, element){
                    if(index < value) {
                        var cur_item = $(this);
                        cur_item.addClass('active')
                        setTimeout(function(){
                            cur_item.css('color', color);
                        }, index*300)
                    }
                })
                
                setTimeout(function(){
                    var item_width = _item.width();
                    var global_width = item_width * number;
                    if(global_width > cur.width()) cur.find('.item.active:last').addClass('break');
                }, 200);
                
                cur.addClass('visible');
                
            } else {
                var _item = cur.find('.item');
                var number = parseInt(cur.attr('data-number'));
                cur.find('.item.break').removeClass('break');
                var item_width = _item.width();
                var global_width = item_width * number;
                if(global_width > cur.width()) cur.find('.item.active:last').addClass('break');
            }
        })
    }
}

function progress_bars(update){
    if($('.progress_bars').length){
        $('.progress_bars').not('.visible').each(function(){
            var cur = $(this);
            
            cur.css('width', '');
            var width = cur.attr('data-width') ? parseInt(cur.attr('data-width')) : cur.width();
            if(cur.hasClass('horizontal') && width > cur.width()) width = cur.width();
            var height = parseInt(cur.attr('data-height'));
            var color = cur.attr('data-color');
            var bg = cur.attr('data-bg');
            var title = cur.attr('data-title');
            var value = parseInt(cur.attr('data-value'))/100;
            if(!value) value = 1;
            
            color = hexDec(color);
            
            cur.css({'width': width, 'height': height})
            if(!bg) bg = '#ccc';
            cur.css({'background-color': bg});
            
            if(!update){
                cur.html('');
                var progress_line = $('<div class="progress_line"></div>').css('background-color', 'rgb(' + color + ')');
            
                if(title && title!='' && title!='false'){
                    var title_block = $('<div class="title_block"></div>');
                     if(title != 'bottom') {
                         title_block.css({
                            'height': height*2 - 2,
                            'width': height*2 - 2,
                            'margin-right': 1 - height
                        }); 
                     }
                    if(cur.hasClass('style1')) {
                        if(title == 'inner'){
                            title_block.css({
                                'border-color': 'rgb(' + color + ')',
                                'color': 'rgb(' + color + ')',
                                'line-height': height*2 - 6 + 'px',
                                'font-size': cur.hasClass('vertical') ? width/1.7 : height/1.7
                            });
                        } else if(title == 'bottom'){
                            title_block.css({
                                'color': 'rgb(' + color + ')',
                                'font-size': cur.hasClass('vertical') ? width*0.35 : height*0.35,
                                'line-height': cur.hasClass('vertical') ? (width*0.35 + 20 + 'px') : (height*0.35 + 20 + 'px')
                            });
                            cur.css('margin-bottom', cur.hasClass('vertical') ? width*0.6 : height*0.6) 
                        }
                    }
                    if(cur.hasClass('style2')) {
                        if(title == 'inner'){
                            title_block.css({
                                'background': 'rgb(' + color + ')',
                                'margin-bottom': 1 - height,
                                'line-height': height*2 - 2 + 'px',
                                'font-size': cur.hasClass('vertical') ? width/1.7 : height/1.7
                            });
                        } else if(title == 'bottom'){
                            title_block.css({
                                'color': 'rgb(' + color + ')',
                                'font-size': cur.hasClass('vertical') ? width*0.35 : height*0.35,
                                'line-height': cur.hasClass('vertical') ? (width*0.35 + 20 + 'px') : (height*0.35 + 20 + 'px')
                            });
                            cur.css('margin-bottom', cur.hasClass('vertical') ? width*0.6 : height*0.6) 
                        }
                    }
                    cur.append(title_block);
                }
                
                cur.append(progress_line);
            } else {
                if(title && title!='' && title!='false'){
                    var title_block = cur.find('.title_block');
                }
                var progress_line = cur.find('.progress_line');
            }
            
            if(cur.hasClass('vertical')){
                var progress_size = height*(1 - value);
                if(scrollTop + window_h > cur.offset().top){
                    progress_line.animate(
                        {'top': progress_size}, 
                        {
                            duration: 2000, 
                            step: function(now, fx) {
                                if(title && title!='' && title!='false'){
                                    var data = Math.round((1 - now/height) * 100);
                                    title_block.html(data + '%');
                                }
                            }   
                        }
                    );
                    if(title && title!='' && title!='false' && title!='bottom'){
                        title_block.animate({'top': progress_size}, 2000);
                    }
                    cur.addClass('visible');
                }
            } else {
                var progress_size = width*(1 - value);
                if(scrollTop + window_h > cur.offset().top){
                    progress_line.animate(
                        {'right': progress_size}, 
                        {
                            duration: 2000, 
                            step: function(now, fx) {
                                if(title && title!='' && title!='false'){
                                    var data = Math.round((1 - now/width) * 100);
                                    title_block.html(data + '%');
                                }
                            }   
                        }
                    );
                    if(title && title!='' && title!='false' && title!='bottom'){
                        title_block.animate({'right': progress_size}, 2000);
                    }
                    
                    cur.addClass('visible');
                }
            }
        })
    }   
}

function easePieChart(){
    if($('.easy-pie-chart').length){
        $('.easy-pie-chart').not('.visible').each(function(){
            var cur = $(this);
            
            if(scrollTop + window_h > cur.offset().top){
                            
                cur.html('<span></span>');          
                            
                var size = cur.attr('data-size');
                var trackColor = cur.attr('data-trackColor');
                var barColor = cur.attr('data-color');
                var bgColor = cur.attr('data-bgColor');
                var lineWidth = cur.attr('data-lineWidth');
                var lineCap = cur.attr('data-cap');
                                
                if(!bgColor) bgColor = '#cccccc';
                
                cur.easyPieChart({
                    animate: 2000,
                    scaleColor: false,
                    lineWidth: lineWidth,
                    lineCap: lineCap,
                    size: size,
                    trackColor: bgColor,
                    barColor: barColor
                });
                cur.addClass('visible');
            }
        });
    }
}





function processBox(){
    if($(".styled_list").length){
        $('.styled_list').each(function(){
            var cur = $(this);
            var colors = cur.attr('data-color');
            var type = cur.attr('data-type');
            
            if(colors){
                colors = colors.split(',');
            } else {
                colors = ['#ffffff']
            }
            cur.children('li').each(function(index, element){
                if($(this).find('.text').length) {
                    var html = $(this).find('.text').html();
                } else {
                    var html = $(this).html();
                }
                $(this).html('');
                var text_block = $('<div class="text">' + html + '</div>');
                
                if(type == 'process_box'){
                    var num = index + 1 + '';
                    if(num.length < 2) num = '0' + num;
                    var num_background = colors[index%colors.length];
                    var num_block = $('<div class="num" style="background-color: ' + num_background + '">' + num + '</div>');
                } else if(type == 'large_numbers'){
                    var num = index + 1 + '.';
                    var num_color = colors[index%colors.length];
                    var num_block = $('<div class="num" style="color: ' + num_color + '">' + num + '</div>');
                }
                
                $(this).append(num_block);
                $(this).append(text_block);
            })
        })
    }   
}

function infoDeviders(){
    if($(".info_divider").length){
        $(".info_divider").each(function(){
            var cur = $(this);
            var width = cur.attr('data-width');
            var height = cur.attr('data-height');
            if(width) cur.css('width', width);
            if(height) cur.css('height', height);
            
            var label = $('<i style=""></i>');
            if(cur.hasClass('vertical')) {
                if(width) var label_size = width;
            } else {
                if(height) var label_size = height;
            }
            if(label_size) label.css({
                'width': label_size,
                'height': label_size,
                'line-height': label_size + 'px'
            })
            cur.append(label);
        })
    }   
}

function animatedNumbers(){
    if($('.animateNum').length){
        $('.animateNum').not('.visible').each(function(){
            var cur = $(this);
            
            var num = parseInt(cur.data('num'));
            if(num) {
                var suffix = cur.data('suffix');
                var speed = cur.data('speed');
                if(!speed) speed = 1000;
                var minAnimateDelay = 40;
                
                var curNum = 0;
                if(scrollTop + window_h > cur.offset().top){
                    var intSpeed = Math.ceil(speed/num);
                    if(intSpeed < minAnimateDelay) intSpeed = minAnimateDelay;
                    var step = num/speed * intSpeed;
                    
                    var t = setInterval(function(){
                        if(Math.round(curNum) == num) {
                            clearInterval(t);
                            return false;
                        } 
                        curNum = curNum + step;
                        suffix ? cur.html(Math.round(curNum) + suffix) : cur.html(Math.round(curNum));
                        
                    }, intSpeed)
                    cur.addClass('visible');
                } else {
                    suffix ? cur.html(curNum + suffix) : cur.html(curNum);
                }
            }
        })
    }
}

function trends(){
    if($('.trend').length){
        $('.trend').each(function(){
            var cur = $(this);
            
            var padding_bottom = 100;
            
            var height = cur.outerHeight() - padding_bottom;
            var width = cur.width();
            
            var color = cur.attr('data-color');
            var value = parseInt(cur.attr('data-value'));
            var trend = cur.attr('data-trend');
            var name = cur.attr('data-name');
            
            var arrow_w = height*0.356;
            var border_w_bottom = height*0.48;
            
            var arrow = $("<div class='arrow'></div>");
            var arrow_i = $("<i />");
            var value_block = $("<div class='value'></div>");
            var name_block = $("<div class='name'>" + name + "</div>");
            
            if(scrollTop + window_h > cur.offset().top && !cur.hasClass('visible')){
                value_block.css({
                    'color': color
                })
                name_block.css({
                    'color': color
                })
                
                arrow.append(arrow_i);
                cur.append(arrow);
                cur.append(value_block);
                cur.append(name_block);
                
                arrow.css({
                    'width': arrow_w,
                    'margin-left' : '-' + arrow_w/2 + 'px',
                    'background': color,
                    'height': height*0.52
                })
                arrow_i.css({
                    'border-width': arrow_w + 'px',
                    'margin-left': -arrow_w + 'px'
                })
                
                if(trend == 'up'){
                    arrow.css({
                        'bottom': -height
                    })
                    arrow_i.css({
                        'border-bottom-color': color,
                        'border-bottom-width' : border_w_bottom + 'px',
                        'bottom': '100%'
                    })
                    arrow.animate({'bottom': padding_bottom}, {
                        duration: 2000,
                        step: function(now, fx) {
                            var data = Math.round((now + height)/(height + padding_bottom) * value);
                            value_block.html(data + '%');
                        }                   
                    })
                } else if(trend == 'down'){
                    arrow.css({
                        'top': -height  
                    })
                    arrow_i.css({
                        'border-top-color': color,
                        'border-top-width' : border_w_bottom + 'px',
                        'top': '100%'
                    })
                    arrow.animate({'top': 0}, {
                        duration: 2000,
                        step: function(now, fx) {
                            var data = Math.round((1 - now/(-height)) * value);
                            value_block.html(data + '%');
                        }                       
                    })
                }
                cur.addClass('visible');
            }
            
        })
    }   
}


function hexDec(color){
    var m=color.slice(1).match(/.{2}/g);
     
    m[0]=parseInt(m[0], 16);
    m[1]=parseInt(m[1], 16);
    m[2]=parseInt(m[2], 16);
     
    return m[0] + ', ' + m[1] + ', ' + m[2];
    
};

$(window).resize(function(){
    w = $(window).width();
    footer();
    carousels();
    infographBottom();	
    fixedHeader();
    blockPosition($('#main_advert .slide img'));
})

$(window).load(function(){
    infographBottom();
    blockPosition($('#main_advert .slide img'));
    $('body').css('visibility', 'visible');
    processBox();
    initProgressBarWithImage();
    progress_bars();
    easePieChart();
    trends();
    var hash = location.hash;
    if(hash) {
        $("#top_menu li a[href='" + hash + "']").click();
    }
    fixedHeader();
})


function fixedHeader(){
    if(w > 979){
        var h_bar = $('.notify-bar').outerHeight();
        var h_header = $('#header .inner').height();
        $('#header').css('height', h_header);

    } else {
        $('#header').removeAttr('style');
    }
    $(".notify-close").click(function(){
        var speed = 300;
        $(".notify-bar").slideUp(speed);
        if(w > 979) $('#header').animate({
            'height': '-=' + h_bar + 'px'
        }, speed);
        return false;
    }); 
}

function topMenu(){
    var scrollByClick = false;
    $("#top_menu li a").click(function(){
        var href = $(this).attr('href');
        if(href.search('_anchor') != -1){
            href = href.replace('_anchor', '_marker');
            if($(href).length){
                scrollByClick = true;
                var position = $(href).offset().top;
                $('body, html').animate({
                    scrollTop: position - 120
                }, 500);
                setTimeout(function(){
                    scrollByClick = false;
                }, 500);
                return false;
            }
        }
    });

    $("#top_menu select").change(function(){
        var href = $(this).val();
        if(href.search('_anchor') != -1){
            href = href.replace('_anchor', '_marker');
            scrollByClick = true;
            var position = $(href).offset().top;
            $('body, html').animate({
                scrollTop: position
            }, 500);
            setTimeout(function(){
                scrollByClick = false;
            }, 500);
        }
    });
    var markers	= $('[id*="_marker"]');
    var top = $(window).scrollTop();

    var setActive = function(){
        markers.each(function(){
            var name_marker = '#' + $(this).attr('id');
            if(!scrollByClick) {
                var position = $(this).offset().top;
                var name_anchor = name_marker.replace('_marker', '_anchor');
                if(top >= position - $("#header .inner").outerHeight()){
                    $("#top_menu li a[href='" + name_anchor + "']").closest('li').addClass('active').siblings().removeClass('active');
                    $("#top_menu select option[value='" + name_anchor + "']").attr('selected', true).siblings().attr('selected', false);
                }
            }
        })
    }

    setActive();

    $(window).scroll(function(){
        top = $(window).scrollTop();
        if(top > 15 && w > 768) {
            $("#header").addClass('fixed');
        } else {
            $("#header").removeClass('fixed');
        }
        setActive();

    })
	
}



function footer(){
    var h = $("#footer").height();
    //$("#footer").css('margin-top', -(h + parseInt($("#container").css('padding-bottom'))));
    $("#empty").css('height', h - 19);
}

var carousel_enable;
function carousels(){
	
    $(".carousel ul").trigger("destroy", true);
    if(w > 768) {
        $(".carousel").each(function(){
            var ul = $(this).find('ul');
            var prev_arr = $(this).find('.left_arr');
            var next_arr = $(this).find('.right_arr');
			
            ul.carouFredSel({
                width	: "100%",
                align: 'left',
                prev: {
                    button: prev_arr
                },
                next: {
                    button: next_arr
                },
                auto: false
            });
			
        })	
    }
	
}

function infographBottom(){
    var h = 0;
    $('.infograph .desc').each(function(){
        var height = $(this).outerHeight();
        if(height > h) h = height;
    })
    if(h < 153) h = 153;
    $('#wrapper .infograph > sup').css('height', h);		
}

function blockPosition(obj, relative){
    obj.each(function(index, element) {
        var w = $(this).width();
        var h = $(this).height();
		
        var d = w/h;
        if(relative) {
            var parent = relative;
        } else {
            var parent = $(this).parent();
        }
		
        var border_top_p = parseInt(parent.css('border-top')) ? parseInt(parent.css('border-top')) : 0;
        var border_bottom_p = parseInt(parent.css('border-bottom')) ? parseInt(parent.css('border-bottom')) : 0;
        var border_left_p = parseInt(parent.css('border-left')) ? parseInt(parent.css('border-left')) : 0;
        var border_right_p = parseInt(parent.css('border-right')) ? parseInt(parent.css('border-right')) : 0;
		
        var w_p = parent.outerWidth() - border_left_p - border_right_p;
        var h_p = parent.outerHeight() - border_top_p - border_bottom_p;
		
        var d_p = w_p/h_p;
		
        if(d > d_p) {
            h = h_p;
            w = h*d;
            m = "0 0 0 " + (-w/2) + "px";
            l = "50%";
            t = 0;
        } else {
            w = w_p;
            h = w/d;	
            m = -h/2 + "px 0 0 0";
            t = "50%";
            l = 0;
        }
        var position = $(this).css('position');
        if(position != 'relative' && position != 'absolute') position = 'absolute';
        $(this).css({
            "width": w + "px", 
            "height" : h + "px", 
            "margin": m, 
            "top": t, 
            "left": l, 
            "position": position
        });
    });	
}

$(document).ready(function(){ 
 
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    }); 
 
    $('.scrollup').click(function(){
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
        
    $(document).ready(function() {
        $("#clients-slider, #results-slider, #awards-slider").owlCarousel({
            navigation : false, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            pagination: true
        }); 
    });
 
    $( "#item1" ).click(function() {
        $( "#property-item1" ).removeClass("property-hidden")
    });
    $( "#item2" ).click(function() {
        $( "#property-item2" ).removeClass("property-hidden")
    });
    $( "#item3" ).click(function() {
        $( "#property-item3" ).removeClass("property-hidden")
    });
    $( "#item4" ).click(function() {
        $( "#property-item4" ).removeClass("property-hidden")
    });
    $( "#item5" ).click(function() {
        $( "#property-item5" ).removeClass("property-hidden")
    });
    $( "#item6" ).click(function() {
        $( "#property-item6" ).removeClass("property-hidden")
    });
    
    $(".close-details").click(function() {
        $(".property-item").slideUp(500);
    });
    
    $('.property-link').on('click', function(){
		moreBlock = $(this).closest('.more');
		moreBlock.addClass('load');
        var id = $(this).attr('id').replace('item', '');
		var block = $('#property-item' + id);
		if($('.property-item:visible').length && !$('.property-item:visible').is(block)){
			$('.property-item').hide();
			block.show();
			var time = 0;
		} else {
			var time = 500;
			block.slideDown(time);
		}
		setTimeout(function(){
			var topP = block.offset().top - 20;
			if(window.innerWidth > 979) topP -= $('#header').height();
			var topNow = $(window).scrollTop();
			var speed = (topP - topNow)*0.8;
			if(!block.hasClass('init')){
				var slider = block.find('.royalSlider');
				var map = block.find('.map');
				var tabsBlock = block.find('.tabs');
				map_initialize(map);
				tabs(tabsBlock);
				rsSlider(slider);
				var t = setInterval(function(){
					if(slider.hasClass('rendered')) {
						block.addClass('init');
						clearInterval(t);
						$('html, body').animate({scrollTop: topP}, speed);
						moreBlock.removeClass('load');
					}
				}, 100)
				
			} else {
				$('html, body').animate({scrollTop: topP}, speed);
				moreBlock.removeClass('load');
			}
		
			
		}, time)
		
        return false;
    })
 
});
function tabs(tabsBlock){
    tabsBlock.each(function(index, element) {
        var curObject = $(this);
        if(!curObject.children("li.active").length) curObject.children("li:first").addClass("active").siblings("li").removeClass("active");
        curObject.siblings(".tabs_blocks").children("div").eq(curObject.children("li.active").index()).css('height', 'auto').siblings().css('height', '0');
        curObject.children("li").each(function(index, element) {
            $(this).children("a").bind("click", function(){
                $(this).parent().addClass("active").siblings("li").removeClass("active");
                curObject.siblings(".tabs_blocks").children("div").eq(curObject.children("li.active").index()).css('height', 'auto').siblings(":visible").css('height', '0');
                return false;
            })
        });
    });
}

function rsSlider(slider){
	slider.royalSlider({
        fullscreen: {
            enabled: false,
            nativeFS: true
        },
        controlNavigation: 'thumbnails',
        autoScaleSlider: true, 
        autoScaleSliderWidth: 960,     
        autoScaleSliderHeight: 850,
        loop: false,
        imageScaleMode: 'fit',
        navigateByClick: true,
        numImagesToPreload:2,
        arrowsNav:true,
        arrowsNavAutoHide: true,
        arrowsNavHideOnTouch: true,
        keyboardNavEnabled: true,
        fadeinLoadedSlide: true,
        globalCaption: false,
        globalCaptionInside: false,
        thumbs: {
            appendSpan: true,
            firstMargin: true
        }
    });
	slider.addClass('rendered');
		
}

map();
function map(){
    google.load('maps', '3', {
        other_params: 'sensor=false'
    });
}

function map_initialize(mapBlock) {
	mapBlock.each(function(){
		var currMap = $(this);
		var coordinates = $(this).data('coordinates').split(',');
		var title = $(this).data('title');
		var myMarker = new google.maps.LatLng(coordinates[0],coordinates[1]);
		
		map = new google.maps.Map( this, {
			zoom: 14,
			scrollwheel: false,
			center: myMarker,
			disableDefaultUI: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		var marker1 = new google.maps.Marker({
			position: myMarker,
			map: map,
			title: title,
			icon: 'img/map_marker2.png'
		});
		google.maps.event.addDomListener(window, 'resize', function() {
			map.setCenter(myMarker);
		});
	})
		
    
}