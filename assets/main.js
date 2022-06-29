const vue = new Vue({
    el: '#app',
    data : {
        arrayMusic: [],
        apiUrl : ['http://localhost:9054/php-ajax-dischi/database/api.php']
    },
    created(){
        axios.get(this.apiUrl).then(result =>{
            this.arrayMusic = result.data;
            console.log(result);
        })
    }
})