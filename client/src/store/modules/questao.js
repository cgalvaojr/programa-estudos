import axios from '../../request/index';

const state = () => ({
    questao: [],
    loadingQuestoes: true
})

const getters = {
    questoes : (state) => state.questao
};

const actions = {
    fetchAllQuestoes({commit, state}) {
        axios.get('/questao').then(response => {
            commit('fetchAllQuestoes', response, state);
            commit('loadingQuestoes', false)
        });
    },
    loadingQuestoes({commit, status}) {
        commit('loadingQuestoes', status);
    }
}

const mutations = {
    fetchAllQuestoes(state, {data}) {
        state.questao = data;
    },
    loadingQuestoes(state, status) {
        state.loadingQuestoes = status;
    }
}

export default {
    namespaced: false,
    state,
    getters,
    actions,
    mutations
};