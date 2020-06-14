import axios from '../../request/index';

const state = () => ({
    bancas: [],
    loadingbancas: true
})

const getters = {
    bancas : (state) => state.bancas
};

const actions = {
    fetchAllBancas({commit, state}) {
        axios.get('/banca').then(response => {
            commit('fetchAllBancas', response, state);
            commit('loadingBancas', false)
        });
    },
    loadingbancas({commit, status}) {
        commit('loadingBancas', status);
    }
}

const mutations = {
    fetchAllBancas(state, {data}) {
        state.bancas = data;
    },
    loadingbancas(state, status) {
        state.loadingbancas = status;
    }
}

export default {
    namespaced: false,
    state,
    getters,
    actions,
    mutations
};