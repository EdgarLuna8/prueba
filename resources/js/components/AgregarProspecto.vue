<template>
    <button
    class="btn btn-success"
    type="submit"
    @click="agregarProspecto">
    Agregar Prospecto
    </button>
</template>

<script>
export default {
    methods: {
        agregarProspecto(){
            this.$swal.fire(
            'Exito!',
            'Prospecto guardado con exito.',
            'success'
            )
        }
    }
}
</script>
