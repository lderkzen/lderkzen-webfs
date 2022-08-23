<template>
    <Head title="Login" />
    <div class="mt-5">
        <div class="container d-flex flex-column justify-content-center mt-5">
            <div id="login-container" class="mx-auto p-4">
                <form @submit.prevent="this.form.post('/kassa/login')" class="text-center">
                    <input v-model="form.employee_nr" type="number" placeholder="Medewerker Nummer" autocomplete="username" class="w-100 mb-1">
                    <input v-model="form.password" type="password" placeholder="Wachtwoord" autocomplete="password" class="w-100 mb-1">
                    <input type="submit" class="w-50" :disabled="form.processing" value="inloggen" />
                </form>
            </div>
            <span v-if="form.errors.all" v-text="form.errors.all" class="fw-bold text-danger text-center mt-2"></span>
        </div>
    </div>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3"

export default {
    name: "Login",
    props: {
        form: {
            default: useForm({
                employee_nr: '',
                password: ''
            })
        }
    }
}
</script>

<style scoped>
    @import '/css/cash_register/login.css';
</style>
