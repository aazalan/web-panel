<script setup lang="ts">
import {PaginatedData} from "@/types/SystemEntities";
import {PropType} from "vue";
import Pagination from "@/components/elements/Pagination.vue";
import {User} from "@/types/ModelEntities";

defineProps({
    users: {
        type: Object as PropType<PaginatedData<User>>,
        required: true,
    },
});
</script>

<template>
    <div v-if="users.data.length">
        <div v-for="user in users.data" :key="user.id">
            #{{ user.id }}: {{ user.name }}
        </div>

        <Pagination :pagination="users.meta" />
    </div>
</template>

<style scoped>

</style>
