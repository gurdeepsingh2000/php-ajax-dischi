Vue.config.devtools = true;


const app = Vue(    
    {
    el: '#app',
    data: {
    albums: []
    },

        created() {      
            axios.get("http://localhost:8888/php-dischi/api/ApiDischi.php")
                .then((result) => {
                    this.albums = result.data;
            })   
        }

    }
);