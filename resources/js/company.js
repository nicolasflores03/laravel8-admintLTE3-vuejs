// Vue.component('Company', require('./components/Company.vue').default);
const app = new Vue({
    el:'#app',
    data: {
        'inputmessage': '',
        'try': 'hello',
        'localData':[
            {
            "id": 1,
            "name": "UGC"
            },
            {
            "id": 2,
            "name": "CEMENT"
            },
            {
            "id": 3,
            "name": "Company 3"
            }
        ]
    }
});