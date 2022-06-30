Vue.use(VueRouter)

import PostList from './components/PostList.vue'
import PostDetailPage from './components/PostDetailPage.vue'
const router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/', component: PostList, name: 'home' },
        { path:  '/posts/:id', component: PostDetailPage, name: 'post-detail'},
    ]
})