<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1080,  user-scalable=no" />
    <title>JS Bin</title>
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
</head>
<body>


<div class="top">
    <div class="top-wrap clearfloat">
        <div class="left fl">
            <img src="" alt="">
           返回
        </div>
        <div class="title fl">
             停车费缴纳
        </div>
        <div class="right fl">
           缴费记录
        </div>
    </div>
</div>


<div class="tab_wrap ">
    <div class=" clearfloat">
        <div class="tab1 fl tab_active">当前账单</div>
        <div class="tab2 fl  "><span>我的月卡</span></div>
    </div>
</div>
<div style="position:absolute;z-index:99">
<button id="month_true" style="width:200px;height:100px; font-size: 20px;margin-left:800px;">有月卡</button>
<button id="month_false" style="width:200px;height:100px; font-size: 20px;margin-left:800px;">无月卡</button>
</div>
<div class="main">
    <div class="list_wrap clearfloat ">

        <div class="list_car fl">

            <div class="list_title ">
                <img class="park_fee_png" src="./online_park_fee.png" alt="" style="">
                <span class="list_title_word">停车费缴纳</span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="list_title_time">09/10&nbsp;&nbsp;&nbsp;&nbsp;16:00</span>
            </div>
            <br>
            <div class="list_content clearfloat">
			  <div class=" fl">  <input type="checkbox" name="list_car_radio" id="list_car_radio" class="list_car_radio" ><label for="list_car_radio"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="list_car_new_radio" /></label></div>
          
                <div class="fl">
                    <span  class="list_content_word">我家的车</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span  class="list_content_licence">粤B.1W836</span>
                </div>
                <div  class="list_content_money fr">￥23.5</div>
                <div class="list_content_time">09/10&nbsp;&nbsp;12:00&nbsp;至&nbsp;09/10&nbsp;&nbsp;16:00</div>
            </div>
            <div class="list_content clearfloat">
         <div class=" fl">  <input type="checkbox" name="list_car_radio" id="list_car_radio" class="list_car_radio" ><label for="list_car_radio"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="list_car_new_radio" /></label></div>
                <div class="fl ">
                    <span  class="list_content_word">我家的车</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span  class="list_content_licence">粤B.1W836</span>
                </div>
                <div  class="list_content_money fr">￥23.5</div>
                <div class="list_content_time">09/10&nbsp;&nbsp;12:00&nbsp;至&nbsp;09/10&nbsp;&nbsp;16:00</div>
            </div>
        </div>
    </div>


    <div class="list_wrap clearfloat ">


        <div class="list_visitor fl">

            <div class="list_title ">
                <img class="park_fee_png" src="./online_park_fee.png" alt="" style="">
                <span class="list_title_word">停车费缴纳</span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="list_title_time">09/10&nbsp;&nbsp;&nbsp;&nbsp;16:00</span>
            </div>
            <br>
            <div class="list_content clearfloat">
			  <div class=" fl">  <input type="checkbox" name="list_visitor_radio" id="list_visitor_radio" class="list_visitor_radio" ><label for="list_visitor_radio"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="list_visitor_new_radio" /></label></div>
       
                <div class="fl">
                    <span  class="list_content_word">访客： <span  class="list_content_name">刘总</span></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span  class="list_content_licence">粤B.1W836</span>
                </div>
                <div  class="list_content_money fr">￥23.5</div>
                <div class="list_content_time">09/10&nbsp;&nbsp;12:00&nbsp;至&nbsp;09/10&nbsp;&nbsp;16:00</div>
            </div>

            <div class="list_content clearfloat">
                 <div class=" fl">  <input type="checkbox" name="list_visitor_radio" id="list_visitor_radio" class="list_visitor_radio" ><label for="list_visitor_radio"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="list_visitor_new_radio" /></label></div>
                <div class="fl">
                    <span  class="list_content_word">访客： <span  class="list_content_name">刘总</span></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span  class="list_content_licence">粤B.1W836</span>
                </div>
                <div  class="list_content_money fr">￥23.5</div>
                <div class="list_content_time">09/10&nbsp;&nbsp;12:00&nbsp;至&nbsp;09/10&nbsp;&nbsp;16:00</div>
            </div>

        </div>
    </div>

	
	  <div class="list_wrap clearfloat ">


        <div class="list_visitor fl">

            <div class="list_title ">
                <img class="park_fee_png" src="./online_park_fee.png" alt="" style="">
                <span class="list_title_word">停车费缴纳</span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="list_title_time">09/10&nbsp;&nbsp;&nbsp;&nbsp;16:00</span>
            </div>
            <br>
            <div class="list_content clearfloat">
			  <div class=" fl">  <input type="checkbox" name="list_visitor_radio" id="list_visitor_radio" class="list_visitor_radio" ><label for="list_visitor_radio"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="list_visitor_new_radio" /></label></div>
       
                <div class="fl">
                    <span  class="list_content_word">访客： <span  class="list_content_name">刘总</span></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span  class="list_content_licence">粤B.1W836</span>
                </div>
                <div  class="list_content_money fr">￥23.5</div>
                <div class="list_content_time">09/10&nbsp;&nbsp;12:00&nbsp;至&nbsp;09/10&nbsp;&nbsp;16:00</div>
            </div>

            <div class="list_content clearfloat">
                 <div class=" fl">  <input type="checkbox" name="list_visitor_radio" id="list_visitor_radio" class="list_visitor_radio" ><label for="list_visitor_radio"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="list_visitor_new_radio" /></label></div>
                <div class="fl">
                    <span  class="list_content_word">访客： <span  class="list_content_name">刘总</span></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span  class="list_content_licence">粤B.1W836</span>
                </div>
                <div  class="list_content_money fr">￥23.5</div>
                <div class="list_content_time">09/10&nbsp;&nbsp;12:00&nbsp;至&nbsp;09/10&nbsp;&nbsp;16:00</div>
            </div>

        </div>
    </div>
	
	  <div class="list_wrap clearfloat ">


        <div class="list_visitor fl">

            <div class="list_title ">
                <img class="park_fee_png" src="./online_park_fee.png" alt="" style="">
                <span class="list_title_word">停车费缴纳</span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="list_title_time">09/10&nbsp;&nbsp;&nbsp;&nbsp;16:00</span>
            </div>
            <br>
            <div class="list_content clearfloat">
			  <div class=" fl">  <input type="checkbox" name="list_visitor_radio" id="list_visitor_radio" class="list_visitor_radio" ><label for="list_visitor_radio"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="list_visitor_new_radio" /></label></div>
       
                <div class="fl">
                    <span  class="list_content_word">访客： <span  class="list_content_name">刘总</span></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span  class="list_content_licence">粤B.1W836</span>
                </div>
                <div  class="list_content_money fr">￥23.5</div>
                <div class="list_content_time">09/10&nbsp;&nbsp;12:00&nbsp;至&nbsp;09/10&nbsp;&nbsp;16:00</div>
            </div>

            <div class="list_content clearfloat">
                 <div class=" fl">  <input type="checkbox" name="list_visitor_radio" id="list_visitor_radio" class="list_visitor_radio" ><label for="list_visitor_radio"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="list_visitor_new_radio" /></label></div>
                <div class="fl">
                    <span  class="list_content_word">访客： <span  class="list_content_name">刘总</span></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span  class="list_content_licence">粤B.1W836</span>
                </div>
                <div  class="list_content_money fr">￥23.5</div>
                <div class="list_content_time">09/10&nbsp;&nbsp;12:00&nbsp;至&nbsp;09/10&nbsp;&nbsp;16:00</div>
            </div>

        </div>
    </div>
	
	
	
