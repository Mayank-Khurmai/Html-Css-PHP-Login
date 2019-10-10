setTimeout(redirect, 3500);

function col(){ 
    for(var i=1;i<=7;i++)
	{
        var r=rand(256);
        var g=rand(256);
        var b=rand(256);
        var r3=rand(256);
        var g3=rand(256);
        var b3=rand(256);
        var id="l"+i;
        document.getElementById(id).style.textShadow="1px 1px 10px rgb("+r+","+g+","+b+"),1px 1px 20px rgb("+r+","+g+","+b+"),1px 1px 30px rgb("+r+","+g+","+b+"),1px 1px 40px rgb("+r+","+g+","+b+"),1px 1px 60px rgb("+r+","+g+","+b+")"; 
    }
}


