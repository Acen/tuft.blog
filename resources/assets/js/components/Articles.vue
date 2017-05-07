<template>
    <div>
        <article v-for="article in articles">
            <h3>{{ article.title }}<span>Created {{ article.created_at }} by {{ article.user.name }}</span></h3>
            <p>{{article.content}}</p>
        </article>
            <paginate
                    @prev="goPrevious"
                    @next="goNext"
                    :pagination="pagination"
            ></paginate>
    </div>
</template>

<script>
    export default{
        data() {
            return {
                articles: [],
                article: {
                    _id:         '',
                    title:      '',
                    created_at:  '',
                    user:     {
                        id:     '',
                        name:   ''
                    },
                    content:    ''
                },
                pagination: {
                    next_page_url: '',
                    prev_page_url: ''
                }
            }
        },

        mounted () {
            this.getArticles();
        },

        methods: {
            getArticles (url) {
                let self = this;
                if(url){
                    axios.get(url).then(
                        function(response){
                            self.articles = response.data.data;
                            delete response.data.data;
                            self.pagination = response.data;
                        }
                    )
                }else {
                    axios.get('api/articles').then(
                        function (response) {
                            self.articles = response.data.data;
                            delete response.data.data;
                            self.pagination = response.data;
                        }
                    )
                }
            },
            goNext () {
                this.getArticles(this.pagination.next_page_url);
            },
            goPrevious () {
                this.getArticles(this.pagination.prev_page_url);
            }
        }
    }
</script>

<style>
    h3 span{
        display: block;
        color: #adadad;
        font-size: 0.75rem;
        letter-spacing: 1px;
        text-transform: uppercase;
    }
</style>