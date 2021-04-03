<template>
    <app-layout>
        <template #header>
            <div class="flex justify-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Category Management</h2>
            </div>
            <div class="float-rig">
                <inertia-link :href="route('category.create')"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Add New
                    Category</inertia-link>
            </div>
        </template>
        <div class="container mx-auto py-20">
            <!-- component -->
            <div class="text-gray-900 bg-white">
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-black text-white text-left">
                            <th class="px-4 py-2">No.</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in categories" :key="item.id">
                            <td class="border px-4 py-2">{{ item.category_name }}</td>
                            <td class="border px-4 py-2">
                                <button @click="handleDeleteCategory(item)"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 my-2 rounded">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    export default {
        components: {
            AppLayout,
        },
        props: ['categories'],
        methods: {
            handleDeleteCategory(data) {
                if (!confirm('Are you sure ?'))return;
                data._method = 'DELETE',
                this.$inertia.delete(`/category/${data.id}`)
            }
        }
    }

</script>
