$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})

////////////////////音频/////////////////////////////////////////////////////////////////
var player = "";
function play(urls) {

	  // 本地视频视频
      var player = document.getElementById("player");  //获取ID为player元素
      player.src = urls;                //修改播放器的src
      player.style.display = "block"; //显示制定的元素
      
       //修改音频和下载
      var playerbg = document.getElementById("playerbg");  //获取ID为playerbg元素
      playerbg.style.display = "block"; //显示制定的元素

      var audiodown = document.getElementById("playerbgdown");  //获取ID为playerbgdown元素
      audiodown.setAttribute("href",urls);	//修改href
      audiodown.setAttribute("download",urls);	//修改href


    //修改播放器
      var tit = urls;
      var arr = tit.split(".");
      var lrc = arr[0] + ".html";
      // alert(lrc);
      document.getElementById("myModalLabel").innerText = arr[0]; //修改标题
      document.getElementById("inobj").data = lrc;  //修改导入文件  
     
}
////////////////////youtube视频/////////////////////////////////////////////////////////////////
function ytb(urls) {
  player = document.getElementById("player");  //获取ID为player元素
  player.src = 'https://www.youtube.com/embed/' + urls + '?autoplay=1';    //修改播放器的src
  player.style.display = "block"; //显示制定的元素

  var audiodown = document.getElementById(urls);  //获取down元素
  audiodown.setAttribute("href",'https://www.y2mate.com/youtube-mp3/' + urls);   // 修改href
  
}


////////////////////代码快速复制/////////////////////////////////////////////////////////////////
   $(function(){
        //给每一串代码元素增加复制代码节点
        let preList = $(".container-fluid pre");
        for (let pre of preList) {
            //给每个代码块增加上“复制代码”按钮
            let btn = $("<span class=\"btn-pre-copy\" onclick='preCopy(this)'>复制代码</span>");
            btn.prependTo(pre);
        }
    });

/**
     * 执行复制代码操作
     * @param obj
     */
    function preCopy(obj) {
        //执行复制
        let btn = $(obj);
        let pre = btn.parent();
        //为了实现复制功能。新增一个临时的textarea节点。使用他来复制内容
        let temp = $("<textarea></textarea>");
        //避免复制内容时把按钮文字也复制进去。先临时置空
        btn.text("");
        temp.text(pre.text());
        temp.appendTo(pre);
        temp.select();
        document.execCommand("Copy");
        temp.remove();
        //修改按钮名
        btn.text("复制成功");
        //一定时间后吧按钮名改回来
        setTimeout(()=> {
            btn.text("复制代码");
        },1500);
    }

    /**
     * 全选文本
     * @param obj
     */
    function selectAll(obj){
        $(obj).select();
    }
