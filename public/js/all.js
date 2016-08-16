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
    n: 1
  },
  methods: {
    addPhone: function (event) {
      this.n++
    },
    removePhone: function (event) {
      if (this.n > 1) {
        this.n--
      }
    }
  }
})


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
    n: 1
  },
  methods: {
    addCompany: function (event) {
      this.n++
    },
    removeCompany: function (event) {
      if (this.n > 1) {
        this.n--
      }
    }
  }
})


//# sourceMappingURL=all.js.map
