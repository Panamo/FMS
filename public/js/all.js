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
    addPhone: function () {
      this.n++
    },
    removePhone: function () {
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

//# sourceMappingURL=all.js.map
