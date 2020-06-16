<template>
    <div v-if="items.length">
        <v-card v-for="(assunto, key) in items" :key="key" class="mt-4" max-width="98%">
            <v-card-title>
                <span class="primary--text">{{assunto.banca.no_banca}}</span>
            </v-card-title>
            <v-card-subtitle>
                {{assunto.orgao.no_orgao}}
            </v-card-subtitle>
            <v-card-text>
                <v-treeview
                    :items="assunto.lista"
                    item-key="id_assunto"
                    item-text="no_assunto"
                    item-children="assuntos_filhos"
                    open-on-click
                    activatable
                    selected-color="primary"
                >
                <template v-slot:label="{ item, open }">
                    <v-icon>
                        {{ open ? 'mdi-folder-open' : 'mdi-school' }}
                    </v-icon>
                    <span class="font-weight-bold card"> {{ item.no_assunto }}</span>
                    <v-chip class="ml-2" color="primary" v-if="item.questoes_count === 0 || item.questoes_count > 0"> {{ qtd = item.qtd_questoes ? item.qtd_questoes : item.questoes_count }} {{ qtd > 1 ? 'Questões' : 'Questão'}}</v-chip>
                </template>
                </v-treeview>
            </v-card-text>
        </v-card>

    </div>

    <div v-else>
        <v-card>
            <v-card-text>
                <span class="primary--text bolder">Você não prossui nenhum programa de estudos cadastrado!</span>
            </v-card-text>
        </v-card>

    </div>

</template>

<script>
    export default {
        name: "CardArvoreAssunto",
        props: {
            items : {
                type: Array,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>