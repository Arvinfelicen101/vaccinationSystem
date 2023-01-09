<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Inertia } from "@inertiajs/inertia";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

const props = defineProps({
  patientInfo: Object,
});

const form = useForm({
  fName: props.patientInfo.first_name,
  lastName: props.patientInfo.last_name,
  address: props.patientInfo.address,
  firstVaxx: props.patientInfo.first_vaxx,
  dateFirstDose: props.patientInfo.date_firstdose,
  secondVaxx: props.patientInfo.second_vaxx,
  dateSecondDose: props.patientInfo.date_seconddose,
});

function updatePatient() {
  Inertia.post(`/patientProfile/${props.patientInfo.id}`, {
    _method: "put",
    fName: form.fName,
      lastName: form.lastName,
      address: form.address,
      firstVaxx: form.firstVaxx,
      dateFirstDose: form.dateFirstDose,
      secondVaxx: form.secondVaxx,
      dateSecondDose: form.dateSecondDose
  });
}
// const emit = defineEmits([''])
// const showModal = ref(false);

// const showTheModal = () => {
//   showModal.value = true
// }
</script>

<template>
  <Head title="Add Patient" />

  <BreezeAuthenticatedLayout>
    <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template> -->

    <div class="py-5">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-3xl my-5">
          <div
            class="
              flex
              justify-between
              sm:items-center
              p-6
              bg-white
              border-b
              font-bold
              border-gray-200
            "
          >
            Update Patient

            <Link
              href="/patientProfile"
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
              Back</Link
            >
          </div>
        </div>
        <form
          action="#"
          method="POST"
          @submit.prevent="updatePatient"
        >
          <div class="shadow overflow-hidden sm:rounded-3xl">
            <div class="px-4 py-3 bg-white sm:p-5">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label
                    for="first-name"
                    class="block text-sm font-medium text-gray-700"
                    >First name</label
                  >
                  <input
                    type="text"
                    name="first-name"
                    v-model="form.fName"
                    id="first-name"
                    autocomplete="given-name"
                    class="
                      mt-1
                      focus:ring-indigo-500 focus:border-indigo-500
                      block
                      w-full
                      shadow-sm
                      sm:text-sm
                      border-gray-300
                      rounded-md
                    "
                  />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label
                    for="last-name"
                    class="block text-sm font-medium text-gray-700"
                    >Last name</label
                  >
                  <input
                    type="text"
                    name="last-name"
                    v-model="form.lastName"
                    id="last-name"
                    autocomplete="family-name"
                    class="
                      mt-1
                      focus:ring-indigo-500 focus:border-indigo-500
                      block
                      w-full
                      shadow-sm
                      sm:text-sm
                      border-gray-300
                      rounded-md
                    "
                  />
                </div>

                <div class="col-span-6">
                  <label
                    for="street-address"
                    class="block text-sm font-medium text-gray-700"
                    >Address</label
                  >
                  <input
                    type="text"
                    name="street-address"
                    v-model="form.address"
                    id="street-address"
                    autocomplete="street-address"
                    class="
                      mt-1
                      focus:ring-indigo-500 focus:border-indigo-500
                      block
                      w-full
                      shadow-sm
                      sm:text-sm
                      border-gray-300
                      rounded-md
                    "
                  />
                </div>

                <div class="col-span-6">
                  <label
                    for="street-address"
                    class="block text-sm font-medium text-gray-700"
                    >Name of the Vaccine for First Dose</label
                  >
                  <input
                    type="text"
                    name="street-address"
                    v-model="form.firstVaxx"
                    id="street-address"
                    autocomplete="street-address"
                    class="
                      mt-1
                      focus:ring-indigo-500 focus:border-indigo-500
                      block
                      w-full
                      shadow-sm
                      sm:text-sm
                      border-gray-300
                      rounded-md
                    "
                  />
                </div>

                <div class="col-span-3 lg:col-span-1">
                  <input
                    input
                    id="datetime"
                    type="date"
                    name="book_date"
                    v-model="form.dateFirstDose"
                    class="
                      bg-gray-50
                      border border-gray-300
                      text-gray-900
                      sm:text-sm
                      rounded-lg
                      focus:ring-blue-500 focus:border-blue-500
                      block
                      w-full
                      pl-10
                      p-2.5
                      dark:bg-gray-700
                      dark:border-gray-600
                      dark:placeholder-gray-400
                      dark:text-white
                      dark:focus:ring-blue-500
                      dark:focus:border-blue-500
                    "
                    placeholder="Select date"
                  />
                </div>

                <div class="col-span-6">
                  <label
                    for="street-address"
                    class="block text-sm font-medium text-gray-700"
                    >Name of the Vaccine for Second Dose</label
                  >
                  <input
                    type="text"
                    name="street-address"
                    v-model="form.secondVaxx"
                    id="street-address"
                    autocomplete="street-address"
                    class="
                      mt-1
                      focus:ring-indigo-500 focus:border-indigo-500
                      block
                      w-full
                      shadow-sm
                      sm:text-sm
                      border-gray-300
                      rounded-md
                    "
                  />
                </div>

                <div class="col-span-3 lg:col-span-1">
                  <input
                    input
                    id="datetime"
                    type="date"
                    name="book_date"
                    v-model="form.dateSecondDose"
                    class="
                      bg-gray-50
                      border border-gray-300
                      text-gray-900
                      sm:text-sm
                      rounded-lg
                      focus:ring-blue-500 focus:border-blue-500
                      block
                      w-full
                      pl-10
                      p-2.5
                      dark:bg-gray-700
                      dark:border-gray-600
                      dark:placeholder-gray-400
                      dark:text-white
                      dark:focus:ring-blue-500
                      dark:focus:border-blue-500
                    "
                    placeholder="Select date"
                  />
                </div>

                <div class="col-span-3 lg:col-span-1">
                  <input
                    input
                    id="datetime"
                    type="date"
                    name="book_date"
                    v-model="form.dateSecondDose"
                    class="
                      bg-gray-50
                      border border-gray-300
                      text-gray-900
                      sm:text-sm
                      rounded-lg
                      focus:ring-blue-500 focus:border-blue-500
                      block
                      w-full
                      pl-10
                      p-2.5
                      dark:bg-gray-700
                      dark:border-gray-600
                      dark:placeholder-gray-400
                      dark:text-white
                      dark:focus:ring-blue-500
                      dark:focus:border-blue-500
                    "
                    placeholder="Select date"
                  />
                </div>
              </div>
            </div>
            <div class="px-2 py-5 bg-gray-50 text-right sm:px-6">
              <button
                type="submit"
                class="
                  inline-flex
                  justify-center
                  py-3
                  px-6
                  border border-transparent
                  shadow-sm
                  text-sm
                  font-medium
                  rounded-md
                  text-white
                  bg-red-600
                  hover:bg-red-700
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-red-500
                "
              >
                Update
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div></div>
  </BreezeAuthenticatedLayout>
</template>
