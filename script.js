function initVue() {
  new Vue({
    el: "#app",

    data: {
      array: [],
      genres: ["All"],
      filterKey: "",
    },

    methods: {
      getMusicGenres: function () {
          axios
              .get('data.php', {
                  params: {
                      'genre': this.filterKey,
                  }
              })
              .then(data => {
                  this.array = data.data;
              });
          },

      getGenre: function () {
        console.log(this.filterKey);
      },
    },

    computed: {
      sortByYear: function () {
        return this.array.sort((a, b) => a.year - b.year);
      },
      filterByGenre: function () {
        if (this.filterKey == "All") {
          return this.sortByYear;
        } else {
          return this.array.filter((album) => {
            return album.genre == this.filterKey;
          });
        }
      },
    },

    created() {
      if (this.genres) {
        this.filterKey = this.genres[0];
      }
    },

    // DATA PHP LINK
    mounted() {
      axios.get("data.php").then((response) => {
        let data = response.data;
        this.array = data;
      });
    },
  });
}

function init() {
  initVue();
}
document.addEventListener("DOMContentLoaded", init);
