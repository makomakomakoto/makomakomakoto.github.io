var mobileNavbar=document.getElementById("mobileNavbar");

mobileNavbar.style.maxHeight="0px";

function menutoggle()
{
    if(mobileNavbar.style.maxHeight=="0px")
    {
        mobileNavbar.style.display="flex";
        mobileNavbar.style.maxHeight="450px";
    }
    else
    {
        mobileNavbar.style.display="none";
        mobileNavbar.style.maxHeight="0px";
    }
}

//輪播圖
var curIndex=0;//初始化
var introduce_number = document.getElementsByClassName('introduceIn').length;
var _timer = setInterval(runFn,4000);//2秒
function runFn(){ //運行定時器         
    curIndex = ++curIndex == introduce_number ? 0 : curIndex;//演算法 4為banner圖片數量
    slideTo(curIndex);
    }
    
    //圓點點擊切換輪播圖
    window.onload = function  () {    //為按鈕初始化onclick事件
    var tbs = document.getElementsByClassName("tabBtn");
    for(var i=0;i<tbs.length;i++){
        tbs[i].onclick = function  () {
            clearInterval(_timer);//細節處理，關閉定時，防止點切圖和定時器函數衝突
            slideTo(this.attributes['num'].value);
            curIndex = this.attributes['num'].value
            _timer = setInterval(runFn,4000);//點擊事件處理完成，繼續開啟定時輪播
        }
    }
}

var prve = document.getElementsByClassName("prve");
prve[0].onclick = function () {//上一張
    clearInterval(_timer);//細節處理，關閉定時，防止點切圖和定時器函數衝突
    curIndex--;
    if(curIndex == -1){
        curIndex = introduce_number-1;
    }
    slideTo(curIndex);
    _timer = setInterval(runFn,4000);//點擊事件處理完成，繼續開啟定時輪播
}

var next = document.getElementsByClassName("next");
next[0].onclick = function () {//下一張
    clearInterval(_timer);//細節處理，關閉定時，防止點切圖和定時器函數衝突
    curIndex++;
    if(curIndex == introduce_number){
        curIndex =0;
    }
    slideTo(curIndex);
    _timer = setInterval(runFn,4000);//點擊事件處理完成，繼續開啟定時輪播
}

//切換banner圖片 和 按鈕樣式
function slideTo(index){
    console.log(index)
    var index = parseInt(index);//轉int類型
    var introduceIn = document.getElementsByClassName('introduceIn');
    for(var i=0;i<introduceIn.length;i++){//遍歷每個圖片
        if( i == index ){
            introduceIn[i].style.display = 'flex';//顯示            
        }else{
            introduceIn[i].style.display = 'none';//隱藏
        }
    }
    var tabBtn = document.getElementsByClassName('tabBtn');
    for(var j=0;j<tabBtn.length;j++){//遍歷每個按鈕
        if( j == index ){
            tabBtn[j].classList.add("hover");    //添加輪播按鈕hover樣式
            curIndex=j;
        }else{
            tabBtn[j].classList.remove("hover");//去除輪播按鈕hover樣式
        }
    }
    
}