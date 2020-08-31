<template>
  <div>
    <ul>
      <li v-for="post in posts"
        :key="post.id"
        class="mt-4"
      >
        <fm-post initial-context="focused"
          :post="post"
        />
      </li>
    </ul>
  </div>
</template>

<script>
import {mapGetters} from 'vuex';
import Post from './Post';
export default {
    components: {
        'fm-post': Post,
    },
    computed: mapGetters(['posts']),
    async mounted() {
        this.$store.dispatch('getPosts');
    },
};

</script>
