<script setup lang="ts">
import {PaginatedData} from "@/types/SystemEntities";
import {PropType} from "vue";
import Pagination from "@/components/elements/Pagination.vue";
import {User} from "@/types/ModelEntities";
import Table from "@/components/elements/Table.vue";

defineProps({
    users: {
        type: Object as PropType<PaginatedData<User>>,
        required: true,
    },
});

const userTableHeaders = {
    id: 'ID',
    name: 'Имя',
    email: 'Почта',
    role: 'Роль',
};
</script>

<template>
    <div v-if="users.data.length">
        <Table
            :table-data="users.data"
            :table-headers="userTableHeaders"
        />

        <Pagination :pagination="users.meta" />
    </div>
</template>

<style scoped>

</style>
