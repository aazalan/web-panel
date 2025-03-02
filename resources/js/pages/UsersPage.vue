<script setup>
const props = defineProps({
    message: {
        type: String,
        default: '',
    },
    user: {
        type: Object,
        default: '',
    }
})
</script>

<template>
    {{message}}, {{user.name}}
</template>

<style scoped>

</style>
