const state = () => ({
    programaEstudos: [],
})

const getters = {
    programasEstudos : (state) => state.programaEstudos
};

const actions = {
    setProgramaEstudos({commit}, params) {
        commit('setProgramaEstudos', params);
    },
}

const mutations = {
    setProgramaEstudos(state, params) {
        params.assuntos.data.map(assunto => {
            params.questoes.map(questao => {
                if(questao.id_banca === params.banca.id_banca &&
                    questao.id_orgao === params.orgao.id_orgao &&
                    assunto.id_assunto === questao.id_assunto &&
                    !assunto.assunto_pai
                ) {
                    if(!state.programaEstudos.find(find => find.id_assunto === assunto.id_assunto)) {
                        assunto.banca = params.banca;
                        assunto.orgao = params.orgao;
                        assunto.lista = [];
                        assunto.lista.push(assunto);
                        state.programaEstudos = [
                            ...state.programaEstudos,
                            {...assunto},
                        ];
                     }
                }
            })
        })
    },
}

export default {
    namespaced: false,
    state,
    getters,
    actions,
    mutations
};