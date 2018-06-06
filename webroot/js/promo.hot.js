function pad(pad, str, padLeft) {
    if (typeof str === 'undefined')
        return pad;
    if (padLeft) {
        return (pad + str).slice(-pad.length);
    } else {
        return (str + pad).substring(0, pad.length);
    }
}
jQuery(document).ready(function($){
    var labels = ['Ngày', 'Giờ', 'Phút', 'Giây'],
        //nextYear = (new Date().getFullYear() + 1) + '/01/01',
        nextYear = '2017/12/16',
        template = _.template($('.example_template').html()),
        currDate = '00:00:00:00:00',
        nextDate = '00:00:00:00:00',
        parser = /([0-9]{2})/gi,
        $example = $('#countdown_6186');
    // Parse countdown string to an object
    function strfobj(str) {
        var parsed = str.match(parser),
            obj = {};
        labels.forEach(function(label, i) {
            obj[label] = parsed[i]
        });
        return obj;
    }
    // Return the time components that diffs
    function diff(obj1, obj2) {
        var diff = [];
        labels.forEach(function(key) {
            if (obj1[key] !== obj2[key]) {
                diff.push(key);
            }
        });
        return diff;
    }
    // Build the layout
    var initData = strfobj(currDate);
    labels.forEach(function(label, i) {
        $example.append(template({
            curr: initData[label],
            next: initData[label],
            label: label
        }));
    });
    // Starts the countdown
    $example.countdown(nextYear, function(event) {
        var newDate = event.strftime('%D:%H:%M:%S'),
            data;
        if (newDate !== nextDate) {
            currDate = nextDate;
            nextDate = newDate;
            // Setup the data
            data = {
                'curr': strfobj(currDate),
                'next': strfobj(nextDate)
            };
            // Apply the new values to each node that changed
            diff(data.curr, data.next).forEach(function(label) {
                var selector = '.%s'.replace(/%s/, label),
                    $node = $example.find(selector);
                // Update the node
                $node.removeClass('flip');
                $node.find('.curr').text(data.curr[label]);
                $node.find('.next').text(data.next[label]);
                // Wait for a repaint to then flip
                _.delay(function($node) {
                    $node.addClass('flip');
                }, 50, $node);
            });
        }
    });

    jQuery(window).load(function(){
        jQuery('.promoList.owl-carousel').owlCarousel({
            autoplay: false,
            loop: true,
            margin: 30,
            responsiveClass: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                481: {
                    items: 2,
                    margin: 15
                },
                600: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });

        setInterval(function() {
            $('.promoList .promo .countDown').each(function() {
                var test = moment($(this).data('end')).countdown();
                var dayStr = test.days ? pad('00', test.days, true) + ' ngày ' : '';
                $(this).text(dayStr + pad('00', test.hours, true) + ':' + pad('00', test.minutes, true) + ':' + pad('00', test.seconds, true));
            });
        }, 1000);
    });
});