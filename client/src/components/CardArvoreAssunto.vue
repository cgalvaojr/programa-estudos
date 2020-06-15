<template>
    <v-card>
        <v-card-title>{{item.no_assunto}}</v-card-title>
        <v-card-subtitle>{{item.qtdQuestoes}} questões</v-card-subtitle>
        <v-card-text>
            <v-treeview
                    :items="item.assuntos"
                    item-key="id_assunto"
                    item-text="no_assunto"
                    item-children="assuntos_filhos"
                    open-on-click
                    activatable
                    selected-color="primary"
            >
                <template v-slot:label="{ item, open }">
                    <v-icon v-if="item.assuntos_filhos.length">
                        {{ open ? 'folder_open' : 'folder' }}
                    </v-icon>
                    <v-icon v-else>
                        question_answer
                    </v-icon>
                    <span class="font-weight-bold">{{ item.no_assunto }}</span>
                </template>
            </v-treeview>
        </v-card-text>
    </v-card>
</template>

<script>
    export default {
        name: "CardArvoreAssunto"
    }
</script>

<style scoped>

</style>