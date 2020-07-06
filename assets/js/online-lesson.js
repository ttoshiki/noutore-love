"use strict";

new Vue({
  el: "#online-lesson__termsAgreeWrapper",
  data() {
    return {
      isChecked: false,
      hasError: false
    }
  },
  methods: {
    consentCheck(event) {
      if (!this.isChecked) {
        event.preventDefault();
        this.hasError = true
      }
    },
    toggleChecked() {
      this.isChecked = !this.isChecked
    }
  }
})

Vue.component('open-modal',{
  template : `
    <div id="overlay" v-on:click="clickEvent">
        <div id="content" class="online-lesson-movie">
          <div @click="clickEvent" class="online-lesson-movie__closeButton"></div>
          <slot></slot>
        </div>
    </div>
    `,
  methods :{
    clickEvent: function(){
      this.$emit('from-child')
     }
  }
})

new Vue({
  el: '#online-lesson__modal',
  data: {
    showContent: false,
  },
  methods:{
    openModal: function() {
      let modal = document.getElementById('overlay')
      bodyScrollLock.disableBodyScroll(modal);
      this.showContent = true
    },
    closeModal: function() {
      let modal = document.getElementById('overlay')
      bodyScrollLock.enableBodyScroll(modal);
      this.showContent = false
    },
  }
})