/*
 * +===============================================
 * | Author:        Parham Alvani (parham.alvani@gmail.com)
 * |
 * | Creation Date: 22-08-2016
 * |
 * | File Name:     sell.js
 * +===============================================
 */

new Vue({
  el: '#sell-package-div',
  data: {
    n: 0
  },
  methods: {
    addPackage: function () {
      this.n++
    },
    removePackage: function () {
      if (this.n > 0) {
        this.n--
      }
    }
  }
})

new Vue({
  el: '#sell-vhip-div',
  data: {
    n: 0
  },
  methods: {
    addVhip: function () {
      this.n++
    },
    removeVhip: function () {
      if (this.n > 0) {
        this.n--
      }
    }
  }
})
