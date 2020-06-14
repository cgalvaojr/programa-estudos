<template>
    <v-dialog
        v-model="dialog"
        max-width="80%"
        persistent
    >
        <v-card>
            <v-card-title>
                <span
                    class="title mt-2 primary--text font-weight-bold"
                >
                  {{ title }}
                </span>
        </v-card-title>

        <v-divider class="mb-2" />

        <v-card-text>
            <v-row justify="center">
                <slot>
                    <template v-for="(child) in children">
                        <component
                                :is="child.viewName"
                                :key="child.name"
                                :data="child.data"
                        />
                    </template>
                </slot>
            </v-row>
        </v-card-text>
        <v-card-actions>
            <v-spacer />
            <v-btn
                    color="darken-1"
                    text
                    outlined
                    @click="$emit('manage-dialog')"
            >
                Cancelar
            </v-btn>
            <v-btn
                    color="primary darken-1"
                    raised
                    :loading="loadingSave"
                    @click="$emit('request-callback')"
            >
                Confirmar
            </v-btn>
        </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
    export default {
        name: 'FormDialog',
        props: {
            loadingSave: {
                type: Boolean,
                required: true,
            },
            title: {
                default: 'Atenção',
                type: String,
            },
            children: Object,
            value: {
                type: Boolean,
                default: false,
            },
        },
        data() {
            return {
                dialog: false,
            };
        },
        watch: {
            value(val) {
                this.dialog = val;
            },
        },
        mounted() {
            this.dialog = this.value;
        },
        methods: {
            callbackFunction() {
                // this.$emit(this.callback);
            },
        },
    };
</script>
