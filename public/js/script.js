function dangnhaptop()
{
    alert("Tính năng đang dc hoàn thiện ,vui long chon vao muc 'TAI KHOAN' ben duoi:))))");
}
function linhtinh()
{
	alert("Tính năng đang dc thêm hoàn thiện")
}
function xuly()
{
	var str=myForm.name.value;
         if( str.length <=12 )
         {
            alert( "Email ko tồn tại!" );
            document.myForm.name.focus() ;
            return false;
         }
    var str=myForm.pass.value;
         if( str.length <=5 )
         {
            alert( "Vui lòng nhập mật khẩu trên 5 kí tự!" );
            document.myForm.pass.focus() ;
            return false;
         }
    var str=myForm.pass.value;
         if( str.length >16 )
         {
            alert( "Vui lòng nhập mật khẩu dưới 16 kí tự!" );
            document.myForm.pass.focus() ;
            return false;
         }   
    var str=myForm.captcha.value;
        if( str.length>=5)
        {
            alert("Nhập sai Captcha vui lòng nhập lại!!");
            document.myForm.captcha.focus();
            return false;
        }
    var str=myForm.captcha.value;
        if( str.length<=3)
        {
            alert("Nhập sai Captcha vui lòng nhập lại!!");
            document.myForm.captcha.focus();
            return false;
        }
    alert("Đăng Nhập thành công.Chào mừng "+myForm.name.value+" đến với Subas.");
}
