<template>
    <Head title="Aanbiedingen" />
    <div class="container-fluid px-0">
        <div id="resource-container" class="text-center pt-4 px-2 pb-2">
            <div class="outlined p-4">
                <div id="resource-table-xl" class="mx-auto text-nowrap text-center">
                    <div class="row fw-bold mx-0 bb-blue">
                        <div class="resource-col-4 px-0 bx-blue"><span>Titel</span></div>
                        <div class="resource-col-4 px-0 bx-blue"><span>Naam</span></div>
                        <div class="resource-col-5 px-0 bx-blue"><span>Beschrijving</span></div>
                        <div class="resource-col-1 px-0 bx-blue"><span>Prijs</span></div>
                        <div class="resource-col-1 px-0 bx-blue"><span>Vanaf</span></div>
                        <div class="resource-col-1 px-0 bx-blue"><span>Tot</span></div>
                        <div class="resource-col-4 row mx-0 justify-content-around px-0">
                            <span class="col-auto px-0">Acties</span>
                            <Link href="/kassa/admin/aanbiedingen/aanmaken" class="create-anchor col-auto px-0">+ Maak een nieuwe aanbieding aan...</Link>
                        </div>
                    </div>
                    <div v-for="offer in offers" class="row mx-0 resource">
                        <span class="resource-col-4 text-start px-0">{{ offer.title }}</span>
                        <span class="resource-col-4 text-start px-0">{{ offer.name }}</span>
                        <span class="resource-col-5 text-start px-0">{{ offer.description }}</span>
                        <span class="resource-col-1 px-0">€ {{ parseInt(offer.price).toFixed(2).replace('.', ',') }}</span>
                        <span class="resource-col-1 px-0">{{ offer.valid_from.substring(2, 10) }}</span>
                        <span class="resource-col-1 px-0">{{ offer.valid_until ? offer.valid_until.substring(2, 10) : 'Indefinitief' }}</span>
                        <div class="resource-col-4 row mx-0 px-0 ps-1 text-start">
                            <span class="col-auto ps-0 pe-1"><Link :href="`/kassa/admin/aanbiedingen/${ offer.id }/aanpassen`" class="d-inline-block btn-resource btn-blue">Aanpassen</Link></span>
                            <span class="col-auto ps-0 pe-1"><Link as="button" :href="`/kassa/admin/aanbiedingen/${ offer.id }`" class="btn-resource btn-red" method="DELETE">Verwijderen</Link></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Admin.Offers.Index",
    props: {
        offers: Object
    }
}
</script>

<style scoped>
    @import '/css/cash_register/admin_resource.css';
</style>
