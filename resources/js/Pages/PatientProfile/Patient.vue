<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import {
  Dialog,
  DialogPanel,
  DialogTitle,
  TransitionChild,
  TransitionRoot,
} from "@headlessui/vue";

import { ref } from "vue";

const props = defineProps({
  patientProfile: Array,
});

const showModal = ref(true);

const open = ref(false);
// const showTheModal = () => {
//   showModal = true;
// }
</script>

<template>
  <Head title="Patient Profile" />

  <BreezeAuthenticatedLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-3xl">
          <div
            class="
              flex
              justify-between
              items-center
              p-6
              bg-white
              border-b
              font-bold
              border-gray-200
            "
          >
            Patients

            <Link
              href="/patientProfile/create"
              class="
                bg-red-600
                hover:bg-red-700
                font-bold
                text-white
                button-right
                active:bg-red-900
                focus:outline-none focus:ring focus:ring-red-300
                pt-2
                pr-4
                pb-2
                pl-4
                rounded-full
              "
            >
              Add New Patient</Link
            >
          </div>
          <div></div>
        </div>
        <div class="overflow-auto">
          <table class="mt-4 min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  "
                >
                  First Name
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  "
                >
                  Last Name
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  "
                >
                  Address
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  "
                >
                  Name of Vaccine for First Dose
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  "
                >
                  Date of Vaccination
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  "
                >
                  Name of Vaccine for Second Dose
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  "
                >
                  Date of Vaccination
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  "
                ></th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="patients in patientProfile" :key="patients.id">
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ patients.first_name }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ patients.last_name }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ patients.address }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ patients.first_vaxx }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ patients.date_firstdose }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ patients.second_vaxx }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ patients.date_seconddose }}
                </td>
                <td class="flex space-x-4 px-6 py-4 whitespace-nowrap">
                  <Link
                    :href="`/patientProfile/${patients.id}/edit`"
                    class="text-indigo-600 hover:text-indigo-900"
                    >Edit</Link
                  >
                  <Link
                    :href="`/patientProfile/${patients.id}`"
                    method="delete"
                    as="button"
                    type="button"
                    class="text-red-600 hover:text-red-900"
                    >Delete</Link
                  >
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
