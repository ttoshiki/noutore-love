const trigger = new ScrollTrigger.default()
trigger.add('[data-trigger]', {
    once: true,
    offset: {
        element: {
            x: 0,
            y: (trigger, rect, direction) => {
                return 0.2
            }
        },
        viewport: {
            x: 0,
            y: (trigger, frame, direction) => {
                return trigger.visible ? 0 : 0.2
            }
        }
    },
    toggle: {
        class: {
            in: 'active',
            out: ['inActive', 'extraClassToToggleWhenHidden']
        },
        callback: {
            in: null,
            visible: null,
            out: (trigger) => {
                return new Promise((resolve, reject) => {
                    setTimeout(resolve, 10)
                })
            }
        }
    },
})

// fadein
jQuery(function () {
    jQuery(window).scroll(function () {
      jQuery(".fadein").each(function () {
        var elemPos = jQuery(this).offset().top;
        var scroll = jQuery(window).scrollTop();
        var windowHeight = jQuery(window).height();
        if (scroll > elemPos - windowHeight + 100) {
          jQuery(this).addClass("scrollin");
        }
      });
    });
    jQuery(window).scroll();
  });


