<template>
  <p class="px-2 pb-2 leading-snug text-sm border-b">
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
