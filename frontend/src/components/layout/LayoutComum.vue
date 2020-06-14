<template>
    <div class="animated fadeIn">
        <v-row>
            <v-col
                    class="ml-4"
                    cols="11"
            >
        <span class="headline primary--text font-weight-bold">
          {{ title }}
        </span>
            </v-col>
            <v-col>
                <v-btn
                        v-if="backButton"
                        right
                        title="Voltar"
                        fab
                        rounded
                        small
                        @click="voltar"
                >
                    <v-icon
                            color="primary"
                            center
                    >
                        keyboard_backspace
                    </v-icon>
                </v-btn>
            </v-col>
        </v-row>
        <v-row class="ml-2">
            <v-col cols="12">
                <slot>
                    <template v-for="child in children">
                        <component
                                :is="child.viewName"
                                :key="child.name"
                                :data="child.data"
                        />
                    </template>
                </slot>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols="12">
                <v-btn
                        v-if="addButton"
                        :title="buttonTitle"
                        color="primary"
                        dark
                        absolute
                        bottom
                        right
                        fab
                        @click="action"
                >
                    <v-icon>mdi-plus</v-icon>
                </v-btn>
            </v-col>
        </v-row>
    </div>
</template>

<script>
    export default {
        name: 'LayoutComum',
        props: {
            backButton: {
                type: Boolean,
                required: false,
                default: false,
            },
            buttonTitle: {
                type: String,
                default: 'Novo',
            },
            title: {
                type: String,
                default: '',
            },
            saveRoute: {
                type: String,
                default: '',
            },
            children: Object,
            addButton: {
                type: Boolean,
                default: false,
            },
        },
        methods: {
            voltar() {
                this.$router.back();
            },
            action() {
                if (this.saveRoute.length) {
                    return this.$router.push({name: this.saveRoute});
                }
                return this.$emit('manage-dialog-new');
            },
        },
    };
</script>
