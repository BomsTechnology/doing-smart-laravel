<script setup lang="ts">
import bg from "@/assets/bg1.jpg";
import { HomeIcon, ChevronRightIcon } from "@heroicons/vue/24/outline";
import Link from "../../types/Link";

const props = defineProps<{
    title: string ,
    links: Link[],
 
}>();
</script>

<template>
    <div
        class="w-full lg:h-80 h-64 bg-cover"
        :style="{ 'background-image': `url(${bg})` }"
    >
        <div
            class="w-full h-full bg-black/75 flex flex-col justify-end items-center space-y-6 py-10 text-white"
        >
            <h1
                class="lg:text-[40px] text-3xl text-center font-semibold flex items-center space-x-2"
            >
                <span>{{ title }}</span>
            </h1>
            <div class="flex items-center">
                <router-link :to="{ name: 'home' }" class="hover:underline">
                    <HomeIcon class="h-4 w-4" />
                </router-link>
                <span><ChevronRightIcon class="h-4 w-4" /></span>
                <span
                    v-for="(link, index) in links"
                    :key="index"
                    class="text-xs lg:text-sm flex items-center"
                >
                    <router-link
                        v-if="link.route"
                        :to="{ name: link.route }"
                        class="hover:underline"
                        >{{ link.label }}</router-link
                    >
                    <span v-else>{{ link.label }}</span>
                    <span :class="links.length == index + 1 ? 'hidden' : ''"
                        ><ChevronRightIcon class="h-4 w-4"
                    /></span>
                </span>
            </div>
        </div>
    </div>
</template>
