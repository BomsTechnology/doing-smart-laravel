<script setup lang="ts">
import Banner from "@/components/utils/Banner.vue";
import Link from "../types/Link";
import { useTrainingStore } from "../stores/trainingsStore";
import Course from "@/components/Course.vue";
const links: Array<Link> = [
    {
        label: "Formations",
        route: "training",
    },
];
const trainingStore = useTrainingStore();
</script>

<template>
    <Banner :links="links" :title="'Nos Formations'" />
    <div class="bg-gray-100 sm:py-32 py-10 xl:px-36 px-6 md:px-10">
        <div
            class="w-full grid-cols-1 grid lg:grid-cols-4 md:grid-cols-2 gap-8"
        >
            <Course
                v-for="(training, index) in trainingStore.trainings"
                :key="index"
                :data="training"
            />
        </div>
    </div>
</template>
