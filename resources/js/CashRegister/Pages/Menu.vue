<template>
    <Head title="Menukaart" />
    <div v-html="menu" class="outlined m-3 mt-4"></div>
</template>

<script>
export default {
    name: "Menu",
    props: {
        menu: String
    }
}
</script>
