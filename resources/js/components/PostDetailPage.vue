<template>
  <div>
    <h1>Title:{{post.title}}</h1>
  </div>
</template>

<script>
import axios from 'axios';
export default {
    name:'PostDetailPage',
    data(){
        return{
            post:[],
        }
    },
    methods:{
        getpost(){
            axios.get('http://127.0.0.1:8000/api/posts/${ this.$route.params.id }').then((res)=>{
                console.log(res.data);
                this.post = res.data;
            })
        }
    },
    mounted(){
        this.getpost();
    }
}
</script>

<style>

</style>