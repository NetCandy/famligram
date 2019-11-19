// @todo figure out how to swap in the correct URI for the current environment.
const API_URL = 'https://localhost:3000/api/';

export default {
    async getPosts() {
        const res = await fetch(API_URL + 'posts');
        return res.json();
    },
};
