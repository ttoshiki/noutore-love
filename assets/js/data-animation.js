const tm = new TimelineMax();

const transitionY = 0

gsap.registerPlugin(ScrollTrigger);

gsap.timeline({
  defaults: { ease: "power2.out", duration: 0.5 },
  scrollTrigger: {
    trigger: ".data__subheading img",
    start: "top 50%",
  },
}).to(".data__subheading img", {
  opacity: 1,
  y: transitionY,
})

gsap.timeline({
  defaults: { ease: "power2.out", duration: 0.5 },
  scrollTrigger: {
    trigger: ".data__peopleHeadings",
    start: "top 50%",
  },
}).to(".data__peopleHeadings", {
  opacity: 1,
  y: transitionY,
})

gsap.timeline({
  defaults: { ease: "power2.out", duration: 0.5 },
  scrollTrigger: {
    trigger: ".data__peopleSubHeadingWrapper",
    start: "top 50%",
  },
}).to(".data__peopleSubHeadingWrapper", {
  opacity: 1,
  y: transitionY,
})

const ua = navigator.userAgent;
if ((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)) {
  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__peopleItem.-first",
      start: "top 50%",
    },
  }).to(".data__peopleItem.-first", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__peopleItem.-second",
      start: "top 50%",
    },
  }).to(".data__peopleItem.-second", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__peopleItem.-third",
      start: "top 50%",
    },
  }).to(".data__peopleItem.-third", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__peopleItem.-fourth",
      start: "top 50%",
    },
  }).to(".data__peopleItem.-fourth", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__peopleItem.-fifth",
      start: "top 50%",
    },
  }).to(".data__peopleItem.-fifth", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__peopleItem.-sixth",
      start: "top 50%",
    },
  }).to(".data__peopleItem.-sixth", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__peopleItem.-seventh",
      start: "top 50%",
    },
  }).to(".data__peopleItem.-seventh", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__gypsyItem.-first",
      start: "top 50%",
    },
  }).to(".data__gypsyItem.-first", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__gypsyItem.-second",
      start: "top 50%",
    },
  }).to(".data__gypsyItem.-second", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__gypsyItem.-third",
      start: "top 50%",
    },
  }).to(".data__gypsyItem.-third", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__gypsyItem.-fourth",
      start: "top 50%",
    },
  }).to(".data__gypsyItem.-fourth", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__gypsyItem.-fifth",
      start: "top 50%",
    },
  }).to(".data__gypsyItem.-fifth", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__gypsyItem.-fifth",
      start: "top 50%",
    },
  }).from(".data__questionGypsy6.arrow", {
    y: transitionY,
  }).to(".data__gypsyPicture", {
    opacity: 1,
    y: transitionY,
  }).to(".data__questionGypsy6.arrow", {
    opacity: 1,
    y: 0,
  }).to(".data__gypsyItem.-sixth", {
    opacity: 1,
    y: transitionY,
  })



} else {
  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__peopleItem.-first",
      start: "top 50%",
    },
  }).to(".data__peopleItem.-first", {
    opacity: 1,
    y: transitionY,
  }).to(".data__peopleItem.-second", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__peopleItem.-third",
      start: "top 50%",
    },
  }).to(".data__peopleItem.-third", {
    opacity: 1,
    y: transitionY,
  }).to(".data__peopleItem.-fourth", {
    opacity: 1,
    y: transitionY,
  }).to(".data__peopleItem.-fifth", {
    opacity: 1,
    y: transitionY,
  }).to(".data__peopleItem.-sixth", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__peopleItem.-seventh",
      start: "top 50%",
    },
  }).to(".data__peopleItem.-seventh", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__gypsyItem.-first",
      start: "top 50%",
    },
  }).to(".data__gypsyItem.-first", {
    opacity: 1,
    y: transitionY,
  }).to(".data__gypsyItem.-second", {
    opacity: 1,
    y: transitionY,
  }).to(".data__gypsyItem.-third", {
    opacity: 1,
    y: transitionY,
  }).to(".data__gypsyItem.-fourth", {
    opacity: 1,
    y: transitionY,
  })

  gsap.timeline({
    defaults: { ease: "power2.out", duration: 0.5 },
    scrollTrigger: {
      trigger: ".data__gypsyItem.-fifth",
      start: "top 50%",
    },
  }).from(".data__questionGypsy6.arrow", {
    y: "-50%" - transitionY,
  }).to(".data__gypsyPicture", {
    opacity: 1,
    y: transitionY,
  }).to(".data__questionGypsy6.arrow", {
    opacity: 1,
    y: "-50%",
  }).to(".data__gypsyItem.-sixth", {
    opacity: 1,
    y: transitionY,
  })
}

gsap.timeline({
  defaults: { ease: "back.out", duration: 0.3 },
  scrollTrigger: {
    trigger: ".data__imageSpeechBubble.-first",
    start: "top 50%",
  },
}).to(".data__imageSpeechBubble.-first", {
  scale: 1
}).to(".data__imageSpeechBubble.-second", {
  scale: 1
}).to(".data__imageSpeechBubble.-third", {
  scale: 1
}).to(".data__imageSpeechBubble.-fourth", {
  scale: 1
}).to(".data__imageSpeechBubble.-fifth", {
  scale: 1
}).to(".data__imageSpeechBubble.-sixth", {
  scale: 1
}).to(".data__imageSpeechBubble.-seventh", {
  scale: 1
}).to(".data__imageSpeechBubble.-eighth", {
  scale: 1
})