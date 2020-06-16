const state = () => ({
    programaEstudos: [],
    notFound: false
})

const getters = {
    programasEstudos : (state) => state.programaEstudos,
    notFound : (state) => state.notFound
};

const actions = {
    setProgramaEstudos({commit}, params) {
        commit('setProgramaEstudos', params);
    },
    setNotFound({commit}, params) {
        commit('setNotFound', params);
    },
}

const mutations = {
    setProgramaEstudos(state, params) {
        state.notFound = false;
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
                } else {
                    state.notFound = true;
                }
            })
        })
    },
    setNotFound(state, status) {
        state.notFound = status;
    }
}

export default {
    namespaced: false,
    state,
    getters,
    actions,
    mutations
};