<div class="month_wrap">

    <img src="./online_month_card_bj.png" alt="" width="900px" height="540px">

    <div class="month_title">月卡</div>
    <div class="month_village">南昌智汇小区</div>
    <div class="month_park">1号停车位</div>
    <div class="month_pay">
        <span class="month_pay_money">￥450</span>
        <span class="month_pay_time">有效期至2018-11-01</span>
        <span class="month_pay_continue">去续费</span>
    </div>
</div>

    <div class="month_wrap">
        <img src="./online_month_card_bj.png" alt="" width="900px" height="540px">
        <img class="limit_png" src="./online_card_expire.png" alt="" width="218px" height="90px">
        <div class="month_title">月卡</div>
        <div class="month_village">南昌智汇小区</div>
        <div class="month_park">2号停车位</div>
        <div class="month_pay">
            <span class="month_pay_money">￥450</span>
            <span class="month_pay_time limit">有效期至2018-11-01</span>
            <span class="month_pay_continue">去续费</span>
        </div>
    </div>


    <div class="month_wrap_none">
        <img class="month_wrap_none_img" src="./online_month_card_pic.png" alt="" width="430px" height="220px">
        <div class="month_wrap_none_word">暂无月卡，请先购买</div>
    </div>




<div class="blank"></div>
</div>

