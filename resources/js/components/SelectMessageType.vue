<template>
    <modal-window :subject="selectedPunct" rout="/send_consult" redirect="/thencs" hesh="showModal" title="Обратная связь" subtitle="Мы свяжемся с Вами в течении 15 минут" ></modal-window>
    <div  class="connect-agro__block-formSelect">
        <div  class="connect_wrapper">
            <div @click.prevent="toggleList()" class="connect-agro__block-formSelect-select" :class="{'active':showList}">
                <div class="selected_punct"> {{(selectedPunct == null)?"Выберите нужный пункт":selectedPunct}} </div>
            </div>

            <div v-show="showList" class="list">
                <div @click="selectElement(item)" v-for="(item, index) in punctsList" :key="index" class="selected_punct">{{ item }}</div>
            </div>
        </div>


        <a href="#showModal" class="connect-agro__block-formSelect-select-btn"></a>
    </div>
</template>

<script>
import ModalWindow from './ModalWindow.vue'
export default {
    data() {
        return {
            showList: false,
            selectedPunct: null,
            punctsList:[
                "Сотрудничество",
                "Карьера",
                "Покупка продукции",
                "СМИ",
            ],
        }
    },

    components: {
        ModalWindow
    },

    methods:{
        toggleList() {
            this.showList = !this.showList
        },

        selectElement(value) {
            this.selectedPunct = value
            this.toggleList()
        }
    }

}
</script>

<style>

</style>
