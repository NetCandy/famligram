<template>
  <div class="bg-white rounded border border-gray-300"
    :style="expansionStyle"
  >
    <div :class="{ 'hidden': expanded}">
      <div class="flex justify-between items-center p-4">
        <div class="flex items-center">
          <span class="block w-10 h-10 bg-green-400 rounded-full overflow-hidden">
            <img :src="$path.avatar(post.author.name)">
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
        <fm-post-menu />
      </div>
      <img :src="$path.image({fileName: post.image, after: '-500x500.jpg'})"
        width="500"
        height="500"
      >
      <div class="flex justify-between px-4 mt-4">
        <fm-like :liked-by-user="post.liked_by_user"
          :like-count="post.likes_count"
        />
        <div>
          <fm-bookmark />
          <fm-share />
        </div>
      </div>
      <fm-post-text :author="post.author.name"
        :text="post.text"
      />
      <fm-comments :comments="post.comments" />
      <a class="cursor-pointer px-4 leading-snug text-sm font-semibold text-gray-500"
        @click="toggleExpand"
      >
        View all {{ post.comments.length }} comments
      </a>
      <fm-new-comment />
    </div>
    <div :class="{ 'hidden': ! expanded}">
      <div class="flex"
        style="max-height: 500px"
      >
        <div>
          <img class=""
            :src="$path.image({fileName: post.image, after: '-500x500.jpg'})"
          >
        </div>
        <div class="flex flex-col justify-start"
          style="width: 305px"
        >
          <div class="flex justify-between items-center p-3">
            <div class="flex items-center">
              <span class="block w-10 h-10 bg-green-400 rounded-full overflow-hidden">
                <img :src="$path.avatar(post.author.name)">
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
            <fm-post-menu />
          </div>
          <fm-post-text
            :author="post.author.name"
            :text="post.text"
          />
          <fm-comments-all class="flex-grow"
            :comments="post.comments"
          />
          <div class="flex justify-between px-4 mt-4">
            <fm-like :liked-by-user="post.liked_by_user"
              :like-count="post.likes_count"
            />
            <div>
              <fm-bookmark />
              <fm-share />
            </div>
          </div>
          <fm-new-comment class="flex-none" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CommentList from './CommentList';
import CommentListAll from './CommentListAll';
import PostText from './PostText';
import Like from './Like';
import Bookmark from './Bookmark';
import Share from './Share';
import NewComment from './NewComment';
import PostMenu from './PostMenu';
export default {
    name: 'Post',
    components: {
        'fm-comments': CommentList,
        'fm-comments-all': CommentListAll,
        'fm-post-text': PostText,
        'fm-like': Like,
        'fm-bookmark': Bookmark,
        'fm-share': Share,
        'fm-new-comment': NewComment,
        'fm-post-menu': PostMenu,
    },
    props: {
        post: {
            required: true,
            type: Object
        },
        initialContext: {
            type: String,
            required: true,
            validator: (context) => ['list', 'focused'].includes(context),
        }
    },
    data() {
        return {
            expanded: this.initialContext !== 'list',
        };
    },
    computed: {
        expansionStyle() {
            return this.expanded ? 'width: 805px' : 'width: 500px';
        }
    },
    methods: {
        toggleExpand() {
            this.expanded = !this.expanded;
        }
    },
};
</script>
