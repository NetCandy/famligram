<template>
  <div>
    <ul>
      <li v-for="post in posts"
        :key="post.id"
        class="mt-4 bg-white rounded border border-gray-300"
        style="width: 500px"
      >
        <div class="flex justify-between items-center p-4">
          <div class="flex items-center">
            <span class="block w-10 h-10 bg-green-400 rounded-full overflow-hidden">
              <img :src="avatar(post.author.name)">
            </span>
            <div class="ml-2">
              <div class="text-xl capitalize">
                {{ post.author.name }}
              </div>
              <div class="mt-1 text-xs text-gray-600">
                {{ $moment(post.created_at).fromNow() }}
              </div>
            </div>
          </div>
          <font-awesome-icon class="text-gray-500"
            :icon="['fa','ellipsis-h']"
          />
        </div>
        <img :src="postImage(post.image)"
          width="500"
          height="500"
        >
        <div class="flex justify-between px-4 mt-4">
          <fm-like :liked-by-user="post.liked_by_user"
            :like-count="post.likes_count"
          />
          <div>
            <font-awesome-icon class="text-gray-500 hover:text-gray-700"
              :icon="['far','bookmark']"
              size="lg"
            />
            <font-awesome-icon class="ml-2 text-gray-500 hover:text-blue-500"
              :icon="['far','share-square']"
              size="lg"
            />
          </div>
        </div>
        <fm-post-text :author="post.author.name"
          :text="post.text"
        />
        <fm-comments
          :comments="post.comments"
        />
        <div class="mt-2 flex justify-between p-4 border-t border-gray-200 text-sm text-gray-500">
          Add comment
          <span class="uppercase text-blue-300">post</span>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
import {mapGetters} from 'vuex';
import CommentList from './CommentList';
import PostText from './PostText';
import Like from './Like';

export default {
    name: 'PostsList',

    components: {
        'fm-comments': CommentList,
        'fm-post-text': PostText,
        'fm-like': Like,
    },

    computed: mapGetters(['posts']),

    async mounted() {
        this.$store.dispatch('getPosts');
    },

    methods: {
        avatar(value) {
            return this.$path.asset('/images/avatars/', value, '.png');
        },
        postImage(value) {
            return this.$path.asset('/images/', value, '-500x500.jpg');
        },
    }
};

</script>
