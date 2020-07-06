"use strict";

window.addEventListener("load", function () {
  new Vue({
    el: "#toTop",
    data() {
      return {
        scrollY: 0,
        show: false
      }
    },
    mounted() {
      window.addEventListener('scroll', this.handleScroll)
    },
    methods: {
      handleScroll() {
        this.scrollY = window.scrollY
      },
      toTop: function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
      },
    },
    computed: {
      isShow() {
        self = this
        if(this.scrollY > 1) {
          return self.show = true
        }
      }
    }
  });
});