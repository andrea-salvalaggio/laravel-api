<template>
    <div class="card">
        <img class="card-img-top img-fluid" :src="post.post_image" alt="">
        <div class="card-body">
            <h2>{{ post.post_title }}</h2>
            <p class="card-text">{{ post.post_content }}</p>
            <p>Post written by {{ post.user.name }} | on {{ post.post_date }}</p>
            <TagPost/>
        </div>
    </div>
</template>

<script>
import TagPost from './TagPost.vue';

export default {

    components: {
        TagPost,
    },

    props: ['post'],

}
</script>

<style>

</style>