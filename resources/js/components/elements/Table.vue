<script setup lang="ts" generic="T">
import {PropType} from "vue";
import {TableHeaders} from "@/types/SystemEntities";


defineProps({
    tableData: {
        type: Array as PropType<Array<T>>,
        required: true,
    },
    tableHeaders: {
        type: Object as PropType<TableHeaders<T>>,
        default: null,
    },
});
</script>

<template>

</template>

<style scoped>

</style>
