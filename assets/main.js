const vue = new Vue({
    el: '#app',
    data : {
        arrayPoster: [],
        apiUrl : ['http://localhost:9054/php-ajax-dischi/database/api.php']
    },
    created(){
        axios.get(this.apiUrl).then(response =>{
            this.arrayPoster = response.data;
            console.log(response);
        })
    }
})