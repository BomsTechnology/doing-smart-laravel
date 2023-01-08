import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    resolve: {
        alias: {
            "@": "/resources/ts",
            vue: "vue/dist/vue.esm-bundler.js",
        },
    },
    plugins: [
        laravel({
            input: ["resources/ts/app.ts"],
            refresh: true,
        }),
        vue({
            template: {
                compilerOptions: {
                    // treat all tags with a dash as custom elements
                    isCustomElement: (tag) => tag.startsWith("ion-"),
                },
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
