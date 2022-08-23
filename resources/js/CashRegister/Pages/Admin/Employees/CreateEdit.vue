<template>
    <Head title="Personeel" />
    <div class="container-fluid px-0">
        <div class="row justify-content-center align-items-center mx-0">
            <div class="col-5 pt-4 px-2 pb-2">
                <div class="outlined p-4">
                    <form @submit.prevent="employee ? form.put(`/kassa/admin/werknemers/${ employee.employee_nr }`) : form.post('/kassa/admin/werknemers')">
                        <input v-model="form.employee_nr" type="number" placeholder="Medewerker Nummer" min="1000" max="9999" class="w-100 mb-1" />
                        <small v-if="form.errors.employee_nr" v-text="form.errors.employee_nr" class="fw-bold text-danger"></small>

                        <input v-model="form.password" type="text" :placeholder="employee ? 'Nieuw Wachtwoord' : 'Wachtwoord'" autocomplete="new-password" class="w-100 mb-1" />
                        <small v-if="form.errors.password" v-text="form.errors.password" class="fw-bold text-danger"></small>

                        <select v-model="form.role_id" class="w-100 mb-1">
                            <option disabled value="">Selecteer een rol</option>
                            <option v-for="role in roles" :value="role.id">{{ role.role }}</option>
                        </select>
                        <small v-if="form.errors.role_id" v-text="form.errors.role_id" class="fw-bold text-danger"></small>

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
    name: "Admin.Employees.CreateEdit",
    props: {
        employee: Object,
        roles: Object
    },
    data() {
        return {
            form: useForm(`CreateEditEmployee${ this.employee ? this.employee.employee_nr : '' }`, {
                employee_nr: this.employee ? this.employee.employee_nr : '',
                password: '',
                role_id: this.employee ? this.employee.role_id : 1,
            })
        }
    }
}
</script>

<style scoped>
    @import '/css/cash_register/admin_resource.css';
</style>
