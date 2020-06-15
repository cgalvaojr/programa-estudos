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
                if(questao.id_banca === params.id_banca &&
                    questao.id_orgao === params.id_orgao &&
                    assunto.id_assunto === questao.id_assunto &&
                    !assunto.assunto_pai
                ) {
                    console.log('vai puxar');
                    state.programaEstudos = [
                        ...state.programaEstudos,
                        assunto,
                    ];
                }
            })
        })
        // state.programaEstudos = [
        //     arrAssuntos,
        //     ...state.programaEstudos
        // ];
    },
}
// {
//     no_assunto: '',
//         qtdQuestoes: 0,
//     assuntos_filhos: [
//     { no_assunto: '', qtdQuestoes: 0, id_assunto_pai}
// ]
// }
export default {
    namespaced: false,
    state,
    getters,
    actions,
    mutations
};