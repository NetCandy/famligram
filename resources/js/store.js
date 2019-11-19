import Vue from 'vue';
import Vuex from 'vuex';

import API from './api';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        posts: [],
    },
    getters: {
        posts(state) {
            return state.posts;
        },
    },
    actions: {
        async getPosts(context) {
            const posts = await API.getPosts();
            context.commit('setPosts', posts);
        },
    },
    mutations: {
        setPosts(state, posts) {
            state.posts = posts;
        },
        // addPost(state, post) {
        //     state.posts.push(post);
        // },
        // removePost(state, post) {
        //     const index = state.posts.indexOf(post);
        //     state.posts.splice(index, 1);
        // },
    },
});

