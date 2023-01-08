<script setup lang="ts">
import Banner from "@/components/Banner.vue";
import Link from "../types/Link";
import { useTrainingStore } from "../stores/trainingsStore";
import Training from "../types/Training";
import { ref, onMounted, watch } from "vue";
import {
    BanknotesIcon,
    ClockIcon,
    CheckCircleIcon,
} from "@heroicons/vue/24/solid";
const trainingStore = useTrainingStore();
const props = defineProps<{
    slug: string;
}>();
const item = ref<Training[]>([]);
const links = ref<Link[]>([]);
onMounted(async function () {
    item.value = trainingStore.trainingById(props.slug);
    if (item.value.length == 0) {
        location.href = "/not-found";
    }
    links.value = [
        {
            label: "Trainings",
            route: "training",
        },
        {
            label: item.value[0].name,
            route: "",
        },
    ];
});

watch(props, async function (newProps, oldProps) {
    item.value = trainingStore.trainingById(newProps.slug);
    if (item.value.length == 0) {
        location.href = "/not-found";
    }
    links.value = [
        {
            label: "Trainings",
            route: "training",
        },
        {
            label: item.value[0].name,
            route: "",
        },
    ];
});
</script>

<template>
    <Banner :links="links" :title="item[0] ? item[0].name : ''" />
    <div
        v-if="item[0]"
        class="w-full py-10 xl:px-36 md:px-10 px-4 relative bg-white"
    >
        <div
            class="flex lg:flex-row flex-col lg:space-x-12 space-x-0 sm:space-y-0 space-y-8"
        >
            <div
                class="lg:w-1/2 w-full h-60 lg:h-full lg:min-h-[19rem] rounded-3xl overflow-hidden shadow-xl"
            >
                <img
                    :src="item[0].image"
                    class="w-full h-full lg:min-h-[19rem] object-cover"
                    alt=""
                />
            </div>
            <div class="lg:w-1/2 w-full space-y-8">
                <h1 class="font-bold sm:text-4xl text-3xl">
                    {{ item[0].name }}
                </h1>
                <div class="flex items-center space-x-6">
                    <div class="p-6 rounded-full bg-smart-black">
                        <BanknotesIcon
                            class="sm:w-10 w-8 sm:h-10 h-8 text-white"
                        />
                    </div>
                    <div>
                        <h3
                            class="font-medium sm:text-xl text-lg text-gray-500"
                        >
                            Prix
                        </h3>
                        <h2
                            class="font-bold sm:text-3xl text-2xl text-smart-black"
                        >
                            {{ item[0].price }}
                        </h2>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <div class="p-6 rounded-full bg-smart-blue">
                        <ClockIcon class="sm:w-10 w-8 sm:h-10 h-8 text-white" />
                    </div>
                    <div>
                        <h3
                            class="font-medium sm:text-xl text-lg text-gray-500"
                        >
                            Durée
                        </h3>
                        <h2
                            class="font-bold sm:text-3xl text-2xl text-smart-black"
                        >
                            {{ item[0].duration }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8">
            <p class="text-center leading-8 max-w-4xl mx-auto">
                {{ item[0].description }}
            </p>
            <div
                v-if="item[0].toLearn.length > 0"
                class="flex flex-col justify-center mt-8"
            >
                <h1 class="text-center font-bold text-3xl underline">
                    Vous apprendrez
                </h1>
                <div class="max-w-4xl mx-auto space-y-2 mt-8 text-white">
                    <div
                        v-for="(learn, index) in item[0].toLearn"
                        :key="index"
                        class=""
                    >
                        <div
                            class="bg-smart-blue rounded-3xl inline-flex items-center"
                        >
                            <div
                                class="w-12 text-lg inline-flex items-center justify-center font-bold h-12 text-center rounded-3xl bg-smart-black"
                            >
                                <span>{{ index + 1 }}</span>
                            </div>
                            <div class="h-full px-8">
                                <span class="">{{ learn }}</span>
                            </div>
                        </div>
                    </div>

                    <a
                        :href="item[0].registerLink"
                        class="rounded-full shadow w-1/3 hover:shadow-lg flex bg-smart-black hover:bg-smart-blue-2 px-4 py-3 text-white uppercase font-medium text-xs sm:text-sm space-x-3 justify-center !mt-12 mx-auto"
                    >
                        <span><CheckCircleIcon class="h-5 w-5" /></span>
                        <span>Je m'inscris</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
