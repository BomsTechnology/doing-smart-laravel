import { createRouter, createWebHistory, RouteRecordRaw } from "vue-router";
const NavBar = () => import("@/components/NavBar.vue");
const Footer = () => import("@/components/Footer.vue");

import "vue-router";

declare module "vue-router" {
    interface RouteMeta {
        title: string;
        isAdmin?: boolean;
        requiresAuth?: boolean;
    }
}
const websiteName: String = "Doing Smart";
const routes: Array<RouteRecordRaw> = [
    {
        path: "/",
        name: "start",
        components: {
            default: () => import("@/views/Start.vue"),
        },
        meta: {
            title: "Agence de marketing digital | " + websiteName,
        },
    },
    {
        path: "/home",
        name: "home",
        components: {
            default: () => import("@/views/Home.vue"),
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: "Accueil - Agence de marketing digital | " + websiteName,
        },
    },
    {
        path: "/services",
        name: "service",
        components: {
            default: () => import("@/views/Service.vue"),
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: "Services - Agence de marketing digital | " + websiteName,
        },
    },

    {
        path: "/contact",
        name: "contact",
        components: {
            default: () => import("@/views/Contact.vue"),
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: "Contact - Agence de marketing digital | " + websiteName,
        },
    },

    {
        path: "/service/:slug",
        name: "single-service",
        props: true,
        components: {
            default: () => import("@/views/SingleService.vue"),
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: "Services - Agence de marketing digital | " + websiteName,
        },
    },

    {
        path: "/training",
        name: "training",
        components: {
            default: () => import("@/views/Training.vue"),
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: "Formations - Agence de marketing digital | " + websiteName,
        },
    },

    {
        path: "/training/:slug",
        name: "single-training",
        props: true,
        components: {
            default: () => import("@/views/SingleTraining.vue"),
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: "Formations - Agence de marketing digital | " + websiteName,
        },
    },

    {
        path: "/about-us",
        name: "about-us",
        components: {
            default: () => import("@/views/AboutUs.vue"),
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title:
                "A Propos de nous - Agence de marketing digital | " +
                websiteName,
        },
    },

    {
        path: "/:pathMatch(.*)*",
        name: "not-found",
        components: {
            default: () => import("@/views/NotFound.vue"),
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title:
                "Agence de marketing digital - Page introuvable | " +
                websiteName,
        },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (to.hash) {
            return {
                el: to.hash,
                behavior: "smooth",
            };
        } else if (savedPosition) {
            return savedPosition;
        } else {
            return { top: 0 };
        }
    },
});

router.afterEach((to) => {
    document.title = to.meta.title;
});

export default router;
