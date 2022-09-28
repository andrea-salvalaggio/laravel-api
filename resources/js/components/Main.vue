<template>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 mt-5">
                    <h1 class="font-weight-bold">Posts</h1>
                    <hr>
                    <PostCard v-for="post in posts" :key="post.id" :post="post" class="my-5"/>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import PostCard from './PostCard.vue';
import axios from 'axios';

    export default {
    
    components: {
        PostCard,
    },

    data: function () {
        return {
            posts: [],
            tags: [],
            currentPage: 1,
            lastPage: null,
        };
    },

    methods: {
        getPosts(postsPage = 1) {
            axios.get("/api/posts", {
                page: postsPage
            }).then((response) => {
                // console.log(response.data.results.data)
                this.posts = response.data.results.data;
                this.currentPage = response.data.results.current_page;
                this.lastPage = response.data.results.last_page;
            }).catch((error) => {
                console.log("error");
            });
        },

        getTags() {
            axios.get("/api/tags", {
            }).then((response) => {
                // console.log(response.data.results.data)
                this.tags = response.data.results.data;
            }).catch((error) => {
                console.log("error");
            });
        }
    },

    created() {
        this.getPosts();
        this.getTags();
    },
}

</script>

<style>

</style>