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
            @inserir-programa-estudos="inserirProgramaEstudos"

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
                assuntosGetter: 'assuntos',
                questoesGetter: 'questoes',
                programaDeEstudosGetter: 'programasEstudos',
                loadingOrgaosGetter: 'loadingOrgaos',
                loadingBancasGetter: 'loadingBancas',
                loadingAssuntosGetter: 'loadingASsuntos',
                loadingQuestoesGetter: 'loadingQuestoes',
            }),
        },
        methods: {
            ...mapActions({
                fetchAllOrgaos: 'fetchAllOrgaos',
                fetchAllBancas: 'fetchAllBancas',
                fetchAllAssuntos: 'fetchAllAssuntos',
                fetchAllQuestoes: 'fetchAllQuestoes',
                setProgramaEstudos: 'setProgramaEstudos',
                loadingOrgaos: 'loadingOrgaos',
                loadingBancas: 'loadingBancas',
                loadingAssuntos: 'loadingAssuntos',
                loadingQuestoes: 'loadingQuestoes',
            }),
            manageDialogCadastrarPrograma() {
                this.dialogCadastrarProgramaEstudos = !this.dialogCadastrarProgramaEstudos;
            },
            inserirProgramaEstudos(params) {
                params.assuntos = this.assuntosGetter;
                params.questoes = this.questoesGetter;
                this.setProgramaEstudos(params);
            }
        },
        mounted() {
            this.fetchAllAssuntos().then(() => {
                this.loadingAssuntos(false);
            });
            this.fetchAllQuestoes().then(() => {
                this.loadingQuestoes(false);
            })
            this.fetchAllOrgaos().then(() => {
                this.loadingOrgaos(false);
            });

            this.fetchAllBancas().then(() => {
                this.loadingBancas(false);
            })
        }
    }
</script>