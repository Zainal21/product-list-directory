<template>
    <app-layout>
        <template #header>
            <div class="flex justify-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Create new Category</h2>
            </div>
            <div class="float-rig">
                <inertia-link :href="route('category.index')"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">kembali
                </inertia-link>
            </div>
        </template>
        <div class="container mx-auto py-20">
            <div class="leading-loose">
                <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" @submit.prevent="handleSaveCategory()">
                    <div class="">
                        <label class="block text-sm text-gray-700">Category Name</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="category_name"
                            name="category_name" type="text" required="" placeholder="Input Category Name"
                            aria-label="Name" v-model="form.category_name">
                        <div v-if="errors.category_name" class="text-red-400">{{ errors.category_name }}</div>
                    </div>
                    <div class="mt-4">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                            type="submit">Add</button>
                    </div>
                </form>
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
        props: {
            errors: Object,
        },
        data: () => {
            return {
                form: {
                    category_name: '',
                }
            }
        },
        methods: {
            handleSaveCategory() {
                this.$inertia.post('/category', this.form)
                this.category_name = '';
            }
        }
    }
</script>
