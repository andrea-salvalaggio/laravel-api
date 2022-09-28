<template>
    <div class="card">
        <img class="card-img-top img-fluid" :src="post.post_image" alt="">
        <div class="card-body">
            <h2 class="font-weight-bold">{{ post.post_title }}</h2>
            <p class="card-text">{{ post.post_content }}</p>
            <p>Post written by {{ post.user.name }} | on {{ post.post_date }}</p>

            <div class="d-flex">
                <h5 class="font-weight-bold">Tags: </h5>
                <!-- Add tags in PostCard -->
                <TagPost v-for="tag in post.tags" :key="tag.id" :tag="tag"/>
            </div>
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