var app = new Vue ({
    el: "#app",
    data:{
        hotels: []
    },
    mounted: function() {
       axios
       .get('data.php')
       .then(response => {
           this.hotels = response.data
       });
    }
});
