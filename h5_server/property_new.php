<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--   <meta name="viewport" content="width=1080,  user-scalable=no" />-->
    <title>JS Bin</title>
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <meta charset="utf-8">
    <meta name="Robots" content="All">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <script type="text/javascript">
        function getOnePx() {
            var dpi = window.devicePixelRatio,
                scalez = 1 / dpi;
            console.log(scalez);
            console.log(dpi);
            document.write('<meta content="width=device-width,initial-scale=' + scalez + ',maximum-scale=' + scalez +',user-scalable=no" name="viewport">')
        }
        function reset() {
            var htmlo = document.getElementsByTagName('html')[0],
                clientW = document.documentElement.clientWidth || document.body.clientWidth,
                fontSz = clientW / 10 + 'px';
            console.log(clientW);
            htmlo.style.fontSize = fontSz;
        }
        getOnePx();
        reset();
        window.addEventListener('resize', function () {
            setTimeout(function () {
                reset();
            }, 100);
        }, false)
    </script>
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


<div class="tab_wrap ">
    <div class=" clearfloat">
        <div class="tab1 fl tab_active">当前账单</div>
        <div class="tab2 fl  "><span>我要预缴</span></div>
    </div>
</div>

  
<div class="main">
    <div class="list_wrap clearfloat ">

        <div class="list_car fl">
            <div class="list_title ">
                <img class="online_park_rent" src="<?=$basic_url.'online_park_rent.png'?>" alt="" style="">
                <span class="list_title_word">车位租赁</span>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>

    </div>


     <div class="list_wrap clearfloat ">
        <div class="list_property fl">
            <div class="list_title ">
                <img class="online_property_fee" src="<?=$basic_url.'online_property_fee.png'?>" alt="" style="">
                <span class="list_title_word">物业费</span>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>

        </div>
    </div>


     <div class="list_wrap clearfloat ">
        <div class="list_car_service fl">
            <div class="list_title ">
                <img class="online_service_charge" src="<?=$basic_url.'online_service_charge.png'?>" alt="" style="">
                <span class="list_title_word">车位服务费</span>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>

        
               
        </div>
    </div>



     <div class="list_wrap clearfloat ">
        <div class="list_water fl">
            <div class="list_title ">
                <img class="online_pressure_fee" src="<?=$basic_url.'online_pressure_fee.png'?>" alt="" style="">
                <span class="list_title_word">供水加压费</span>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
         

        </div>
    </div>


	
	    <div class="list_advance_wrap clearfloat ">
        <div class="list_car fl">
            <div class="list_title ">
                <img class="online_park_rent" src="<?=$basic_url.'online_park_rent.png'?>" alt="" style="">
                <span class="list_title_word">车位租赁费预缴</span>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
         



        </div>
    </div>


     <div class="list_advance_wrap clearfloat ">
        <div class="list_property fl">
            <div class="list_title ">
                <img class="online_property_fee" src="<?=$basic_url.'online_property_fee.png'?>" alt="" style="">
                <span class="list_title_word">物业费预缴</span>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
         

        </div>
    </div>


     <div class="list_advance_wrap clearfloat ">
        <div class="list_park fl">
            <div class="list_title ">
                <img class="online_service_charge" src="<?=$basic_url.'online_service_charge.png'?>" alt="" style="">
                <span class="list_title_word">车位服务费预缴</span>&nbsp;&nbsp;&nbsp;&nbsp;
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
			 <div class="">  <label for="pay" onclick="wechat_pay_click(this)"><img src="<?=$basic_url.'online_chose_dark.png'?>" width="" height=""  class="wechat_pay_new_radio"  /> <img class="wechat_img" src="<?=$basic_url.'online_wechat.png'?>" alt="" style="width:100px;height:100px;"></label></div>
				<div  class="wechat_word" style="">微信支付</div>	
			</div>
			
			 <div class="img_alipay fl">
			<input type="radio" name="ali_pay" id="ali_pay" class="ali_pay" style="display:none" >
			 <div class="">  <label for="pay" onclick="ali_pay_click(this)"><img    src="<?=$basic_url.'online_chose_dark.png'?>" width="" height=""  class="ali_pay_new_radio"  /> <img class="ali_img" src="<?=$basic_url.'online_alipay.png'?>" alt="" style="width:100px;height:100px;"></label></div>
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
left:1.02rem;
}

