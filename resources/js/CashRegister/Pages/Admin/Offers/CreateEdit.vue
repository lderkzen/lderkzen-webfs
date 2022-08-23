<template>
    <Head title="Aanbiedingen" />
    <div class="container-fluid px-0">
        <div class="row justify-content-center align-items-center mx-0">
            <div class="col-5 pt-4 px-2 pb-2">
                <div class="outlined p-4">
                    <form @submit.prevent="offer ? form.put(`/kassa/admin/aanbiedingen/${ offer.id }`) : form.post('/kassa/admin/aanbiedingen')">
                        <input v-model="form.title" type="text" placeholder="Titel" class="w-100 mb-1" />
                        <small v-if="form.errors.title" v-text="form.errors.title" class="fw-bold text-danger"></small>

                        <input v-model="form.name" type="text" step="any" placeholder="Naam" class="w-100 mb-1" />
                        <small v-if="form.errors.name" v-text="form.errors.name" class="fw-bold text-danger"></small>

                        <input v-model="form.description" type="text" step="any" placeholder="Beschrijving" class="w-100 mb-1" />
                        <small v-if="form.errors.description" v-text="form.errors.description" class="fw-bold text-danger"></small>

                        <input v-model="form.extra_info" type="text" placeholder="Extra Informatie" class="w-100 mb-1" />
                        <small v-if="form.errors.extra_info" v-text="form.errors.extra_info" class="fw-bold text-danger"></small>

                        <input v-model="form.price" type="number" step="0.05" placeholder="Prijs" class="w-100 mb-1" />
                        <small v-if="form.errors.price" v-text="form.errors.price" class="fw-bold text-danger"></small>

                        <input v-model="form.valid_from" type="date" class="w-100 mb-1" />
                        <small v-if="form.errors.valid_from" v-text="form.errors.valid_from" class="fw-bold text-danger"></small>

                        <input v-model="form.valid_until" type="date" class="w-100 mb-1" />
                        <small v-if="form.errors.valid_until" v-text="form.errors.valid_until" class="fw-bold text-danger"></small>

                        <select v-model="form.dishIds" size="16" class="w-100 mb-1" multiple>
                            <option disabled value="">Selecteer één of meerdere gerechten</option>
                            <option v-for="dish in dishes" :value="dish.id">{{ dish.name }}</option>
                        </select>
                        <small v-if="form.errors.dishIds" v-text="form.errors.dishIds" class="fw-bold text-danger"></small>

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
    name: "Admin.Offers.CreateEdit",
    props: {
        offer: Object,
        dishes: Object,
    },
    data() {
        return {
            form: useForm(`CreateEditOffer${ this.offer ? this.offer.id : '' }`, {
                title: this.offer ? this.offer.title : '',
                name: this.offer ? this.offer.name : '',
                description: this.offer ? this.offer.description : '',
                extra_info: this.offer ? this.offer.extra_info : '',
                price: this.offer ? this.offer.price : '',
                valid_from: this.offer ? this.offer.valid_from.substring(0, 10) : new Date().toJSON().slice(0,10).replace(/-/g,'-'),
                valid_until: this.offer ? this.offer.valid_until ? this.offer.valid_until.substring(0, 10) : '' : '',
                dishIds: this.offer ? this.offer.dishIds : [],
            })
        }
    }
}
</script>

<style scoped>
    @import '/css/cash_register/admin_resource.css';
</style>
