/*
 * +===============================================
 * | Author:        Parham Alvani (parham.alvani@gmail.com)
 * |
 * | Creation Date: 20-08-2016
 * |
 * | File Name:     app.js
 * +===============================================
 */
webshims.setOptions('forms-ext', {types: 'date'})
webshim.polyfill('es5 mediaelement forms forms-ext')

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

//# sourceMappingURL=all.js.map
