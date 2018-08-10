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
             物业费缴纳
        </div>
        <div class="right fl">
           缴费记录
        </div>
    </div>
</div>




  
<div class="main">
    <div class="list_other_wrap clearfloat ">
        <div class="list_other fl">
            <div class="list_title ">
                <img class="online_park_rent" src="./online_value_added_service_fee.png" alt="" style="">
                <span class="list_title_word">增值服务缴纳</span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="list_title_time">09/10&nbsp;&nbsp;&nbsp;&nbsp;16:00</span>
            </div>
         
            <div class="list_content clearfloat">
                <div class=" fl">  <input type="checkbox" name="list_other_radio" id="list_other_radio" class="list_other_radio" ><label for="list_other_radio"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="list_other_new_radio" /></label></div>
                <div class="fl">
                    <span  class="list_content_word">水管维修</span>   
                </div>
                <div  class="list_content_money fr">￥30.5</div> 
				 <div class="list_content_man fl">处理人: <span>李琦运</span></div>
            </div> 
              
        </div>
    </div>


         <div class="list_other_wrap clearfloat ">

        <div class="list_other fl">
            <div class="list_title ">
                <img class="online_park_rent" src="./online_value_added_service_fee.png" alt="" style="">
                <span class="list_title_word">增值服务缴纳</span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="list_title_time">09/10&nbsp;&nbsp;&nbsp;&nbsp;16:00</span>
            </div>
         
            <div class="list_content clearfloat">
                <div class=" fl">  <input type="checkbox" name="list_other_radio" id="list_other_radio" class="list_other_radio" ><label for="list_other_radio"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="list_other_new_radio" /></label></div>
                <div class="fl">
                    <span  class="list_content_word">门窗安装维修</span>   
                </div>
                <div  class="list_content_money fr">￥30.5</div> 
				 <div class="list_content_man fl">处理人: <span>李琦运</span></div>
            </div> 
              
        </div>
    </div>


       <div class="list_other_wrap clearfloat ">

        <div class="list_other fl">
            <div class="list_title ">
                <img class="online_park_rent" src="./online_value_added_service_fee.png" alt="" style="">
                <span class="list_title_word">增值服务缴纳</span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="list_title_time">09/10&nbsp;&nbsp;&nbsp;&nbsp;16:00</span>
            </div>
         
            <div class="list_content clearfloat">
                <div class=" fl">  <input type="checkbox" name="list_other_radio" id="list_other_radio" class="list_other_radio" ><label for="list_other_radio"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="list_other_new_radio" /></label></div>
                <div class="fl">
                    <span  class="list_content_word">吊灯维修</span>   
                </div>
                <div  class="list_content_money fr">￥30.5</div> 
				 <div class="list_content_man fl">处理人: <span>李琦运</span></div>
            </div> 
              
        </div>
    </div>


        <div class="list_other_wrap clearfloat ">

        <div class="list_other fl">
            <div class="list_title ">
                <img class="online_park_rent" src="./online_value_added_service_fee.png" alt="" style="">
                <span class="list_title_word">增值服务缴纳</span>&nbsp;&nbsp;&nbsp;&nbsp; <span class="list_title_time">09/10&nbsp;&nbsp;&nbsp;&nbsp;16:00</span>
            </div>
         
            <div class="list_content clearfloat">
                <div class=" fl">  <input type="checkbox" name="list_other_radio" id="list_other_radio" class="list_other_radio" ><label for="list_car_radio"><img src="./online_chose_light.png" width="" height="" onclick="checkbox(this)" class="list_other_new_radio" /></label></div>
                
				<div class="fl">
                    <span  class="list_content_word">水管维修</span>   
                </div>
                <div  class="list_content_money fr">￥30.5</div> 
				 <div class="list_content_man fl">处理人: <span>李琦运</span></div>
            </div> 
              
        </div>
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
        success: function (res) {
            res=JSON.parse(res)
            var new_res=[]
            var final_res=[]
            var bill_total=0
            for(var n in res){
                //console.log(res[n]['person_code'])
                //console.log(typeof res[n]['person_code'])
                res[n]['person_code']=JSON.parse( res[n]['person_code'])
                // console.log(res[n]['person_code'])
                // console.log(typeof res[n]['person_code'])
            }
            for(var n in res){
                for(var m in res[n]['person_code']){
                    if(person_code==res[n]['person_code'][m])
                    {
                        new_res.push(res[n]['code'])
                        //console.log(res[n]['code'])
                    }
                }
            }
            for(var n in res){
                for(var m in new_res){
                    if(new_res[m]==res[n]['code']){
                        final_res.push(res[n])
                        //res[n]['bill_amount']=parseInt(res[n]['bill_amount'])
                        res[n]['bill_amount']=parseFloat(res[n]['bill_amount'])
                        bill_total=bill_total+res[n]['bill_amount']
                    }
                }
            }


            console.log(final_res)


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
         height:1200px;
     overflow-x:hidden; 
      overflow-y:auto;  
    }
	.blank{
  height:200px;
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

	.list_other_wrap,
	.list_advance_wrap,
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
	.list_other,
	.list_property,
	.list_park,
	.list_water,
    .list_visitor,
    .list_car{
        margin-left:90px;
      width:inherit;

    }

    .list_title{
        margin-top:18px;
        margin-bottom:50px;
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

	.list_other_radio,
    .list_visitor_radio,
    .list_car_radio{
        position:absolute;
        top:23px;
        left:-50px;
 visibility: hidden;
    }
	
.list_other_new_radio,
.list_car_new_radio{
      position:absolute;
        top:5px;
        left:-70px;
		}

    .list_content{
        margin-bottom:30px;
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
.list_content_rent_money,
    .list_content_licence
    {

 font-family: PingFangSC-Regular;
font-size: 42px;
color: #505050;
letter-spacing: 0;

    }

	.list_content_man,
    .list_content_time{
        font-family: PingFangSC-Regular;
        font-size: 36px;
        color: #808080;
        letter-spacing: 0;
		width:100%;
		margin-top:10px;
    }
.list_content_time_img_{
width:130px;
height:130px;
margin-right:80px;
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

    .online_park_rent{
    width:72px;
    height:72px;
    position:absolute;
    top:10px;
    left:10px;
    }
	    .online_pressure_fee{
    width:72px;
    height:72px;
    position:absolute;
    top:10px;
    left:10px;
    }
	    .online_property_fee{
    width:72px;
    height:72px;
    position:absolute;
    top:10px;
    left:10px;
    }
	    .online_service_charge{
    width:72px;
    height:72px;
    position:absolute;
    top:10px;
    left:10px;
    }
 </style>
 
 
 <script>
 var height=$(window).height()
height=height*0.6
$('.main').css({"height":height})

 
  $('.list_wrap').css({"display":"block"})
  $('.list_advance_wrap').css({"display":"none"})
 
  $('.tab1').click(function(){
        $('.tab1').addClass('tab_active')
        $('.tab2').removeClass('tab_active')
      $('.list_wrap').css({"display":"block"})
  $('.list_advance_wrap').css({"display":"none"})

    })

 $('.tab2').click(function(){
        $('.tab2').addClass('tab_active')
        $('.tab1').removeClass('tab_active')
         $('.list_advance_wrap').css({"display":"block"})
  $('.list_wrap').css({"display":"none"})
    })
	
	
	
	  
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
	
	
 
 	$('.top-wrap .left').click(function(){
        window.location.href='http://mr-almost.site/h5_pay/index.html';
    })
		$('.top-wrap .right').click(function(){
        window.location.href='http://mr-almost.site/h5_pay/other_record.html';
    })
 
 
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

 </script>