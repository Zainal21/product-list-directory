<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Product List
            </h2>
        </template>
        <!-- component -->
        <!-- item card -->
        <div class="md:flex shadow-md mx-6 md:mx-auto my-20 max-w-lg md:max-w-2xl h-64" v-for="item in products"
            :key="item.id">
            <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6"
                src="https://ik.imagekit.io/q5edmtudmz/FB_IMG_15658659197157667_wOd8n5yFyXI.jpg" alt="bag">
            <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
                <div class="flex items-center">
                    <h2 class="text-xl text-gray-800 font-medium mr-auto">{{item.product_name}}</h2>
                    <p class="text-gray-800 font-semibold tracking-tighter">
                        only
                        <i class="text-gray-600 line-through">#</i>
                        48$
                    </p>
                </div>
                <p class="text-sm text-gray-700 mt-4">
                    {{item.description}}
                </p>
                <div class="flex items-center justify-around mt-4 top-auto">
                    <button class="bg-red-400 text-gray-200 px-4 py-2 rounded mr-auto hover:underline">Delete</button>
                    <button class=" bg-blue-600 text-gray-200 px-4 py-2 rounded-md">Edit</button>
                </div>
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
        props: ['products']
    }

</script>
