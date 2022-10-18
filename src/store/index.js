import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)
const store = new Vuex.Store({
  state: {
    list :[]
  },
  getters: {
    fetchdata(state) {
      return state.list
    },
  },
  mutations: {
    set_data(state, media) {
      state.list = media
    },
  },
  actions: {
    fetch_Data({ commit } ,url) {
      return new Promise((resolve, reject) => {
        fetch(url)
        .then((response) => response.json())
        .then((data) =>
          { 
            const media = []
            for( let i =0 ; i<data.data.length; i ++){
            const media_set = {}
            media_set.img = data.data[i].media_url
            media_set.caption = data.data[i].caption
            media_set.link = data.data[i].permalink
            media.push({...media_set})
            } 
            console.log(media) 
            commit('set_data', media)     
            resolve(true)
        }    
        )
          .catch((error) => {
            console.log(error)
            reject('데이터 로드에 실패하였습니다.')
          })
      })
    },

  },
})

export default store
