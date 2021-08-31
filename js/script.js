Vue.config.devtools = true;


new Vue(    
    {
    el: '#app',
    data: {
    albums: [],
    },

        created() {      
            axios.get('http://localhost:8888/php-dischi/api/ApiDischi.php')
                .then((result) => {
                    this.albums = result.data;
            })
        },
    }
);