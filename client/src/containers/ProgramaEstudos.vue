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
            :not-found="notFoundGetter"
        />

        <card-arvore-assunto :items="programaDeEstudosGetter"  />
    </LayoutComum>
</template>

<script>
    import LayoutComum from "../components/layout/LayoutComum";
    import CriarProgramaEstudos from "../components/CriarProgramaEstudos";
    import {mapActions, mapGetters} from 'vuex';
    import CardArvoreAssunto from "../components/CardArvoreAssunto";
    export default {
        name: "ProgramaEstudos",
        components: {CardArvoreAssunto, CriarProgramaEstudos, LayoutComum},
        data() {
            return {
                dialogCadastrarProgramaEstudos: false,
                notFound: false
            }
        },
        watch:{
            programaDeEstudosGetter(val){
                if(val) {
                    this.manageDialogCadastrarPrograma();
                }
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
                notFoundGetter: 'notFound'
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
                setNotFound: 'setNotFound'
            }),
            manageDialogCadastrarPrograma() {
                this.dialogCadastrarProgramaEstudos = !this.dialogCadastrarProgramaEstudos;
                if(this.dialogCadastrarProgramaEstudos) {
                    this.setNotFound(false);
                }
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
            });

            this.fetchAllOrgaos().then(() => {
                this.loadingOrgaos(false);
            });

            this.fetchAllBancas().then(() => {
                this.loadingBancas(false);
            });
        }
    }
</script>