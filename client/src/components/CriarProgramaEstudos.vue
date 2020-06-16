<template>
    <form-dialog
        v-model="value"
        title="Cadastrar programa de estudos"
        :loading-save="loadingEnviar"
        @manage-dialog="$emit('manage-dialog')"
        @request-callback="enviarFormulario"
    >
        <v-form
            ref="form"
            lazy-validation
            autocomplete="off"
            class="col-12"
        >
            <v-row>
                <v-col>
                    <v-select
                        v-model="formulario.banca"
                        :items="bancas"
                        item-text="no_banca"
                        item-value="id_banca"
                        :rules="[rules.required]"
                        label="Banca"
                        return-object
                    />
                </v-col>
                <v-col>
                    <v-select
                        v-model="formulario.orgao"
                        :items="orgaos"
                        item-text="no_orgao"
                        item-value="id_orgao"
                        :rules="[rules.required]"
                        label="Órgão"
                        return-object
                    />
                </v-col>
            </v-row>
        </v-form>
    </form-dialog>
</template>

<script>
    import FormDialog from "./dialogs/FormDialog";
    export default {
        name: "CriarProgramaEstudos",
        components: {FormDialog },
        data() {
            return {
                dialog: false,
                loadingEnviar: false,
                formulario: {
                    orgao : {},
                    banca: {}
                },
                rules: {
                    required: value => !!value || 'Este campo é obrigatório',
                }
            }
        },
        props:{
            value: {
                type: Boolean
            },
            orgaos: {
                type: Array,
                required: true
            },
            bancas: {
                type: Array,
                required: true
            },
        },
        methods:{
            enviarFormulario(){
                if (this.$refs.form.validate()) {
                    this.$emit('inserir-programa-estudos', this.formulario);
                }
            },
            resetForm(){
                this.formulario = {
                    orgao : {},
                    banca: null
                };
            }
        },
        watch: {
            value(val) {
                this.dialog = val;

                if (!val) {
                    this.resetForm();
                    this.$refs.form.resetValidation();
                }
            },
        }
    }
</script>

<style scoped>

</style>