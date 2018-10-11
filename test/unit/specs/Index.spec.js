import Vue from 'vue'
import Index from '@/components/Index'

describe('Index.vue', () => {
  it('should render correct contents', () => {
    const Constructor = Vue.extend(Index)
    const vm = new Constructor().$mount()
    expect(vm.$el.querySelector('.container h1').textContent)
      .toEqual('Minecraft MICMNIS Server')
  })
})
