<template>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <h1>Posts:</h1>
                
                    <ul class="list-group">
                        <li class="list-group-item">An item</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    import axios from 'axios';

    export default {
        
        data: function(){
            return{
                posts: [],
                currentPage: 1,
                lastPage: null,
            }  
        },

        methods:{
            getPosts(postsPage = 1){
               axios.get('/api/posts', {
                    page: postsPage
                }).then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log('error');
                })
            }
        },

        created(){
            this.getPosts();
        }
    
    }

</script>

<style>

</style>