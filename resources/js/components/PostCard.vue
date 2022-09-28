<template>
    <div class="card">
        <img class="card-img-top img-fluid" :src="post.post_image" alt="">
        <div class="card-body">
            <h2>{{ post.post_title }}</h2>
            <p class="card-text">{{ post.post_content }}</p>
            <p>Post written by {{ post.user.name }} | on {{ post.post_date }}</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {

    props: ['post'],
    
}
</script>

<style>

</style>