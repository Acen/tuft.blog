<template>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Author</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="article in articles">
                    <td>{{article.title}}</td>
                    <td><span :title="article.created_at">{{simplifyDate(article.created_at)}}</span></td>
                    <td>{{article.user.name}}</td>
                    <td>
                        <div class="btn-group">
                            <button @click="editArticle(article)" type="button" class="btn btn-xs btn-success">Edit</button>
                            <button @click="deleteArticle(article)" type="button" class="btn btn-xs btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <modal v-if="modal.edit" :item="modal.edit">
        </modal>
    </div>
</template>

<script>
    import moment from 'moment';
    export default{
        data() {
            return {
                articles: [],
                article: {
                    _id:            '',
                    title:          '',
                    created_at:     '',
                    user:     {
                        id:         '',
                        name:       ''
                    }
                },
                modal: {
                    edit:           false,
                    delete:         false
                }
            }
        },

        mounted () {
            this.getArticles();
        },

        methods: {
            getArticles () {
                let self = this;
                axios.get('api/articles/all').then(
                    function (response) {
                        self.articles = response.data;
                    }
                )
            },
            editArticle(article){
                this.modal.edit = article;
                console.log('editArticle()', article._id);
            },
            deleteArticle(article){
                console.log('deleteArticle()', article._id);
            },
            simplifyDate(date){
                return moment(date).format('DD-MM-YYYY');
            }
        }
    }
</script>