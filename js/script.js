Vue.config.devtools = true;


new Vue(    
    {
    el: '#app',
    data: {
    albums: [],
    Genres: []
    },
    created() {      
        axios.get('http://localhost:8888/php-dischi/api/ApiDischi.php')
            .then((result) => {
                this.albums = result.data;
        });
        this.getGenre()
    },
    methods:{
        getGenre(){
            let arrayGen = []
            for(let x = 0; this.albums.length > x; x++) {
                if(!arrayGen.includes(this.albums[x].genre)){
                    arrayGen.push(this.albums[x].genre);
                }
            }
            this.Genres = arrayGen
        },
    }
 }
);