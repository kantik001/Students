<template>
    <div>
        <div class="mb-6">
            <Link :href="route('students.index')" class="inline-block bg-sky-600 px-3 py-2 text-white">Назад</Link>
        </div>
        <div class="mb-4">
            <div>{{ student.name }}</div>
            <div >{{ student.performance_rating }}</div>
            <div class="mb-6">
                <a :href="route('student.edit', student.id)" class="inline-block bg-green-600 px-3 py-2 text-white">Редактировать</a>
            </div>
            <hr class="mt-4">
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from "@inertiajs/vue3"

export default {
    name: "Show",
    props: ['student'],
    components: { Link },
    layout: MainLayout,


}
</script>

<style scoped>

</style>
