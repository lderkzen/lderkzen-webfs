<template>
    <div :ref="'modal'" id="modal" class="d-flex w-100 vh-100">
        <div class="row justify-content-around mx-0 vh-50 w-100">
            <div class="col-4 align-self-center px-0">
                <div class="row align-items-start p-4 mx-0 border-1">
                    <span class="col px-0 py-3 text-tnr">{{ msg }}</span>
                    <span class="col-auto px-0 fs-3 text-muted" @click="$emit('close')">×</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal",
    props: {
        msg: String
    }
}
</script>
