<template>
    <div>
        <div class="mb-6">

            <Link :href="route('students.create')" class="inline-block bg-sky-600 px-3 py-2 text-white">Добавить</Link>

        </div>
        <div class="mb-4" v-for="car in pageCars">
            <div>{{ student.name }}</div>
            <div >{{ student.performance_rating }}</div>
            <div class="mb-6">{{ student.id }}</div>
            <div class="mb-6">
                <Link :href="route('students.show', student.id)" class="inline-block bg-purple-600 px-3 py-2 text-white">Просмотреть</Link>
            </div>
            <div class="mb-6">
                <Link :href="route('students.edit', student.id)" class="inline-block bg-green-600 px-3 py-2 text-white">Редактировать</Link>
            </div>
            <div class="mb-6">
                <a @click.prevent="destroy(car.id)" href="#" class="inline-block bg-rose-600 px-3 py-2 text-white">Удалить</a>
            </div>
            <hr class="mt-4">
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from "@inertiajs/vue3"

export default {
    name: "Index",
    props: ['students'],
    data() {
        return {
            pageCars: this.students
        }
    },
    components: { Link },
    layout: MainLayout,


    methods: {
        destroy(id) {
            axios.delete(`/students/${id}`).then( res => {
                this.pageCars = this.pageCars.filter(student => {
                    return parseInt(student.id) !== parseInt(id)
                })
            }).catch(res => {

            })
        }
    }
}
</script>

<style scoped>

</style>
