new Vue({
  el: "#slider",
  components: {
      Hooper: window.Hooper.Hooper,
      Slide: window.Hooper.Slide,
      HooperPagination: window.Hooper.Pagination,
      HooperNavigation: window.Hooper.Navigation
  }
})

new Vue({
  el: "#column-slider",
  components: {
      Hooper: window.Hooper.Hooper,
      Slide: window.Hooper.Slide,
      HooperPagination: window.Hooper.Pagination,
  }
})