<template>
    <Head title="Admin" />
    <div class="container-fluid px-0">
        <div id="btn-container" class="d-flex justify-content-between flex-wrap text-center pt-4 px-2 pb-2">
            <div class="w-50 p-2">
                <Link class="d-inline-flex align-items-center w-100 h-100 big-btn" href="/kassa/admin/werknemers"><span class="w-100 text-center">Personeel</span></Link>
            </div>
            <div class="w-50 p-2">
                <Link class="d-inline-flex align-items-center w-100 h-100 big-btn" href="/kassa/admin/gerechten"><span class="w-100 text-center">Gerechten</span></Link>
            </div>
            <div class="w-50 p-2">
                <Link class="d-inline-flex align-items-center w-100 h-100 big-btn" href="/kassa/admin/aanbiedingen"><span class="w-100 text-center">Aanbiedingen</span></Link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Admin.Index"
}
</script>

<style scoped>
    @import '/css/cash_register/admin.css';
</style>
