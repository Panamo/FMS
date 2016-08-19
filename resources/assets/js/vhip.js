/*
 * +===============================================
 * | Author:        Parham Alvani (parham.alvani@gmail.com)
 * |
 * | Creation Date: 11-08-2016
 * |
 * | File Name:     vhip.js
 * +===============================================
 */

new Vue({
  el: '#vhip-company-div',
  data: {
    n: 0
  },
  methods: {
    addCompany: function () {
      this.n++
    },
    removeCompany: function () {
      if (this.n > 0) {
        this.n--
      }
    }
  }
})
