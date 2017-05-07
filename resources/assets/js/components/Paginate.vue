<template>
    <div class="paginator">
        <span v-if="pagination.prev_page_url !== null" v-on:click="prev" class="pagination__previous">< Previous</span>
        <span v-if="pagination.next_page_url !== null" v-on:click="next" class="pagination__next">Next ></span>
    </div>
</template>

<script>
    export default{
        props: {
            pagination: {
                type: Object,
                required: true
            }
        },
        methods: {
            prev () {
                this.$emit('prev');
            },
            next () {
                this.$emit('next');
            }
        }
    }
</script>

<style>
    .paginator{
        display: flex;
    }
    .pagination__next, .pagination__previous{
        flex: 1 0;
        padding: 2vmin;
        color: #f8f8f8;
        cursor: pointer;
    }
    .pagination__previous{
        text-align:left;
    }
    .pagination__next{
        text-align: right;
    }
</style>