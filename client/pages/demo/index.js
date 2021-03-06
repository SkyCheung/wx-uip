// pages/demo/index.js
var config = require('../../config')
Page({

  /**
   * 页面的初始数据
   */
  data: {
    banner: [],
    indicatorDots: true,
    autoplay: true,
    interval: 5000,
    duration: 1000,

    menu:[1,2,3,4]
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var url = config.service.host + '/weapp/index/banner';
    var that = this
    //console.log(url)
    wx.request({
      url: url, 
      data: {
        x: '123',
        y: '456'
      },
      header: {
        'content-type': 'application/json' // 默认值
      },
      success: function (res) {
        console.log(res.data)
        that.setData({
          //banner : res.data.banner,
          menu : res.data.icon     
        })
      }
    })
    
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
  
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
  
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {
  
  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
  
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
  
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
    console.log(555);
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {
  
  }
})