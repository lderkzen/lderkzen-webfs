<template>
    <Head title="Orders" />
    <div class="container-fluid d-flex pt-4">
        <div id="dish-selector-container" class="w-60 h-600 p-2">
            <div id="dish-selector" class="outlined h-100 p-3">
                <div v-for="(type, index) in dishTypes" class="dishtype-container py-1">
                    <h6 class="text-center"><b>{{ type.type }}</b></h6>
                    <div v-for="dish of sortedDishes[index]" class="row mx-0 justify-content-between">
                        <div class="col-9 px-0 row mx-0 justify-content-end">
                            <span class="col-2">{{ dish.dish_nr ? dish.dish_nr + '.' : '' }}</span>
                            <span class="col-10" v-html="dish.name"></span>
                        </div>
                        <div class="col-3 px-0 row mx-0 justify-content-start">
                            <span class="col-6">€ {{ dish.price }}</span>
                            <span class="col-6"><button class="btn-block" @click="selectDish(dish)">Toevoegen</button></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="order-box-container" class="w-40 h-600 p-2">
            <div id="order-box" class="outlined p-3">
                <h6 class="text-center py-1"><b>Bestelling</b></h6>
                <div id="selected-dishes-container">
                    <div v-for="(dish, index) of selectedDishes" :key="dish.id" class="row mx-0 justify-content-evenly">
                        <span class="col-1">{{ dish.dish_nr ? dish.dish_nr + '.' : '' }}</span>
                        <span class="col-5" v-html="dish.name"></span>
                        <span class="col-2 px-0">€ {{ (dish.price * dish.amount).toFixed(2).replace('.', ',') }}</span>
                        <span class="col-1 px-0"><input :value="dish.amount" @input="event => updateSelectedDishAmount(index, event.target.value)" type="number" min="0" class="w-100" /></span>
                        <span class="col-3"><input v-model="dish.comment" type="text" class="w-100" placeholder="Opmerking..." /></span>
                    </div>
                </div>
            </div>
            <div id="order-box-total" class="d-flex flex-row align-items-center justify-content-between py-3 px-5 outlined">
                <span class="d-inline-block"><b>Totaal:</b></span>
                <div class="d-flex flex-row align-items-center">
                    <span id="order-price" class="d-inline-block pe-3"><b>{{ totalPrice }}</b></span>
                    <div class="d-flex flex-column align-items-start">
                        <button id="pay-button" class="px-2 mb-1" @click="processOrder()" :disabled="this.order.processing">Afrekenen</button>
                        <button id="clear-order-button" class="px-2" @click="this.clearSelectedDishes()">Verwijderen</button>
                    </div>
                </div>
            </div>
        </div>
        <Modal v-if="displayModal" @close="displayModal = false" :msg="modalMsg" />
    </div>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3"
import Modal from "../Shared/Modal"

export default {
    components: { Modal },
    name: "Index",
    props: {
        dishTypes: Object,
        dishes: Object,
        sortedDishes: {
            default: []
        },
        order: {
            default: useForm({
                order: []
            })
        }
    },
    data() {
        return {
            addBtns: {},
            selectedDishes: JSON.parse(localStorage.getItem('order') ?? '[]'),
            displayModal: false,
            modalMsg: ''
        }
    },
    computed: {
        totalPrice() {
            let total = 0
            this.selectedDishes.forEach(dish => total += dish.price * dish.amount)
            return '€ ' + total.toFixed(2).replace('.', ',')
        }
    },
    methods: {
        selectDish(dish) {
            const selectedDish = this.selectedDishes.find(selected => selected.id === dish.id)
            if (selectedDish) {
                selectedDish.amount++
                return
            }

            dish.amount = 1
            dish.comment = ''
            this.selectedDishes.push(dish)
        },
        updateSelectedDishAmount(index, newAmount) {
            if (newAmount <= 0) {
                this.selectedDishes.splice(index, 1)
                return
            }

            this.selectedDishes[index].amount = parseInt(newAmount)
        },
        processOrder() {
            if (this.selectedDishes.length <= 0)
                return

            this.selectedDishes.forEach(dish => this.order.order.push(dish))
            this.order.post('/kassa/pay', {
                onSuccess: () => {
                    this.modalMsg = 'Verkoop succesvol!'
                    this.displayModal = true
                }
            })
            this.clearSelectedDishes()
        },
        clearSelectedDishes() {
            this.selectedDishes.splice(0, this.selectedDishes.length)
            this.order.order = []
        }
    },
    created() {
        Object.values(this.dishTypes).forEach((type, index) => this.sortedDishes[index] = [])
        Object.values(this.dishTypes).forEach(type => {
            Object.values(this.dishes).forEach(dish => {
                if (type.id === dish.dish_type_id)
                    this.sortedDishes[type.id - 1].push(dish)
            })
        })
    },
    beforeUnmount() {
        localStorage.setItem('order', JSON.stringify(this.selectedDishes))
    }
}
</script>
