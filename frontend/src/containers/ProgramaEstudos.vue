<template>
    <LayoutComum
        title="Programas cadastrados"
        buttonTitle="Cadastrar novo programa de estudos"
        add-button
        @manage-dialog-new="manageDialogCadastrarPrograma"
    >
        <criar-programa-estudos
            v-model="dialogCadastrarProgramaEstudos"
            :orgaos="orgaosGetter"
            :bancas="bancasGetter"
            @manage-dialog="manageDialogCadastrarPrograma"
        />
    </LayoutComum>
</template>

<script>
    import LayoutComum from "../components/layout/LayoutComum";
    import CriarProgramaEstudos from "../components/CriarProgramaEstudos";
    import {mapActions, mapGetters} from 'vuex';
    export default {
        name: "ProgramaEstudos",
        components: {CriarProgramaEstudos, LayoutComum},
        data() {
            return {
                dialogCadastrarProgramaEstudos: false
            }
        },
        computed: {
            ...mapGetters({
                orgaosGetter: 'orgaos',
                bancasGetter: 'bancas',
                loadingOrgaosGetter: 'loadingOrgaos',
                loadingBancasGetter: 'loadingBancas'
            }),
        },
        methods: {
            ...mapActions({
                fetchAllOrgaos: 'fetchAllOrgaos',
                fetchAllBancas: 'fetchAllBancas',
                loadingOrgaos: 'loadingOrgaos',
                loadingBancas: 'loadingBancas'
            }),
            manageDialogCadastrarPrograma() {
                this.dialogCadastrarProgramaEstudos = !this.dialogCadastrarProgramaEstudos;
            },
        },
        mounted() {
            this.fetchAllOrgaos().then(() => {
                this.loadingOrgaos(false);
            });

            this.fetchAllBancas().then(() => {
                this.loadingBancas(false);
            })
        }
    }
</script>