<template>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <h1>Posts:</h1>
                
                    <ul>
                        <li v-for="post in posts" :key="post.id">{{ post.post_title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import axios from 'axios';

    export default {

    data: function () {
        return {
            posts: [],
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
        }
    },
    created() {
        this.getPosts();
    },
}

</script>

<style>

</style>