import Vue from 'vue'
import Vuex from 'vuex'
import orgao from './modules/orgao'
import assunto from './modules/assunto'
import banca from './modules/banca'
import createLogger from '../plugins/logger'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
    modules: {
        orgao,
        assunto,
        banca,
    },
    strict: debug,
    plugins: debug ? [createLogger()] : []
})