<div class="footer_wrap">
    <div class="pay_list_footer">
    <div class="footer">
        <div class="title ">支付方式</div>
        <div class="img_wrap clearfloat">
            <div class="img_wechat fl">
			<input type="radio" name="wechat_pay" id="wechat_pay" class="wechat_pay" style="display:none" checked>
			 <div class="">  <label for="pay" onclick="wechat_pay_click(this)"><img src="./online_chose_dark.png" width="" height=""  class="wechat_pay_new_radio"  /> <img  src="./online_wechat.png" alt="" style="width:100px;height:100px;"></label></div>
				<div  class="wechat_word" style="">微信支付</div>	
			</div>
			
			 <div class="img_alipay fl">
			<input type="radio" name="ali_pay" id="ali_pay" class="ali_pay" style="display:none" >
			 <div class="">  <label for="pay" onclick="ali_pay_click(this)"><img src="./online_chose_dark.png" width="" height=""  class="ali_pay_new_radio"  /> <img  src="./online_alipay.png" alt="" style="width:100px;height:100px;"></label></div>
				<div  class="alipay_word" style="">支付宝支付</div>	
			</div>
        </div>
    </div>
<style>

.img_wechat,
.img_alipay{
position:relative
}

.wechat_pay_new_radio,
.ali_pay_new_radio{
position:absolute;
left:110px;
}

</style>

    <div class="pay clearfloat">
        <div class="pay_info fl clearfloat">
            <div class="pay_info_wrap fl">
                	<input type="radio" name="pay_choice" class="pay_choice_radio" id="pay_choice" ><label for="pay_choice"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="pay_choice_new_radio"/><span class="pay_choice">全选</span></label>
            </div>
            <div class="total_wrap fr"><span class="total ">合计:&nbsp; &nbsp;<span>￥0</span></span></div>
        </div>
        <div class="pay_now fl"><span>立即支付</span></div>
    </div>

    </div>

    <div class="pay_month_footer">
    <div class="pay clearfloat">
        <div class="month_card fl clearfloat">
            <div class="month_card_wrap fl">

              <span class="month_card_buy">购买新月卡 </span>
                <span class="month_card_buytime">30天起 </span>
            </div>
            <div class="month_card_total_wrap fr">￥450起</div>
        </div>
        <div class="pay_now fl"><span>立即支付</span></div>
    </div>
    </div>


</div>



</body>
</html>

<script>
    var person_code=getUrlParam('person_code')
    var village_id=getUrlParam('village_id')
    console.log(person_code)
    console.log(village_id)
    $.ajax({
        url: 'bill_list',
        method: 'post',
        data: {
            person_code:person_code
        },
        success: function (data) {
            //var data = JSON.parse(data);
            //成功之后自动刷新页面
            $('#rewrite').modal('hide');
            layer.open({
                type: 1,
                title: false,
                //打开关闭按钮
                closeBtn: 1,
                shadeClose: false,
                skin: 'tanhcuang',
                content: '更新租赁信息成功',
                cancel: function () {
                    window.location.href = render.router.root;
                }
            });
        },
        error: function () {
            console.log('更新车位信息出错');
        }
    })


    function getUrlParam(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
        var r = window.location.search.substr(1).match(reg);  //匹配目标参数
        if (r != null) return decodeURIComponent(r[2]); return ""; //返回参数值
    }

</script>








<style>

html,body:before {

width: 100%;
height: 100%;
content: ' ';
position: fixed;
z-index: -1;
top: 0;
left: 0;
}

    body{
        background: #EEEEEE;
    }
    *{
        box-sizing:border-box;
    }

    .clearfloat:after{
        display:block;
        clear:both;
        content:"";
        visibility:
                hidden;
        height:0}
    .clearfloat{zoom:1}

    .fl{
        float:left;
    }

    .fr{
        float:right;


    }

    .main{
      min-height:400px;
     overflow-x:hidden; 
      overflow-y:auto;  
    }
