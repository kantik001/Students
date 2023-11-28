<template>
    <div>
        <div class="mb-6">
            <Link :href="route('students.index')" class="inline-block bg-sky-600 px-3 py-2 text-white">Назад</Link>
        </div>
        <div class="mb-4">
            <div><label for="name">Name</label></div>
            <div><input id="name" v-model="name" type="text" placeholder="name"></div>
        </div>
        <div class="mb-4">
            <div><label for="performance_rating">Performance_rating</label></div>
            <div><input id="performance_rating" v-model="performance_rating" type="number" placeholder="performance_rating"></div>
        </div>
        <div class="mb-4">
            <a @click.prevent="update" href="#" class="inline-block bg-sky-600 px-3 py-2 text-white">Обновить</a>
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import {router} from '@inertiajs/vue3'
import {Link} from "@inertiajs/vue3"

export default {
    name: "Edit",
    layout: MainLayout,
    components: {Link},
    props: ['student'],
    data() {
        return {
            id: this.student.id,
            name: this.student.name,
            performance_rating: this.student.performance_rating
        }
    },

    methods: {
        update() {
            router.patch(`/students/${this.id}`, {name: this.name, performance_rating: this.performance_rating})
        }
    }


}
</script>

<style scoped>

</style>

