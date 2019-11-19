<template>
  <div class="flex">
    <div class="flex items-center">
      <font-awesome-icon v-if="likedByUser != null"
        class="text-red-500 hover:text-red-500"
        :icon="['fa','heart']"
        size="lg"
      />
      <font-awesome-icon v-else
        class="text-gray-500 hover:text-red-500"
        :icon="['far','heart']"
        size="lg"
      />
      <span v-if="likeCount > 0"
        class="ml-1 text-xs font-semibold text-gray-900"
      >{{ likeCount }}</span>
    </div>
  </div>
</template>

<script>
export default {
    name: 'Like',
    props: {
        likedByUser: {
            type: Boolean,
            required: true,
        },
        likeCount: {
            type: Number,
            required: true,
        }
    }
};
</script>
