<script setup lang="ts">
import Training from "../types/Training";
import { BanknotesIcon, ClockIcon } from "@heroicons/vue/24/solid";
const props = defineProps<{
    data: Training;
}>();
</script>

<template>
    <router-link
        v-if="data.route"
        :to="{
            name: data.route,
            params: {
                slug: data.slug,
            },
        }"
        class="rounded-3xl min-h-[25rem]"
    >
        <div class="rounded-3xl w-full h-3/5 overflow-hidden relative">
            <img :src="data.image" class="w-full h-full object-cover" alt="" />
        </div>
        <div class="py-4">
            <h1 class="font-bold text-xl">
                {{ data.name }}
            </h1>
            <div class="text-sm text-gray-500 mt-2">
                <div class="flex space-x-3 items-center">
                    <span
                        ><BanknotesIcon class="w-5 h-5 text-smart-black"
                    /></span>
                    <span>{{ data.price }}</span>
                </div>
                <div class="flex space-x-3">
                    <span><ClockIcon class="w-5 h-5 text-smart-black" /></span>
                    <span>{{ data.duration }}</span>
                </div>
            </div>
            <router-link
                :to="{
                    name: data.route,
                    params: {
                        slug: data.slug,
                    },
                }"
                class="rounded-full shadow hover:shadow-lg bg-smart-blue hover:bg-smart-blue-2 px-4 py-3 mt-4 text-white uppercase font-medium text-xs sm:text-sm inline-block"
            >
                En Savoir plus
            </router-link>
        </div>
    </router-link>
</template>
