var app = new Vue({

    el: '#root',

    data: {
        cds: [],
    },

    methods: {
        getCds: function() {
            axios
            .get('http://localhost:8888/php-ajax-dischi/Vue%20-%20php/server.php')
            .then(response => {
                this.cds = response.data;
            })
        }

    },
    mounted() {
        this.getCds()
    }
}) 