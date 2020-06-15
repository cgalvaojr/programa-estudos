import axios from '../../request/index';

const state = () => ({
    orgaos: [],
    loadingOrgaos: true
})

const getters = {
    orgaos : (state) => state.orgaos
};

const actions = {
    fetchAllOrgaos({commit, state}) {
        axios.get('/orgao').then(response => {
            commit('fetchAllOrgaos', response, state);
            commit('loadingOrgaos', false)
        });
    },
    loadingOrgaos({commit, status}) {
        commit('loadingOrgaos', status);
    }
}

const mutations = {
    fetchAllOrgaos(state, {data}) {
        state.orgaos = data;
    },
    loadingOrgaos(state, status) {
        state.loadingOrgaos = status;
    }
}

export default {
    namespaced: false,
    state,
    getters,
    actions,
    mutations
};