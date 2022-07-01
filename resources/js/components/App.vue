<template>
    <div class="container">
        <router-view></router-view>
    </div>
</template>

<script>
    import PostList from './PostList.vue'
    import PostDetailPage from './PostDetail'
    import ErrorPage from './ErrorPage.vue'

    export default{
        name:'App',
        components:{
            PostList,
            PostDetailPage,
            ErrorPage,
        }
    }
</script>
