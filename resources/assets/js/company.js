/*
 * +===============================================
 * | Author:        Parham Alvani (parham.alvani@gmail.com)
 * |
 * | Creation Date: 11-08-2016
 * |
 * | File Name:     company.js
 * +===============================================
 */

new Vue({
  el: '#company-telephone-div',
  data: {
    n: 0
  },
  methods: {
    addPhone: function (event) {
      this.n++
    },
    removePhone: function (event) {
      if (this.n > 0) {
        this.n--
      }
    }
  }
})

