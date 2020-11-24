<template>
    <el-card class="box-card">
        <div slot="header" class="clearfix">
            <h1>Конвертер валют</h1>
        </div>
        <div class="container">
            <span>Конвертировать из </span>
            <el-input placeholder="" class="currency_input" v-model="fromValue" @change="convert"/>
            <el-select v-model="fromCurrency" placeholder="Выберите валюту" @change="convert" :default-first-option="true">
                <el-option
                    v-for="item in currencies"
                    :key="item.char_code"
                    :label="item.name"
                    :value="item">
                    <span style="float: left">{{ item.name }}</span>
                    <span style="float: right; color: #8492a6; font-size: 13px">{{ item.char_code }}</span>
                </el-option>
            </el-select>

            <span class="divider"> в </span>

            <el-input placeholder="" class="currency_input" v-model="toValue" :readonly="true"/>
            <el-select v-model="toCurrency" placeholder="Выберите валюту" @change="convert">
                <el-option
                    v-for="item in currencies"
                    :key="item.char_code"
                    :label="item.name"
                    :value="item">
                    <span style="float: left">{{ item.name }}</span>
                    <span style="float: right; color: #8492a6; font-size: 13px">{{ item.char_code }}</span>
                </el-option>
            </el-select>
        </div>
    </el-card>
</template>

<script>

import { getAllCurrencies } from '../api/currency'

export default {
    name: "CurrencyComponent",
    data() {
        return {
            currencies: [],
            fromValue: undefined,
            fromCurrency: undefined,
            toValue: undefined,
            toCurrency: undefined
        }
    },
    created() {
        this.getCurrencies()
    },
    methods: {
        getCurrencies() {
            getAllCurrencies().then(({ data }) => {
                this.currencies = data
                this.fromCurrency = this.currencies.find(x => x.char_code === 'RUR')
                this.loading = false
            }).catch((err) => {
                this.loading = false

                console.log(err.response.status)
            })
        },
        convert() {
            if (this.toCurrency) {
                let rubEqFrom = Number(this.fromValue) * (Number(this.fromCurrency.value) / Number(this.fromCurrency.nominal))
                this.toValue = rubEqFrom / (Number(this.toCurrency.value) / Number(this.toCurrency.nominal))
            }
        }
    }
}
</script>

<style rel="stylesheet/scss" lang="scss">
.container {
    .currency_input {
        width: 200px;
    }
    .divider {
        margin: 0 20px;
    }
}
</style>
