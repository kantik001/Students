<template>
    <div>
        <div class="mb-6">
            <Link :href="route('students.index')" class="inline-block bg-sky-600 px-3 py-2 text-white">Назад</Link>
        </div>
        <div class="mb-4">
            <label for="name"></label>
            <input id="name" v-model="name" type="text" placeholder="name">
        </div>
        <div class="mb-4">
            <label for="performance_rating"></label>
            <input id="performance_rating" v-model="performance_rating" type="number" placeholder="performance_rating">
        </div>
        <div class="mb-4">
            <label for="file"></label>
            <input @change="initFile" id="file" type="file">
        </div>
        <div class="mb-4">
            <a @click.prevent="store" href="#" class="inline-block bg-sky-600 px-3 py-2 text-white">Add</a>
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import { router } from '@inertiajs/vue3'
import {Link} from "@inertiajs/vue3"

export default {
    name: "Create",
    layout: MainLayout,
    components: {Link},
    data() {
        return {
            name: '',
            performance_rating: null,
            file: null
        }
    },

    methods: {

        initFile(e) {
            this.file = new FormData()
            this.file.append('image', e.target.files[0])
        },

        store() {
            this.file.append('name',  this.name)
            this.file.append('performance_rating',  this.performance_rating)
            router.post('/students', this.file)
        }
    }


}
</script>

<style scoped>

</style>
