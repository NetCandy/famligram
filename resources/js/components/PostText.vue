<template>
  <p class="px-4 mt-4 leading-snug text-sm">
    <span class="font-bold">{{ author }}</span>
    {{ $str.limit(text, 100) }}
  </p>
</template>
<script>
export default {
    name: 'PostText',

    props: {
        author: {
            type: String,
            required: true,
        },

        text: {
            type: String,
            required: true,
        }
    }
};
</script>

<style scoped>

</style>
