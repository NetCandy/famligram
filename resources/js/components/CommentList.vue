<template>
  <div v-if="comments.length > 0">
    <p class="px-4 mt-4 leading-snug text-sm text-gray-800">
      {{ $str.limit($array.first(comments).text, 100) }}
    </p>
    <a v-if="comments.length > 1"
      class="px-4 leading-snug text-sm font-semibold text-gray-500"
    >
      View all {{ comments.length }} comments
    </a>
  </div>
</template>

<script>
export default {
    name: 'CommentList',

    props: {
        comments: {
            type: Array,
            required: true
        }
    },
    methods: {
    }
};
</script>
