<template>
    <gudang-layout>
        <div>
            Create Barang
        </div>
    </gudang-layout>    
</template>

<script>
import { defineComponent } from 'vue';
import JetButton from '@/Jetstream/Button.vue';
import JetInput from '@/Jetstream/Input.vue';
import JetInputError from '@/Jetstream/InputError.vue';
import JetLabel from '@/Jetstream/Label.vue';
import JetActionMessage from '@/Jetstream/ActionMessage.vue';
import { Link } from '@inertiajs/inertia-vue3';
import GudangLayout from '@/Layouts/GudangLayout';

export default defineComponent ({
    created () {
        document.title = "Tambag Barang";
    },
    components: {
        JetButton,
        JetInput,
        JetInputError,
        JetLabel,
        JetActionMessage,
        Link,
        GudangLayout,
    }
})
</script>