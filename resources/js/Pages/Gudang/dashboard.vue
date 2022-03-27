<template>
    <gudang-layout>
        <div>
            Dashboard
        </div>
    </gudang-layout>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";
import { Link } from "@inertiajs/inertia-vue3";
import GudangLayout from "@/Layouts/GudangLayout";

export default {
    created() {
        document.title = "Dashboard";
    },
    components: {
        GudangLayout,
        Link,
    },
}
</script>