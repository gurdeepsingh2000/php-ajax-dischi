Vue.config.devtools = true;


new Vue(    
    {
    el: '#app',
    data: {
    albums: [],
    Genres: [],
    selectedGenre:'',
    filteredAlbum:[]
    },
    created() {
        axios.get('http://localhost:8888/php-dischi/api/ApiDischi.php')
            .then((result) => {
                this.filteredAlbum = result.data;
                this.getGenre()
        });      
    },
    methods:{
        getGenre(){
            let arrayGen = []
            for(let x = 0; this.filteredAlbum.length > x; x++) {
                if(!arrayGen.includes(this.filteredAlbum[x].genre)){
                    arrayGen.push(this.filteredAlbum[x].genre);
                }
            }
            this.Genres = arrayGen
        },
        genreChoose(){
            if(this.selectedGenre === 'All'){
                axios.get('http://localhost:8888/php-dischi/api/ApiDischi.php')
                .then((result) => {
                this.filteredAlbum = result.data;
        });
            }
            let api_genre = 'http://localhost:8888/php-dischi/api/apiFiltered.php?genre=' + this.selectedGenre
            axios.get(api_genre).then((result)=>{
                this.filteredAlbum = result.data
            })
        }
    }
 }
);