Vue.config.devtools = true;

const app = new Vue ({
    el:"#root",
    data : {
        dischi : [],
    },
    created() {
        axios.get("http://localhost:88/Lezione4/php-ajax-dischi/data/server.php")
        .then((res) => {
            console.log(res.data);
            this.dischi = res.data;
            console.log(this.dischi);
        })
    }
});