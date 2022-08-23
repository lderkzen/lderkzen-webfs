<template>
    <Head title="Verkoopoverzicht" />
    <div class="container-fluid px-0">
        <div id="row-1" class="row pt-4 pb-2 mx-0">
            <div id="filter-box" class="col-4 pe-2">
                <div class="d-flex align-items-center outlined">
                    <div class="row w-100 mx-0">
                        <div class="col-7 pe-0">
                            <div class="row mx-0 pb-1">
                                <label class="col-5" for="start-date">Begin datum:</label>
                                <span class="col-7 pe-0"><input v-model="startDate" type="date" id="start-date" /></span>
                            </div>
                            <div class="row mx-0">
                                <label class="col-5" for="end-date">Eind datum:</label>
                                <span class="col-7 pe-0"><input v-model="endDate" type="date" id="end-date" /></span>
                            </div>
                        </div>
                        <div class="col-4 ps-0">
                            <button class="h-100 px-2" @click="fetchSales()" :disabled="processing.value">Maak Overzicht</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sales-summary" class="col-8 ps-2">
                <div class="outlined">
                    <div class="row h-100 fw-bold p-4 mx-0">
                        <div class="col-2 px-0"><span>Omzet:</span></div>
                        <div class="col-2 px-0"><span>{{ turnover }}</span></div>
                        <div class="col-2 px-0"><span>BTW:</span></div>
                        <div class="col-2 px-0"><span>{{ tax }}</span></div>
                        <div class="col-2 px-0"><span>excl. BTW:</span></div>
                        <div class="col-2 px-0"><span>{{ turnoverWithoutTax }}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="divider" />
        <div id="row-2" class="row mx-0">
            <div id="resource-container" class="col-12 my-2">
                <div class="outlined p-4">
                    <div id="resource-table-md" class="mx-auto text-center">
                        <div class="row fw-bold mx-0 bb-blue">
                            <span class="col-1 px-0">Datum</span>
                            <span class="col-8 px-0 bx-blue">Gerecht</span>
                            <span class="col-1 px-0 bx-blue">Prijs</span>
                            <span class="col-1 px-0 bx-blue">Aantal</span>
                            <span class="col-1 px-0">Subtotaal</span>
                        </div>
                        <div v-for="sale of sales" :key="sale.id" class="row mx-0">
                            <span class="col-1 px-0">{{ sale.date }}</span>
                            <span class="col-8 px-0 text-start">{{ sale.name }}</span>
                            <span class="col-1 px-0">{{ `€ ${(sale.pivot.price /  sale.pivot.amount).toFixed(2).replace('.', ',')}` }}</span>
                            <span class="col-1 px-0">{{ sale.pivot.amount }}</span>
                            <span class="col-1 px-0">{{ `€ ${ (sale.pivot.price).toFixed(2).replace('.', ',') }` }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Modal v-if="displayModal" @close="displayModal = false" :msg="modalMsg" />
    </div>
</template>

<script>
import { ref } from "vue"
import Modal from "../Shared/Modal"

export default {
    components: { Modal },
    name: "Sales",
    props: {
        processing: {
            default: ref(false)
        },
        errors: {
            default: ref({})
        },
    },
    data() {
        return {
            sales: [],
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            startDate: new Date().toJSON().slice(0,10).replace(/-/g,'-'),
            endDate: new Date().toJSON().slice(0,10).replace(/-/g,'-'),
            displayModal: false,
            modalMsg: ''
        }
    },
    computed: {
        total() {
            let total = 0
            this.sales.forEach(sale => total += sale.pivot.price)
            return total
        },
        turnover() {
            return '€ ' + this.total.toFixed(2).replace('.', ',')
        },
        tax() {
            return '€ ' + (this.total * 0.0566).toFixed(2).replace('.', ',')
        },
        turnoverWithoutTax() {
            return '€ ' + (this.total - this.total * 0.0566).toFixed(2).replace('.', ',')
        },
    },
    methods: {
        fetchSales() {
            this.processing.value = true

            fetch(`${ window.origin }/kassa/sales?startdate=${this.startDate}&enddate=${this.endDate}`, {
                method: 'POST',
                headers: {
                    'Content-type': 'application/x-www-form-urlencoded',
                    'Accept': 'application/json',
                    'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]')['content']
                }
            }).then(async res => {
                if (res.ok) {
                    this.sales.splice(0, this.sales.length);
                    (await res.json()).forEach(sale => {
                        sale.pivot.price = parseInt(sale.pivot.price)
                        this.sales.push(sale)
                    })
                } else if (res.status === 422) {
                    this.modalMsg = (await res.json()).message
                    this.displayModal = true
                }
            }).finally(() => this.processing.value = false)
        }
    }
}
</script>

<style scoped>
    @import '/css/cash_register/sales.css';
</style>
