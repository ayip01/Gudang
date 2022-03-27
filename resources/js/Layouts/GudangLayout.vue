<template>
    <div>
        <div class="flex flex-col h-screen">

            <div class="flex flex-1 overflow-hidden">
                <side-bar :openNav="navOpen" />
                
                <div class="flex flex-1 flex-col">
                    <div class="flex">
                        <nav-bar @toggleNav="navOpen = !navOpen" />
                    </div>

                    <div class="overflow-y-auto p-2">
                        <slot></slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import navBar from "@/Layouts/Bar/navBar";
import sideBar from "@/Layouts/Bar/sideBar";

export default {
    components: {
        navBar,
        sideBar,
        Link
    },
    data() {
        return{
            navOpen:
                localStorage.getItem("navOpen") === "false"
                ? false
                : localStorage.getItem("navOpen") === "true"
                ? true
                : "",
        };
    },
    watch: {
        navOpen(navOpen) {
            localStorage.navOpen = navOpen;
        },
    },
    computed: {
        path() {
            return window.location.pathname;
        }
    }
}
</script>