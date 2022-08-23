<template>
    <Head title="Gerechten" />
    <div class="container-fluid px-0">
        <div class="row justify-content-center align-items-center mx-0">
            <div class="col-5 pt-4 px-2 pb-2">
                <div class="outlined p-4">
                    <form @submit.prevent="dish ? form.put(`/kassa/admin/gerechten/${ dish.id }`) : form.post('/kassa/admin/gerechten')">
                        <input v-model="form.dish_nr" type="text" placeholder="Gerecht Nummer" class="w-100 mb-1" />
                        <small v-if="form.errors.dish_nr" v-text="form.errors.dish_nr" class="fw-bold text-danger"></small>

                        <select v-model="form.dish_type_id" size="8" class="w-100 mb-1">
                            <option disabled value="">Selecteer een type</option>
                            <option v-for="type in dishTypes" :value="type.id">{{ type.type }}</option>
                        </select>
                        <small v-if="form.errors.dish_type_id" v-text="form.errors.dish_type_id" class="fw-bold text-danger"></small>

                        <input v-model="form.name" type="text" step="any" placeholder="Gerecht Naam" class="w-100 mb-1" />
                        <small v-if="form.errors.name" v-text="form.errors.name" class="fw-bold text-danger"></small>

                        <input v-model="form.price" type="number" step="0.05" placeholder="Prijs" class="w-100 mb-1" />
                        <small v-if="form.errors.price" v-text="form.errors.price" class="fw-bold text-danger"></small>

                        <input v-model="form.spice_level" type="number" placeholder="Pittigheid" class="w-100 mb-1" />
                        <small v-if="form.errors.spice_level" v-text="form.errors.spice_level" class="fw-bold text-danger"></small>

                        <input v-model="form.description" type="text" step="any" placeholder="Beschrijving" class="w-100 mb-1" />
                        <small v-if="form.errors.description" v-text="form.errors.description" class="fw-bold text-danger"></small>

                        <select v-model="form.allergyIds" class="w-100 mb-1" multiple>
                            <option disabled value="">Selecteer één of meerdere allergiën</option>
                            <option v-for="allergy in allergies" :value="allergy.id">{{ allergy.allergy }}</option>
                        </select>
                        <small v-if="form.errors.allergyIds" v-text="form.errors.allergyIds" class="fw-bold text-danger"></small>

                        <input type="submit" class="w-50" :disabled="form.processing" value="opslaan" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3"

export default {
    name: "Admin.Dishes.CreateEdit",
    props: {
        dish: Object,
        dishTypes: Object,
        allergies: Object
    },
    data() {
        return {
            form: useForm(`CreateEditDish${ this.dish ? this.dish.id : '' }`, {
                dish_nr: this.dish ? this.dish.dish_nr : '',
                dish_type_id: this.dish ? this.dish.dish_type_id : '',
                name: this.dish ? this.dish.name : '',
                price: this.dish ? this.dish.price : '',
                spice_level: this.dish ? this.dish.spice_level : '',
                description: this.dish ? this.dish.description : '',
                allergyIds: this.dish ? this.dish.allergyIds : [],
            })
        }
    }
}
</script>

<style scoped>
    @import '/css/cash_register/admin_resource.css';
</style>
