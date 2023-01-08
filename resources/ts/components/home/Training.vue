<script setup lang="ts">
import Course from "@/components/Course.vue";
import { useTrainingStore } from "../../stores/trainingsStore";
const trainingStore = useTrainingStore();
</script>
<template>
    <div class="w-full bg-gray-100">
        <div
            class="w-full lg:py-20 py-10 xl:px-36 md:px-10 px-4 relative text-black"
        >
            <div class="w-full flex justify-center">
                <div
                    class="rounded-full shadow bg-smart-blue px-4 py-2 inline-flex items-center space-x-3 mx-auto text-white uppercase font-medium text-xs sm:text-sm"
                >
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <h1>Nos Formations</h1>
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                </div>
            </div>
            <div class="mt-6">
                <h1 class="font-bold lg:text-5xl text-4xl text-center">
                    <span class="text-smart-blue">Formations</span>
                </h1>
            </div>
            <p class="text-center mt-6 max-w-2xl leading-7 mx-auto">
                Les métiers du Digital sont des plus recherchés et nous avons à
                cœur de former des professionnels pour répondre aux attentes du
                marché ou pour travailler comme opérateurs indépendants au
                service des autres.
            </p>
            <div
                class="grid w-full lg:grid-cols-4 grid-cols-1 md:grid-cols-2 gap-6 mt-10"
            >
                <Course
                    v-for="(training, index) in trainingStore.trainings"
                    :key="index"
                    :data="training"
                />
            </div>
        </div>
    </div>
</template>
