<template>
    <div id="cash_register" class="container-fluid d-flex flex-column px-0">
        <Nav />
        <slot />
    </div>
</template>

<script>
import Nav from "./Nav"

export default {
    components: { Nav },
    name: "Layout"
}
</script>
