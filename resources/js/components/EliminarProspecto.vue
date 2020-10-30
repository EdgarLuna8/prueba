<template>
    <button
        class="btn btn-danger"
        @click="eliminarProspecto"
    >Eliminar
    </button>
</template>

<script>
    export default {
        props: ['prospectoId'],
        methods: {
            eliminarProspecto(){
                // console.log('Eliminando...', this.prospectoId);

                this.$swal.fire({
                title: '¿Estas seguro de eliminar al prospecto?',
                text: "Despues de esta accion no podras revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'No, cancelar'
                }).then((result) => {
                    if (result.value) {

                        const params = {
                            id: this.prospectoId,
                            _method: 'delete'
                        }

                        axios.delete('/prospectos/destroy/${this.prospectoId}', params)
                            .then( respuesta => {
                                // console.log(respuesta)
                                this.$swal.fire(
                                'Deleted!',
                                'Borrado con exito',
                                'success'
                                )
                            }).catch( e => {
                                console.log(e)
                            })

                    }
                    })
            }
        }
    }
</script>
