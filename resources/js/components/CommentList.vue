<template>
  <div v-if="comments.length > 0">
    <p class="px-4 mt-4 leading-snug text-sm text-gray-800">
      {{ $str.limit($array.first(comments).text, 100) }}
    </p>
  </div>
</template>

<script>
export default {
    name: 'CommentList',
    props: {
        comments: {
            type: Array,
            required: true
        },
    },
    methods: {
    }
};
</script>
