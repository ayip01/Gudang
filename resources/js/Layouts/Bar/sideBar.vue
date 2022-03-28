<template>
    <aside class="flex flex-col w-64 h-screen p-2 bg-gray-800"
        v-if="openNav"
    >

        <!-- logo -->
        <div class="flex flex-col items-center">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-28 w-28" viewBox="0 0 20 20" fill="white">
                    <path fill-rule="evenodd" d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="mt-2 flex items-center">
                <span class="ml-2 text-2xl font-mono text-gray-300">
                    Aplikasi Gudang
                </span>
            </div>
        </div>

        <hr class="border-gray-600 mt-2">
        
        <div class="overflow-auto h-screen flex flex-col justify-between flex-1 mt-1">
            <nav>
                <!-- dashboard -->
                <div class="nav-item mb-1
                    flex items-center px-2 py-1 text-white rounded-md transition-colors duration-200 transform 
                    hover:bg-blue-600
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>

                    <span class="ml-2 font-medium">Dashboard</span>
                </div>

                <!-- jabatan -->
                <div class="nav-item mb-1
                    flex items-center px-2 py-1 text-white rounded-md transition-colors duration-200 transform 
                    hover:bg-blue-600
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                    <span class="ml-2 font-medium">Jabatan</span>
                </div>

                <!-- departemen -->
                <div class="nav-item mb-1
                    flex items-center px-2 py-1 text-white rounded-md transition-colors duration-200 transform 
                    hover:bg-blue-600
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>

                    <span class="ml-2 font-medium">Departemen</span>
                </div>

                <!-- karyawan -->
                <div class="nav-item mb-1
                    flex items-center px-2 py-1 text-white rounded-md transition-colors duration-200 transform 
                    hover:bg-blue-600
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>

                    <span class="ml-2 font-medium">Karyawan</span>
                </div>

                <!-- jenis barang -->
                <div class="nav-item mb-1
                    flex items-center px-2 py-1 text-white rounded-md transition-colors duration-200 transform 
                    hover:bg-blue-600
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>

                    <span class="ml-2 font-medium">Jenis Barang</span>
                </div>

                <!-- satuan -->
                <div class="nav-item mb-1
                    flex items-center px-2 py-1 text-white rounded-md transition-colors duration-200 transform 
                    hover:bg-blue-600
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>

                    <span class="ml-2 font-medium">Satuan</span>
                </div>

                <!-- barang -->
                <div class="nav-item mb-1">
                    <Link
                        :href="route('barang.index')"
                        class="nav-item"
                        :class="
                            route().current('barang.*')
                            ? 'flex items-center px-2 py-1 text-white rounded-md bg-blue-600'
                            : 'flex items-center px-2 py-1 text-white rounded-md transition-colors duration-200 transform hover:bg-blue-600'
                        "
                    >
                    
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>

                        <span class="ml-2 font-medium">Barang</span>
                    </Link>
                </div>

                <!-- pengadaan barang -->
                <div class="nav-item mb-1
                    flex items-center px-2 py-1 text-white rounded-md transition-colors duration-200 transform 
                    hover:bg-blue-600
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                    </svg>

                    <span class="ml-2 font-medium">Pengadaan Barang</span>
                </div>

                <!-- permintaan barang -->
                <div class="nav-item mb-1
                    flex items-center px-2 py-1 text-white rounded-md transition-colors duration-200 transform 
                    hover:bg-blue-600
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 13h6M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                    </svg>

                    <span class="ml-2 font-medium">Permintaan Barang</span>
                </div>
            </nav>
        </div>
    </aside>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link
    },
    props: ["openNav"],
}
</script>