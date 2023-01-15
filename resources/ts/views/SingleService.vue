<script setup lang="ts">
import Banner from "@/components/utils/Banner.vue";
import Link from "../types/Link";
import Accompagnement from "@/components/services/Accompagnement.vue";
import { useServiceStore } from "../stores/servicesStore";
import Service from "../types/Service";
import { ref, onMounted } from "vue";
const serviceStore = useServiceStore();
const props = defineProps<{
    slug: string;
}>();
const item = ref<Service[]>([]);
const links = ref<Link[]>([]);
onMounted(async function () {
    item.value = serviceStore.serviceById(props.slug);
    if (item.value.length == 0) {
        location.href = "/not-found";
    }
    links.value = [
        {
            label: "Services",
            route: "service",
        },
        {
            label: item.value[0].shortName,
            route: "",
        },
    ];
});
</script>

<template>
    <Banner :links="links" :title="item[0] ? item[0].shortName : ''" />
    <div class="w-full py-10 xl:px-36 md:px-10 px-4 relative bg-white">
        <Accompagnement v-if="slug == 'accompagnement-des-entreprises'" />
    </div>
</template>