.blank{
  height:300px;
}
    .top{
        width:1080px;

        background: #00BFA3;
        position: relative;
    }
    .top .top-wrap{

        padding:44px 0;
        display:flex;
        align-items:Center;
        justify-content:center;
    }
    .top .left{
        display:flex;
        align-items:Center;
        justify-content:center;
        width: 252px;
        font-family: PingFangSC-Regular;
        font-size: 42px;
        color: #FFFFFF;
        letter-spacing: -0.29px;
    }
    .top .right{
        display:flex;
        align-items:Center;
        justify-content:center;
        width: 252px;
        font-family: PingFangSC-Regular;
        font-size: 42px;
        color: #FFFFFF;
        letter-spacing: -0.29px;
    }
    .top .title{
        display:flex;
        align-items:Center;
        justify-content:center;
        width:576px;
        font-family: PingFangSC-Medium;
        font-size: 56px;
        color: #FFFFFF;
        letter-spacing: -0.2px;

    }



    .tab_wrap{
        width:100%;
        position:relative;
    }


    .tab1{
        width:50%;
        height:100px;
        font-family: PingFangSC-Regular;
        font-size: 40px;
        color: #505050;
        letter-spacing: 0;
        display:flex;
        align-items:Center;
        justify-content:center;
        background: #F6F6F6;
        box-shadow: 0 2px 0 0 #B4B4B4;
        border-right:2px solid #DCDCDC;
        vertical-align: middle;
    }

    .tab2{
        width:50%;
        height:100px;
        font-family: PingFangSC-Regular;
        font-size: 40px;
        color: #505050;
        letter-spacing: 0;
        display:flex;
        align-items:Center;
        justify-content:center;
        background: #F6F6F6;
        box-shadow: 0 2px 0 0 #B4B4B4;
    }

    .tab_active{
        border-bottom:4px solid #00BFA3;
        background: #FFFFFF;
        color: #00BFA3;
        box-shadow: 0 0 0 0 ;
    }


    .list_wrap{
        margin-top:10px;
        width:98%;

        background: #FFFFFF;
        box-shadow: 0 0 10px 0 rgba(0,150,136,0.10);
        border-radius: 10px;
        margin-left:1%;
        margin-right:1%;
        position:relative;
    }

    .footer_wrap{position:absolute;bottom:0;width:100%}




    .footer{
        width:100%;
        background: #FFFFFF;
        box-shadow: 0 -3px 10px 0 rgba(0,0,0,0.10);
        border-radius: 10px;
        margin-top:10px;
        height:290px;

    }

    .footer .title{
        font-family: PingFangSC-Regular;
        font-size: 42px;
        color: #808080;
        letter-spacing: 0;
        padding-top:20px;
        padding-left:30px;

    }

    .footer .img_wrap{
        margin-top:15px;
        width:100%;
    }

    .footer  .img_wechat{
        position:relative;
        margin-left:24%;
    }
    .footer .img_wechat .wechat_word{
        position:absolute;
        left:-20px;
        font-family: PingFangSC-Regular;
        font-size: 36px;
        color: #808080;
        letter-spacing: 0;width:200px;
    }
    .footer  .img_alipay{
        position:relative;
        margin-left:33%;
    }
    .footer .img_alipay .alipay_word{
        position:absolute;
        left:-35px;
        font-family: PingFangSC-Regular;
        font-size: 36px;
        color: #808080;
        letter-spacing: 0;
        width:200px;
    }

    .pay{
        background: #F7F7F7;
        width:100%;
    }

    .month_card,
    .pay_info{
        width:65%;
        margin:52px 0;
    }

    .pay_choice{
        font-family: PingFangSC-Regular;
        font-size: 42px;
        color: #505050;
        letter-spacing: -0.26px;
        margin-left:50px;
    }

    .pay_now{
        width:35%;
        height:164px;
        background: #00BFA3;
        box-shadow: inset 0 1px 1px 0 #B4B4B4;
        display:flex;
        align-items:Center;
        justify-content:center;

    }



    .pay_now span{
        font-family: PingFangSC-Regular;
        font-size: 46px;
        color: #FFFFFF;
        letter-spacing: -0.28px;

    }


    .total{
        font-family: PingFangSC-Regular;
        font-size: 46px;
        color: #505050;
        letter-spacing: -0.28px;
    }

    .month_card_total_wrap,
    .total_wrap{
        padding-right:20px;
    }

    .month_card_wrap,
    .pay_info_wrap{
        position:relative;
        padding-left:38px;

    }

    .pay_choice_radio{
        transform: scale(3,3);
        border: 3px solid #B6B6B6;
        position:absolute;
        top:20px;
        visibility: hidden;
    }
	.pay_choice_new_radio{

	position:absolute;
	top:0px;
	left:20px;
	}
	

    .list_visitor,
    .list_car{
        margin-left:90px;
        width:inherit;
    }

    .list_title_word{
        font-family: PingFangSC-Regular;
        font-size: 42px;
        color: #808080;
        letter-spacing: 0;
    }

    .list_title_time{
        font-family: PingFangSC-Regular;
        font-size: 36px;
        color: #808080;
        letter-spacing: 0;
    }


    .list_visitor_radio,
    .list_car_radio{
        position:absolute;
        top:23px;
        left:-50px;
 visibility: hidden;
    }
	
 .list_visitor_new_radio,	
