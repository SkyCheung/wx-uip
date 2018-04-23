//app.js
var qcloud = require('./vendor/wafer2-client-sdk/index')
var config = require('./config')

App({
    onLaunch: function () {
        //qcloud.setLoginUrl(config.service.loginUrl)
        console.log('App Launch')
    },
    onShow: function() {
    	console.log('App Show')
    },
    onHide: function() {
    	console.log('App Hide')
    }
})