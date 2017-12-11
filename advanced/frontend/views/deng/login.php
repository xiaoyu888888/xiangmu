<meta charset="utf8">

<style>
table{ border-collapse: collapse; border: 1px solid #ddd; width: 800px; margin: 0 auto;margin-top: 50px; background: rgba(121, 217, 221, 0.4); color: #666}
table tr{ height: 40px;}
table td{ border: 1px solid #ddd; text-align: center}

*{margin: 0; padding:0 ; font-family: 微软雅黑}
a{ text-decoration: none; color: #666;}

.top{ width: 100%; text-align: center;}
.top h2{ margin-top: 50px;}

form{ width: 450px; margin: 0 auto; margin-top: 50px;}
form input{
    width: 300px;
    height: 40px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding-left: 5px;
    font-size: 14px;
}

form p{
    margin-top: 20px;
    width: 100%;
}

form span{
    width: 100px;
    text-align: right;
    display: inline-block;
}

.a_button{
    width: 150px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background: green;
    color: #fff;
    display: block;
    border: 1px solid green;
    border-radius: 5px;
    margin: 0 auto;
}

form .time{
    width: auto;
    padding: 0 5px;
    font-size: 16px;
    font-weight: bold;
}

.remind{
    text-align: center;
    color: red;
}
</style>

<div class="top">
    <h2>登 录</h2>
</div>

<div class="main">
    <form action="">
        <p>
            <span>手机号：</span>
            <input type="text" name="tell" id="shou" placeholder="请输入手机号">
        </p>
        <p>
            <span>密码：</span>
            <input type="password" name="pwd" id="pwd" placeholder="请输入密码">
        </p>
        <p class="remind" id="ti">
           
        </p>
        <p>
            <a class="a_button" href="javascript:;" name="deng">登录</a>
        </p>
    </form>
</div>
<script type="text/javascript" src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript">

     var dian="";
     var dao=60;

    $(document).on('click',"a[name='deng']",function(){

     var tell=$('#shou').val();

     var pwd=$('#pwd').val();
      
            $.ajax({

                type:"post",
                data:{tell:tell,pwd:pwd},
                url:"http://www.yi.com/web/index.php?r=deng/login_do",
                success:function(msg){

                    if(msg==1)
                    {
                        alert('登录成功')
                        location.href="http://www.yi.com/web/index.php?r=deng/lo";
                    }
                    else
                    {
                        dian++;

                        if(dian==1)
                        {
                              
                              $('#ti').html("请在60秒后再次登录");   
                             
                        }
                        else if(dian==2)
                        {   
                              $('#ti').html('请在120秒后再次登录');
                             
                        }
                        else if(dian==3)
                        {
                             $('#ti').html('您已三次登录失败,请明天再次尝试');
                             return false;
                        }


                    }

                }

            })


     
        
    })




</script>