<template>
    <gudang-layout>
        <!-- Breadcrumb items -->
        <div>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>

                            <div class="text-gray-700 ml-1 md:ml-2 text-sm font-medium">
                                Barang
                            </div>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Breadcrumb header -->
            <div class="text-3xl font-bold mt-2 mb-2">
                Barang
            </div>
        </div>

        <!-- Search, select option paginate & button create -->
        <div class="flex flex-row flex-wrap space-x-0 lg:space-x-2 mb-2">
            <div class="w-full lg:w-64 mb-2 lg:mb-0">
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <div class="text-gray-500 sm:text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>

                    <!-- textbox search -->
                    <input type="text" 
                        class="
                            focus:ring-indigo-500
                            focus:border-indigo-500
                            block w-full pl-7 pr-12
                            sm:text-sm border-gray-300 rounded-md
                        "
                        placeholder="Search"
                        v-model="form.search"
                    />

                    <!-- select option paginate -->
                    <div class="absolute inset-y-0 right-0 flex items-center">
                        <select name="" id=""
                            class="
                                focus:ring-indigo-500
                                focus:border-indigo-500
                                h-full py-0 pl-2 pr-7 border-transparent
                                bg-transparent text-gray-500
                                sm:text-sm rounded-md
                            "

                            v-model="form.per_page"
                        >
                            <option>5</option>
                            <option>10</option>
                            <option>100</option>
                            <option>500</option>
                            <option>1000</option>
                        </select>
                    </div>
                </div>
            </div>

            <jet-button class="w-full lg:w-auto text-center mb-2 lg:mb-0">
                <Link
                    :href="route('barang.create')"
                >
                    Tambah Barang
                </Link>
            </jet-button>
        </div>

        <!-- data list -->
        <div v-for="(brg, index) in barang.data" :key="index">
            <div class="bg-white">
            <div class="pt-2">
                <!-- Product info -->
                <div class="max-w-2xl mx-auto pt-10 pb-4 px-4 sm:px-6 lg:max-w-7xl lg:pt-2 lg:pb-4 lg:px-2 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-2">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-2">
                    <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">No. SKU : {{ brg.no_sku }}</h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:mt-0 lg:row-span-3">
                    <p class="text-3xl text-gray-900">Kode Barang : {{ brg.id_barang }}</p>

                    <form class="mt-10">
                    <!-- Jenis Barang -->
                    <div>
                        <h3 class="text-sm text-gray-900 font-medium">Jenis Barang : </h3>

                        <fieldset class="mt-4">
                        <legend class="sr-only">Jenis Barang</legend>
                        <div class="flex items-center space-x-3">
                            {{ brg.id_jenis }}
                        </div>
                        </fieldset>
                    </div>

                    <div>
                        <h3 class="text-sm text-gray-900 font-medium">Satuan : </h3>

                        <fieldset class="mt-4">
                        <legend class="sr-only">Satuan</legend>
                        <div class="flex items-center space-x-3">
                            {{ brg.id_satuan }}
                        </div>
                        </fieldset>
                    </div>

                        <button type="submit" class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Ubah
                        </button>
                    </form>
                </div>

                <div class="py-10 lg:pt-6 lg:pb-4 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-2">
                    <!-- Description and details -->
                    <div class="mt-10">
                    <h3 class="text-sm font-medium text-gray-900">Nama Barang :</h3>

                    <div class="mt-4">
                        {{ brg.nama_barang }}
                    </div>
                    </div>

                    <div class="mt-10">
                    <h2 class="text-sm font-medium text-gray-900">Lokasi</h2>

                    <div class="mt-4 space-y-6">
                        {{ brg.lokasi }}
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- pagination -->
        <div class=" bg-white px-3 py-1 flex items-center justify-between border-t border-gray-200 sm:px-3">
            <!-- button -->
            <div class=" flex-1 flex justify-between sm:hidden">
                <Button class="btn-pagination" :disabled="barang.current_page <= 1"
                    @click.prevent="paginate(barang.current_page - 1)"
                >
                    Prev
                </Button>

                <Button class="btn-pagination" :disabled="barang.current_page <= barang.last_page"
                    @click.prevent="paginate(barang.current_page + 1)"
                >
                    Next
                </Button>
            </div>

            <!-- page info -->
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm leading-5 text-gray-700">
                        Showing
                        <span class="font-medium">
                            {{ barang.from }}
                        </span>
                        to
                        <span class="font-medium">
                            {{ barang.to }}
                        </span>
                        of
                        <span class="font-medium">
                            {{ barang.total }}
                        </span>
                        result
                    </p>
                </div>

                <pagination
                    :current_page="current_page"
                    :total="barang.total"
                    :per_page="barang.per_page"
                    :last_page="barang.last_page"
                    :from="barang.from"
                    :to="barang.to"
                    @paginate="paginate"
                    :offset="4"
                >
                </pagination>
            </div>
        </div>

    </gudang-layout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import GudangLayout from "@/Layouts/GudangLayout"
import JetButton from "@/Jetstream/Button.vue";
import Pagination from "@/Components/Pagination";
import Button from "../../Jetstream/Button.vue";

export default {
  created () {
      document.title="Barang";
  },
  components: {
      Link,
      GudangLayout,
      JetButton,
      Pagination,
      Button,
  },
  props: {
      filters: Object,
      barang: Object,
  },
  data() {
      return {
          current_page: this.barang.current_page,
          form: {
              search: this.filters.search,
              per_page: this.barang.per_page,
              page: this.filters.page,
              sort_by: this.filters.sort_by,
              sort_dir: this.filters.sort_dir ?? "asc",
          }
      }
  },
  watch: {
    form: { 
      handler: _.throttle(function(){
          let query = _.pickBy(this.form);
          this.$inertia.get(
              this.route("barang.index"),
              Object.keys(query).length ? query : { remember: "forgot" },
              { preserveState: true}
          );
      }, 300),
      deep: true,
    },
    barang(barang) {
        this.current_page = barang.current_page;
    }
  },
  methods: {
      reset() {
          this.form = _.mapValues(this.form, () => null)
      },
      pagination(page) {
          this.form.page = page;
      }
  },
}
</script>