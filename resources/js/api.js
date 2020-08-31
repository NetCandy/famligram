const API_URL = window.location.origin + '/api/';

export default {
    async getPosts() {
        const res = await fetch(API_URL + 'posts');
        return res.json();
    },
};
