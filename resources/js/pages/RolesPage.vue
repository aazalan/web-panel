<script setup lang="ts">
import {PaginatedData} from "@/types/SystemEntities";
import {PropType} from "vue";
import Pagination from "@/components/elements/Pagination.vue";
import {Role} from "@/types/ModelEntities";
import Table from "@/components/elements/Table.vue";

defineProps({
    roles: {
        type: Object as PropType<PaginatedData<Role>>,
        required: true,
    },
});

const roleTableHeaders = {
    id: 'ID',
    name: 'Название роли',
    permissions: 'Разрешения',
};
</script>

<template>
    <div v-if="roles.data.length">
        <Table
            :table-data="roles.data"
            :table-headers="roleTableHeaders"
        />

        <Pagination :pagination="roles.meta" />
    </div>
</template>

<style scoped>

</style>
