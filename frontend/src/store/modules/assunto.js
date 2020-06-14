import axios from '../../request/index';

const state = () => ({
    assuntos: [],
    loadingAssuntos: true
})

const getters = {
    assuntos : (state) => state.assuntos
};

const actions = {
    fetchAllAssuntos({commit, state}) {
        axios.get('/assunto').then(response => {
            commit('fetchAllAssuntos', response, state);
            commit('loadingAssuntos', false)
        });
    },
    loadingassuntos({commit, status}) {
        commit('loadingAssuntos', status);
    }
}

const mutations = {
    fetchAllAssuntos(state, {data}) {
        state.assuntos = data;
    },
    loadingAssuntos(state, status) {
        state.loadingassuntos = status;
    }
}

export default {
    namespaced: false,
    state,
    getters,
    actions,
    mutations
};