</style>

    <div class="pay clearfloat">
        <div class="pay_info fl clearfloat">
            <div class="pay_info_wrap fl">
			<input type="radio" name="pay_choice" class="pay_choice_radio" id="pay_choice" ><label for="pay_choice"><img src="<?=$basic_url.'online_chose_light.png'?>" width="" height="" onclick="checkbox(this)" class="pay_choice_new_radio"/><span class="pay_choice">全选</span></label>
           
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
    var basic_url=getRootPath()+'/application/views/app/h5_pay/';
    var amount={}

    /*$('.online_park_rent').attr("src",basic_url+'online_park_rent.png')
    $('.online_property_fee').attr("src",basic_url+'online_property_fee.png')
    $('.online_service_charge').attr("src",basic_url+'online_service_charge.png')
    $('.online_pressure_fee').attr("src",basic_url +'online_pressure_fee.png')
    $('.wechat_img').attr("src",basic_url +'online_wechat.png')
    $('.ali_img').attr("src",basic_url +'online_alipay.png')*/

    /* $('.wechat_pay_new_radio').attr("src",basic_url +'online_chose_dark.png')
     $('.ali_pay_new_radio').attr("src",basic_url +'online_chose_dark.png')*/



    function getRootPath(){
        //获取当前网址，如： http://localhost:8083/proj/meun.jsp
        var curWwwPath = window.document.location.href;
        //获取主机地址之后的目录，如： proj/meun.jsp
        var pathName = window.document.location.pathname;
        var pos = curWwwPath.indexOf(pathName);
        //获取主机地址，如： http://localhost:8083
        var localhostPath = curWwwPath.substring(0, pos);
        //获取带"/"的项目名，如：/proj
        var projectName = pathName.substring(0, pathName.substr(1).indexOf('/')+1);
        return(localhostPath + projectName);
    }



    function getUrlParam(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
        var r = window.location.search.substr(1).match(reg);  //匹配目标参数
        if (r != null) return decodeURIComponent(r[2]); return ""; //返回参数值
    }



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
                        amount[res[n]['code']]=res[n]['bill_amount']
                        //res[n]['bill_amount']=parseInt(res[n]['bill_amount'])
                        res[n]['bill_amount']=parseFloat(res[n]['bill_amount'])
                        bill_total=bill_total+res[n]['bill_amount']
                    }
                }
       }     console.log(final_res)
            console.log(amount)
            for(var n in final_res) {
                var html = ''
                var html_advance = ''
                var type = final_res[n]['bill_type']

                if (type == '101') {
                    let i=parseInt(n)+1;
                    let address = final_res[n]['remark'].split('车位编号:')['0'];
                    let time = final_res[n]['bill_month'].split('-')['1'] + '月份';
                    let initial_time = final_res[n]['initial_time']
                    let bill_amount = final_res[n]['bill_amount']
                    let bill_source_code = final_res[n]['bill_source_code']
                    let bill_code = final_res[n]['code']
                    //当前账单
                    $.ajax({
                        url: 'get_park_car',
                        method: 'post',
                        data: {
                            bill_source_code: bill_source_code,
                            village_id: village_id
                        },
                        success: function (val) {
                            val = JSON.parse(val)
                            var park_code = val[0].parking_lot_code + '号'
                            console.log(val)
                            console.log(address)
                            html = `   <div class="list_content clearfloat">
                <div class=" fl">  <input type="checkbox" name="list_car_radio" class="list_car_radio" id="list_car_radio_`+i+`" data-code=`+bill_code+`><label for="list_car_radio_`+i+`" class="label_for_radio"><img src=` + basic_url + "online_chose_light.png" + ` width="" height="" onclick="checkbox(this)" class="list_car_new_radio"/></label></div>
                <div class="fl">
                    <span  class="list_content_word">` + '车位' + park_code + time + '租赁账单' + `</span>
                        <div class="list_code"> 账单编号:`+bill_code+`</div>
                </div>
                <div  class="list_content_money  fr">` + '￥' + bill_amount + '元' + `</div>
            </div>
              `
                            $('.list_wrap .list_car').append(html)
                        }
                    })



                }

                if (type == '103') {
                    let i=parseInt(n)+1;
                    let address = final_res[n]['remark'].split('地址:')['1'].split(',')['0']
                    let month = final_res[n]['bill_month'].split('-')['1'] + '月份';
                    let initial_time = final_res[n]['initial_time']
                    let bill_amount = final_res[n]['bill_amount']
                    let bill_code = final_res[n]['code']
                    html = `   <div class="list_content clearfloat">
                <div class=" fl">  <input type="checkbox" name="list_car_radio" class="list_car_radio" id="list_car_radio_`+i+`" data-code=`+bill_code+`><label for="list_car_radio_`+i+`" class="label_for_radio"><img src=` + basic_url + "online_chose_light.png" + ` width="" height="" onclick="checkbox(this)" class="list_car_new_radio"/></label></div>
                <div class="fl">
                    <span  class="list_content_word">` + address + month + `物业账单</span>
                       <div class="list_code"> 账单编号:`+bill_code+`</div>
                </div>
                <div  class="list_content_money  fr">` + '￥' + bill_amount + '元' + `</div>
            </div>
              `
                    $('.list_wrap .list_property').append(html)
                }


                if (type == '104') {
                    let i=parseInt(n)+1;
                    let address = final_res[n]['remark'].split('地址:')['1'].split(',')['0']
                    let month = final_res[n]['bill_month'].split('-')['1'] + '月份';
                    let initial_time = final_res[n]['initial_time']
                    let bill_amount = final_res[n]['bill_amount']
                    let bill_code = final_res[n]['code']
                    html = `   <div class="list_content clearfloat">
                <div class=" fl">  <input type="checkbox" name="list_car_radio" class="list_car_radio" id="list_car_radio_`+i+`" data-code=`+bill_code+`><label for="list_car_radio_`+i+`" class="label_for_radio"><img src=` + basic_url + "online_chose_light.png" + ` width="" height="" onclick="checkbox(this)" class="list_car_new_radio"/></label></div>
                <div class="fl">
                    <span  class="list_content_word">` + address + month + `供水加压账单</span>
                      <div class="list_code"> 账单编号:`+bill_code+`</div>
                </div>
                <div  class="list_content_money  fr">` + '￥' + bill_amount + '元' + `</div>
            </div>
              `
                    $('.list_wrap .list_water').append(html)
                }


                if (type == '105') {

                    let i=parseInt(n)+1;
                    let address = final_res[n]['remark'].split('车位编号:')['1'].split(',')['0']+'号';
             /*       var html='';*/
                    console.log(address)
                    let month = final_res[n]['bill_month'].split('-')['1'] + '月份';
                    let initial_time = final_res[n]['initial_time']
                    let bill_amount = final_res[n]['bill_amount']
                    let bill_source_code = final_res[n]['bill_source_code']
                    let bill_code = final_res[n]['code']

                    $.ajax({
                        url: 'get_car_service',
                        method: 'post',
                        data: {
                            bill_source_code: bill_source_code,
                            village_id: village_id
                        },
                        success: function (val) {
                            val = JSON.parse(val)
                            console.log(val)
                            /*var park_code = val[0].code + '号'*/
                            html = `   <div class="list_content clearfloat">
                <div class=" fl">  <input type="checkbox" name="list_car_radio" class="list_car_radio" id="list_car_radio_`+i+`" data-code=`+bill_code+`><label for="list_car_radio_`+i+`" class="label_for_radio"><img src=` + basic_url + "online_chose_light.png" + `  width="" height="" onclick="checkbox(this) "  class="list_car_new_radio"/></label></div>
                <div class="fl">
                    <span  class="list_content_word">` +'车位'+ address + month + `车位服务账单</span>
                    <div class="list_code"> 账单编号:`+bill_code+`</div>
                </div>
                <div  class="list_content_money  fr">` + '￥' + bill_amount + '元' + `</div>
            </div>
              `
                            $('.list_wrap .list_car_service').append(html)
                        }

                    })

                }

            }
        },
        error: function () {
            console.log('');
        }
    })




    //我要预缴
    $.ajax({
        url: 'get_all_park_car',
        method: 'post',
        data: {
            person_code: person_code,
            village_id: village_id
        },
        success: function (val) {
            val = JSON.parse(val)
            var html=''


            for(var n in val){
            var park_code = val[n].parking_lot_code + '号'

            html += `<div class="list_content clearfloat">
                <div class=" fl">  <input type="checkbox" name="list_car_radio" id="list_car_radio" class="list_car_radio" ><label for="list_car_radio"><img src="<?=$basic_url.'online_chose_light.png'?>" width="" height="" onclick="checkbox(this)" class="list_car_new_radio" /></label></div>
				<div class="fl">
			   <div class="fl">
                    <span  class="list_content_word">`+ '车位' + park_code  + `</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span  class="list_content_rent_money">￥0</span>
                </div>
                <div class="list_content_time"></div>
                </div>
					 <div  class=" fr"><img class="list_content_time_img_" src="<?=$basic_url.'online_menology.png'?>" alt="" style=""></div>
            </div>
              `
            }
            console.log(html)
            $('.list_advance_wrap .list_car').append(html)
        }
    })




    //我要预缴
    $.ajax({
        url: 'get_all_property',
        method: 'post',
        data: {
            person_code: person_code,
            village_id: village_id
        },
        success: function (val) {
            val = JSON.parse(val)
            console.log(val)
            var html=''


            for(var n in val){
                var address = val[n].building_name


                html += `<div class="list_content clearfloat">
                <div class=" fl">  <input type="checkbox" name="list_car_radio" id="list_car_radio" class="list_car_radio" ><label for="list_car_radio"><img src="<?=$basic_url.'online_chose_light.png'?>" width="" height="" onclick="checkbox(this)" class="list_car_new_radio" /></label></div>
				<div class="fl">
			   <div class="fl">
                    <span  class="list_content_word">`+ address   + `</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span  class="list_content_rent_money">￥0</span>
                </div>
                <div class="list_content_time"></div>
                </div>
					 <div  class=" fr"><img class="list_content_time_img_" src="<?=$basic_url.'online_menology.png'?>" alt="" style=""></div>
            </div>
              `
            }
            console.log(html)
            $('.list_advance_wrap .list_property').append(html)
        }
    })



    //我要预缴
    $.ajax({
        url: 'get_all_service',
        method: 'post',
        data: {
            person_code: person_code,
            village_id: village_id
        },
        success: function (val) {
            val = JSON.parse(val)
            console.log(val)
            var html=''


            for(var n in val){
                var code = val[n].code+'号'


                html += `<div class="list_content clearfloat">
                <div class=" fl">  <input type="checkbox" name="list_car_radio" id="list_car_radio" class="list_car_radio" ><label for="list_car_radio"><img src="<?=$basic_url.'online_chose_light.png'?>" width="" height="" onclick="checkbox(this)" class="list_car_new_radio" /></label></div>
				<div class="fl">
			   <div class="fl">
                    <span  class="list_content_word">`+ '车位'+code   + `</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span  class="list_content_rent_money">￥0</span>
                </div>
                <div class="list_content_time"></div>
                </div>
					 <div  class=" fr"><img class="list_content_time_img_" src="<?=$basic_url.'online_menology.png'?>" alt="" style=""></div>
            </div>
              `
            }
            console.log(html)
            $('.list_advance_wrap .list_park').append(html)
        }
    })





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
        visibility:hidden;
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
        width:10rem;
        
        background: #00BFA3;
        position: relative;
    }
    .top .top-wrap{

        padding:0.41rem 0;
        display:flex;
        align-items:Center;
        justify-content:center;
    }
    .top .left{
        display:flex;
        align-items:Center;
        justify-content:center;
        width: 2.33rem;
        font-family: PingFangSC-Regular;
        font-size: 0.39rem;
        color: #FFFFFF;
        letter-spacing: -0.29px;
    }
    .top .right{
        display:flex;
        align-items:Center;
        justify-content:center;
        width: 2.33rem;
        font-family: PingFangSC-Regular;
        font-size: 0.39rem;
        color: #FFFFFF;
        letter-spacing: -0.29px;
    }
    .top .title{
        display:flex;
        align-items:Center;
        justify-content:center;
        width:5.33rem;
        font-family: PingFangSC-Medium;
        font-size: 0.52rem;
        color: #FFFFFF;
        letter-spacing: -0.2px;

    }



    .tab_wrap{
        width:100%;
        position:relative;
    }


    .tab1{
        width:50%;
        height:0.93rem;
        font-family: PingFangSC-Regular;
        font-size: 0.37rem;
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
        height:0.93rem;
        font-family: PingFangSC-Regular;
        font-size: 0.37rem;
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

	.list_advance_wrap,
    .list_wrap{
        margin-top:0.09rem;
        width:98%;

        background: #FFFFFF;
        box-shadow: 0 0 10px 0 rgba(0,150,136,0.10);
        border-radius: 0.09rem;
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
        height:2.69rem;

    }

    .footer .title{
        font-family: PingFangSC-Regular;
        font-size: 0.39rem;
        color: #808080;
        letter-spacing: 0;
        padding-top:0.19rem;
        padding-left:0.28rem;

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
        left:-0.19rem;
        font-family: PingFangSC-Regular;
        font-size: 0.33rem;
        color: #808080;
        letter-spacing: 0;width:1.85rem;
    }
    .footer  .img_alipay{
        position:relative;
        margin-left:33%;
    }
    .footer .img_alipay .alipay_word{
        position:absolute;
        left:-0.32rem;
        font-family: PingFangSC-Regular;
        font-size: 0.33rem;
        color: #808080;
        letter-spacing: 0;
        width:1.85rem;
    }

    .pay{
        background: #F7F7F7;
        width:100%;
    }

    .month_card,
    .pay_info{
        width:65%;
        margin:0.48rem 0;
    }

    .pay_choice{
        font-family: PingFangSC-Regular;
        font-size: 0.39rem;
        color: #505050;
        letter-spacing: -0.26px;
        margin-left:0.46rem;
    }

    .pay_now{
        width:35%;
        height:1.52rem;
        background: #00BFA3;
        box-shadow: inset 0 1px 1px 0 #B4B4B4;
        display:flex;
        align-items:Center;
        justify-content:center;

    }



    .pay_now span{
        font-family: PingFangSC-Regular;
        font-size: 0.43rem;
        color: #FFFFFF;
        letter-spacing: -0.28px;

    }


    .total{
        font-family: PingFangSC-Regular;
        font-size: 0.43rem;
        color: #505050;
        letter-spacing: -0.28px;
    }

    .month_card_total_wrap,
    .total_wrap{
        padding-right:0.19rem;
    }

    .month_card_wrap,
    .pay_info_wrap{
        position:relative;
        padding-left:0.35rem;

    }

    .pay_choice_radio{
        transform: scale(3,3);
        border: 3px solid #B6B6B6;
        position:absolute;
        top:0.19rem;
        visibility: hidden;
    }
.pay_choice_new_radio{

position:absolute;
top:0px;
left:0.19rem;
}
    .list_car_service,
	.list_property,
	.list_park,
	.list_water,
    .list_visitor,
    .list_car{
        margin-left:0.83rem;
      width:inherit;

    }

    .list_title{
        margin-top:0.17rem;
        margin-bottom:0.46rem;
    }
    .list_title_word{
        font-family: PingFangSC-Regular;
        font-size: 0.39rem;
        color: #808080;
        letter-spacing: 0;
    }

    .list_title_time{
        font-family: PingFangSC-Regular;
        font-size: 0.33rem;
        color: #808080;
        letter-spacing: 0;
    }


    .list_visitor_radio,
    .list_car_radio{
        position:absolute;
        top:0.21rem;
        left:-0.46rem;
 visibility: hidden;
    }
.list_car_new_radio{
      position:absolute;
        top:0px;
        left:-0.65rem;
		}

    .list_content{
        margin-bottom:0.28rem;
        position:relative;
        width:inherit;
    }

    .list_content_person,
    .list_content_word{
        font-family: PingFangSC-Regular;
        font-size: 0.39rem;
        color: #505050;
        letter-spacing: 0;

    }
.list_content_rent_money,
    .list_content_licence
    {

 font-family: PingFangSC-Regular;
font-size: 0.39rem;
color: #505050;
letter-spacing: 0;

    }

    .list_content_time{
        font-family: PingFangSC-Regular;
        font-size: 0.33rem;
        color: #808080;
        letter-spacing: 0;
		width:100%;
    }
.list_content_time_img_{
width:1.20rem;
height:1.20rem;
margin-right:0.74rem;
}

.list_code{
    font-family: PingFangSC-Regular;
    font-size: 0.33rem;
    color: #808080;
    letter-spacing: 0;
}

    .list_content_money{
        font-family: PingFangSC-Regular;
        font-size: 0.39rem;
        color: #505050;
        letter-spacing: 0;
        text-align: right;
  margin-right:0.93rem;
      padding-right:10px;
    }

    .online_park_rent{
    width:0.67rem;
    height:0.67rem;
    position:absolute;
    top:0.09rem;
    left:0.09rem;
    }
	    .online_pressure_fee{
    width:0.67rem;
    height:0.67rem;
    position:absolute;
    top:0.09rem;
    left:0.09rem;
    }
	    .online_property_fee{
    width:0.67rem;
    height:0.67rem;
    position:absolute;
    top:0.09rem;
    left:0.09rem;
    }
	    .online_service_charge{
    width:0.67rem;
    height:0.67rem;
    position:absolute;
    top:0.09rem;
    left:0.09rem;
    }
 </style>
 
 
 <script>
 var height=$(window).height()
height=height*0.6;
$('.main').css({"height":height})
 var result = true;
 
  $('.list_wrap').css({"display":"block"})
  $('.list_advance_wrap').css({"display":"none"})
 
  $('.tab1').click(function(){
        $('.tab1').addClass('tab_active')
        $('.tab2').removeClass('tab_active')
      $('.list_wrap').css({"display":"block"})
  $('.list_advance_wrap').css({"display":"none"})
      result = true;
    })

 $('.tab2').click(function(){
        $('.tab2').addClass('tab_active')
        $('.tab1').removeClass('tab_active')
         $('.list_advance_wrap').css({"display":"block"})
  $('.list_wrap').css({"display":"none"})
     result = true;
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
        window.location.href='http://localhost/platform/index.php/pay_h5/index_h5';
    })
		$('.top-wrap .right').click(function(){
        window.location.href='http://localhost/platform/index.php/pay_h5/property_record_h5?person_code=100094&village_id=100001';
    })
 
 

   function checkbox(e) {



           if (!$(e).attr("checked")) {
               console.log($(e).attr("checked"))
               e.src = "<?=$basic_url . 'online_chose_dark.png'?>"
               $(e).attr("checked", "true")
           }
           else if ($(e).attr("checked")) {
               console.log($(e).attr("checked"))
               $(e).removeAttr("checked")
               e.src = "<?=$basic_url . 'online_chose_light.png'?>"
           }

   }




   $('.pay_now').click(function(){
       var final_amount=0
       var exact_bill_code=[]

       for(var n=0;n<$('.list_wrap input[name=list_car_radio]')['length'];n++)
       {
           var i=n+1
           console.log($('.list_wrap #list_car_radio_'+i)['0']['checked'])
          if( $('.list_wrap #list_car_radio_'+i)['0']['checked']){
              exact_bill_code.push($('.list_wrap #list_car_radio_'+i).data('code'))
          }
       }
       console.log(exact_bill_code)

       for(var n in amount)
       {
           for(var m in exact_bill_code)
           {
               if(exact_bill_code[m]==n){
                   final_amount+=parseInt(amount[n])
               }
           }
       }
       console.log(final_amount)
   })


$('.pay_choice_new_radio').click(function(){

    /*for(var n=0;n<$('.list_wrap input[name=list_car_radio]')['length'];n++)
    {*/

    var i=n+1
    for(var n=0;n<$('.list_car_new_radio')['length'];n++)
    {
/*        $($('.list_car_new_radio')[n]).attr("all-checked","true")*/
        console.log(  $($('.list_car_new_radio')[n]))
     if(   !$($('.list_car_new_radio')[n]).attr("all-checked")){
         console.log($($('.list_car_new_radio')[n]).attr("all-checked"))
         $($('.list_car_new_radio')[n]).attr("all-checked","true")
         $($('.list_car_new_radio')[n]).attr("checked","true")
         $($('.list_car_radio_'+i)[n]).attr("checked","true")
         $($('.list_car_new_radio')[n])['0'].src = "<?=$basic_url.'online_chose_dark.png'?>"

        }
       else{
            console.log($($('.list_car_new_radio')[n]).attr("all-checked"))
            $($('.list_car_new_radio')[n]).removeAttr("all-checked")
            $($('.list_car_new_radio')[n]).removeAttr("checked")
         $($('.list_car_radio_'+i)[n]).removeAttr("checked","true")
            $($('.list_car_new_radio')[n])['0'].src = "<?=$basic_url.'online_chose_light.png'?>"
            console.log(   $($('.list_car_new_radio')[n]).src)
        }

    }
/*    $('.list_car_new_radio').click()*/


    /*}*/



})



 </script>