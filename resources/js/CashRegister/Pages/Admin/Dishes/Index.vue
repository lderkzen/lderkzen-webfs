<template>
    <Head title="Gerechten" />
    <div class="container-fluid px-0">
        <div id="resource-container" class="text-center pt-4 px-2 pb-2">
            <div class="outlined p-4">
                <div id="resource-table-xl" class="mx-auto text-nowrap text-center">
                    <div class="row fw-bold mx-0 bb-blue">
                        <div class="resource-col-1 px-0"><span>Nummer</span></div>
                        <div class="resource-col-2 px-0 bx-blue"><span>Gerecht Type</span></div>
                        <div class="resource-col-5 px-0 bx-blue"><span>Gerecht</span></div>
                        <div class="resource-col-1 px-0 bx-blue"><span>Prijs</span></div>
                        <div class="resource-col-1 px-0 bx-blue"><span>Pittigheid</span></div>
                        <div class="resource-col-4 px-0 bx-blue"><span>Beschrijving</span></div>
                        <div class="resource-col-2 px-0 bx-blue"><span>Allergiën</span></div>
                        <div class="resource-col-4 row mx-0 justify-content-around px-0">
                            <span class="col-auto px-0">Acties</span>
                            <Link href="/kassa/admin/gerechten/aanmaken" class="create-anchor col-auto px-0">+ Maak een nieuw gerecht aan...</Link>
                        </div>
                    </div>
                    <div v-for="dish in dishes" class="row mx-0 resource">
                        <span class="resource-col-1 px-0 text-start">{{ dish.dish_nr ? dish.dish_nr + '.' : '' }}</span>
                        <span class="resource-col-2 px-0 text-start">{{ dishTypes.find(type => type.id === dish.dish_type_id).type }}</span>
                        <span class="resource-col-5 px-0 ps-2 text-start" v-html="dish.name"></span>
                        <span class="resource-col-1 px-0 ps-2">€ {{ parseInt(dish.price).toFixed(2).replace('.', ',') }}</span>
                        <span class="resource-col-1 px-0">{{ dish.spice_level }}</span>
                        <span class="resource-col-4 px-0 text-start">{{ dish.description }}</span>
                        <div class="resource-col-2 px-0 text-start ps-2">
                            <span v-if="dish.allergies" class="w-100">{{ identifyAllergies(dish.allergies) }}</span>
                        </div>
                        <div class="resource-col-4 row mx-0 px-0 ps-1 text-start">
                            <span class="col-auto ps-0 pe-1"><Link :href="`/kassa/admin/gerechten/${ dish.id }/aanpassen`" class="d-inline-block btn-resource btn-blue">Aanpassen</Link></span>
                            <span class="col-auto ps-0 pe-1"><Link as="button" :href="`/kassa/admin/gerechten/${ dish.id }`" class="btn-resource btn-red" method="DELETE">Verwijderen</Link></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Admin.Dishes.Index",
    props: {
        dishes: Object,
        dishTypes: Object,
        allergies: Object
    },
    methods: {
        identifyAllergies(allergyIds) {
            return allergyIds.map(id => this.allergies.find(allergy => allergy.id === id).allergy).join(', ')
        }
    },
}
</script>

<style scoped>
    @import '/css/cash_register/admin_resource.css';
</style>
