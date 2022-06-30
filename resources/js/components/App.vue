<template>
    <div class="container">
        <router-view></router-view>
    </div>
</template>

<script>
    import PostList from './PostList.vue'
    import PostDetailPage from './PostDetailPage.vue'

    export default{
        name:'App',
        components:{
            PostList,
            PostDetailPage,
        }
    }
</script>
