<script setup lang="ts">
defineProps({
   titleText: {
       type: String,
       required: true,
   },
});
</script>

<template>
    <h1>{{ titleText }}</h1>
</template>

<style scoped>

</style>