.list_car_new_radio{
      position:absolute;
        top:0px;
        left:-70px;
		}

    .list_content{
        margin-bottom:50px;
        position:relative;
        width:inherit;
    }

    .list_content_person,
    .list_content_word{
        font-family: PingFangSC-Regular;
        font-size: 42px;
        color: #505050;
        letter-spacing: 0;

    }
    .list_content_licence
    {

        font-family: PingFangSC-Regular;
        font-size: 36px;
        color: #808080;
        letter-spacing: 0;

    }

    .list_content_time{
        font-family: PingFangSC-Regular;
        font-size: 36px;
        color: #808080;
        letter-spacing: 0;
    }


    .list_content_money{
        font-family: PingFangSC-Regular;
        font-size: 42px;
        color: #505050;
        letter-spacing: 0;
        text-align: right;
        margin-right:100px;
        padding-right:10px;
    }
    .list_title{
        margin-top:18px;
        margin-bottom:50px;
    }
    .park_fee_png{
    width:72px;
    height:72px;
    position:absolute;
    top:10px;
    left:10px;
    }

.month_wrap_none,
    .month_wrap{
        text-align: center;
        position:relative;
    }
    .month_title{
        position:absolute;
        left:140px;
        top:40px;
        font-family: PingFangSC-Medium;
        font-size: 42px;
        color: #FFFFFF;
        letter-spacing: 0;
    }
    .month_village{
        position:absolute;
        left:140px;
        top:250px;
        font-family: PingFangSC-Medium;
        font-size: 32px;
        color: #FFFFFF;
        letter-spacing: 0;

    }
    .month_park{
        position:absolute;
        left:140px;
        top:300px;
        font-family: PingFangSC-Medium;
        font-size: 60px;
        color: #FFFFFF;
        letter-spacing: 0;
    }
    .month_pay{
        position:absolute;
        left:135px;
        bottom:45px;
    }
    .month_pay_money{
        font-family: PingFangSC-Medium;
        font-size: 42px;
        color: #808080;
        letter-spacing: 0;
    }
    .month_pay_time{
        font-family: PingFangSC-Medium;
        font-size: 30px;
        color: #808080;
        letter-spacing: 0;
        margin-left:20px;
    }
    .month_pay_continue{
        margin-left:230px;
        font-family: PingFangSC-Medium;
        font-size: 42px;
        color: #00BFA3;
        letter-spacing: 0;
        text-align: right;
    }
    .month_wrap .limit{
        font-family: PingFangSC-Medium;
        font-size: 30px;
        color: #DC532A;
        letter-spacing: 0;
    }
    .month_wrap .limit_png{
        position:absolute;
        right:96px;
        top:40px;
    }

    .month_card_buy{
        font-family: PingFangSC-Regular;
        font-size: 42px;
        color: #505050;
        letter-spacing: -0.26px;
    }
    .month_card_buytime{
        font-family: PingFangSC-Regular;
        font-size: 36px;
        color: #808080;
        letter-spacing: -0.22px;
        margin-left:20px;
    }
    .month_card_total_wrap{
        font-family: PingFangSC-Regular;
        font-size: 46px;
        color: #00BFA3;
        letter-spacing: -0.28px;
        text-align: right;
    }

    .month_wrap_none_img{
        margin-top:176px;
        position:relative;
    }
    .month_wrap_none_word{
        font-family: PingFangSC-Regular;
        font-size: 36px;
        color: #888888;
        letter-spacing: 0;
        text-align: right;
        position:absolute;
        top:450px;
        left:360px;
    }
