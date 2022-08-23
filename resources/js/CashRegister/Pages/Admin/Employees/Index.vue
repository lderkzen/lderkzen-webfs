<template>
    <Head title="Personeel" />
    <div class="container-fluid px-0">
        <div id="resource-container" class="text-center pt-4 px-2 pb-2">
            <div class="outlined p-4">
                <div id="resource-table-md" class="mx-auto text-center">
                    <div class="row fw-bold mx-0 bb-blue">
                        <div class="col-2 px-0"><span>Werknemer Nr.</span></div>
                        <div class="col-3 px-0 bx-blue"><span>Rol</span></div>
                        <div class="col-7 row mx-0 justify-content-around px-0">
                            <span class="col-auto px-0">Acties</span>
                            <Link href="/kassa/admin/werknemers/aanmaken" class="create-anchor col-auto px-0">+ Maak een nieuwe gebruiker aan...</Link>
                        </div>
                    </div>
                    <div v-for="employee in employees" class="row mx-0 resource">
                        <span class="col-2 px-0">{{ employee.employee_nr }}</span>
                        <span class="col-3 px-0">{{ roles.find(role => role.id === employee.role_id).role }}</span>
                        <div class="col-7 row mx-0 px-0 text-start">
                            <span class="col-auto ps-0 pe-1"><Link :href="`/kassa/admin/werknemers/${ employee.employee_nr }/aanpassen`" class="d-inline-block btn-resource btn-blue">Aanpassen</Link></span>
                            <span class="col-auto ps-0 pe-1"><Link as="button" :href="`/kassa/admin/werknemers/${ employee.employee_nr }`" class="btn-resource btn-red" method="DELETE" :disabled="this.$page.props.auth.user.employee_nr === employee.employee_nr">Verwijderen</Link></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Admin.Employees.Index",
    props: {
        employees: Object,
        roles: Object,
    }
}
</script>

<style scoped>
    @import '/css/cash_register/admin_resource.css';
</style>
