"use strict";


window.addEventListener("load", function () {
  const spinner = document.getElementById('loading');
  spinner.classList.add('loaded');

  new Vue({
    el: "#header",
    data() {
      return {
        scrollY: 0,
        headerHeight: 92,
        isMenuOpened: false,
      };
    },
    mounted() {
      window.addEventListener('scroll', this.handleScroll)
    },
    methods: {
      handleScroll() {
        this.scrollY = window.scrollY
      },
      toggleMenu() {
        return this.isMenuOpened = !this.isMenuOpened
      },
      toggleSearchField() {
        this.$refs.focusField.focus();
        return this.isSearchFieldOpened = !this.isSearchFieldOpened
      }
    },
    computed: {
      isFixed() {
        if(this.scrollY > this.headerHeight) {
          return '-isFixed'
        }
      },
      isIconShow() {
        if(this.scrollY > this.headerHeight) {
          return '-isIconShow'
        }
      },
      isShow() {
        if(this.scrollY > this.headerHeight) {
          return '-isShow'
        }
      },
      isOpened() {
        if(this.isMenuOpened) {
          return 'isOpened'
        }
      },
      searchFieldOpened() {
        return 'isSearchOpened'
      }
    }
  });
});