</style>


<script>
 
var height=$(window).height()
height=height*0.6
$('.main').css({"height":height})


    $('.list_wrap').css({"display":"block"})
    $('.month_wrap').css({"display":"none"})
    $('.month_wrap_none').css({"display":"none"})
    $('.pay_list_footer').css({"display":"block"})
    $('.pay_month_footer').css({"display":"none"})
    $('#month_true').css({"display":"none"})
    $('#month_false').css({"display":"none"})


    $('.tab1').click(function(){
        $('.tab1').addClass('tab_active')
        $('.tab2').removeClass('tab_active')
        $('.list_wrap').css({"display":"block"})
        $('.month_wrap').css({"display":"none"})
        $('.pay_list_footer').css({"display":"block"})
        $('.pay_month_footer').css({"display":"none"})
        $('#month_true').css({"display":"none"})
        $('#month_false').css({"display":"none"})

    })
    $('.tab2').click(function(){
        $('.tab2').addClass('tab_active')
        $('.tab1').removeClass('tab_active')
        $('.month_wrap').css({"display":"block"})
        $('.list_wrap').css({"display":"none"})
        $('.pay_month_footer').css({"display":"block"})
        $('.pay_list_footer').css({"display":"none"})
        $('#month_true').css({"display":"block"})
        $('#month_false').css({"display":"block"})

    })

    $('#month_true').click(function(){
        $('.month_wrap_none').css({"display":"none"})
        $('.month_wrap').css({"display":"block"})
    })
    $('#month_false').click(function(){
        $('.month_wrap_none').css({"display":"block"})
        $('.month_wrap').css({"display":"none"})

    })

 	$('.top-wrap .left').click(function(){
        window.location.href='http://mr-almost.site/h5_pay/index.html';
    })
	
 
    $('.month_pay_continue').click(function(){
        window.location.href='http://mr-almost.site/h5_pay/continue.html';
    })
    $('.month_pay_continue').click(function(){
        window.location.href='http://mr-almost.site/h5_pay/continue.html';
    })
    $('.top .right').click(function(){
        window.location.href='http://mr-almost.site/h5_pay/pay_record.html';
    })
</script>

 <script>
   var result = true;


   function checkbox(e) {
     if (result==true)
   {
console.log(e)
    e.src = "./online_chose_dark.png";
 result=false;
   }
   else if(result==false)
   {
  e.src = "./online_chose_light.png"
   result=true;
   }
   }

   
   var wechat_pay_result = false;
   var ali_pay_result = true;
      $('.wechat_pay_new_radio').css({"visibility":"visible"})
   $('.ali_pay_new_radio').css({"visibility":"hidden"})
    function wechat_pay_click(e) {
     if (wechat_pay_result==true && ali_pay_result==true)
   {
  console.log(e)
  wechat_pay_result=false;
  $('.wechat_pay_new_radio').css({"visibility":"visible"})
   }
   else if(wechat_pay_result==true && ali_pay_result==false)
   {
      $('.wechat_pay_new_radio').css({"visibility":"visible"})
	  $('.ali_pay_new_radio').css({"visibility":"hidden"})
   wechat_pay_result=false;
   ali_pay_result=true;
   }

   }
   
 function ali_pay_click(e) {
     if (ali_pay_result==true && wechat_pay_result==true )
   {
     $('.ali_pay_new_radio').css({"visibility":"visible"})
     ali_pay_result=false;
    
   }
   else if(ali_pay_result==true &&   wechat_pay_result==false)
   {
 $('.wechat_pay_new_radio').css({"visibility":"hidden"})
	  $('.ali_pay_new_radio').css({"visibility":"visible"})
   wechat_pay_result=true;
   ali_pay_result=false;
   }

   }




 </script>