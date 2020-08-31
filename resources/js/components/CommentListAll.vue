<template>
  <ol class="overflow-y-scroll">
    <li v-for="comment in comments"
      :key="comment.id"
      class="px-4 mt-4 leading-snug text-sm text-gray-800"
    >
      {{ comment.text }}
    </li>
  </ol>
</template>

<script>
export default {
    name: 'CommentListAll',
    props: {
        comments: {
            type: Array,
            required: true
        },
    },
};
</script>
