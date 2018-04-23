//app.js
var qcloud = require('./vendor/wafer2-client-sdk/index')
var config = require('./config')

App({
    onLaunch: function () {
        //qcloud.setLoginUrl(config.service.loginUrl)
        console.log('App Launch')
        //console.log(config)
    },
    onShow: function() {
    	console.log('App Show')
    },
    onHide: function() {
    	console.log('App Hide')
    }
})