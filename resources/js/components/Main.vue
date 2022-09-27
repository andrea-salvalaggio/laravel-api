<template>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <h1>Posts:</h1>
                
                    <PostCard/>
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
            currentPage: 1,
            lastPage: null,
        };
    },
    methods: {
        getPosts(postsPage = 1) {
            axios.get("/api/posts", {
                page: postsPage
            }).then((response) => {
                console.log(response.data.results.current_page);
                this.posts = response.data.results;
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
    components: { PostCard }
}

</script>

<style>

</style>