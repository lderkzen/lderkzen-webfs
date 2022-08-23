<template>
    <nav id="navbar" class="row mx-0">
        <div class="col-auto px-0">
            <img :src="'/images/goodpay.png'" alt="GoodPay Logo" class="goodpay-logo">
        </div>
        <div v-if="this.$page.props.auth.user" class="col text-center">
            <Link v-if="this.$page.props.auth.user.can.accessOrder" class="d-inline-block btn-nav py-1 m-2" href="/kassa/order">Kassa</Link>
            <Link v-if="this.$page.props.auth.user.can.accessMenu" class="d-inline-block btn-nav py-1 m-2" href="/kassa/menukaart">Gerechten</Link>
            <Link v-if="this.$page.props.auth.user.can.accessSales" class="d-inline-block btn-nav py-1 m-2" href="/kassa/sales">Verkoop Overzicht</Link>
            <Link v-if="this.$page.props.auth.user.can.accessAdmin" class="d-inline-block btn-nav py-1 m-2" href="/kassa/admin">Admin</Link>
            <Link as="button" class="d-inline-block btn-nav py-1 ms-5 m-2" href="/kassa/logout" method="POST">Log uit</Link>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Nav"
}
</script>
