var banner_index=document.getElementById("banner_index");
var imgbox_banner=document.getElementById("imgbox_banner");
var li_imgbox=imgbox_banner.getElementsByTagName("li");
var img_imgbox=imgbox_banner.getElementsByTagName("img");
var imgnav_banner=document.getElementById("imgnav_banner");
var li_imgnav=imgnav_banner.getElementsByTagName("li");
//����Ԫ����Ԫ�ؼ���

window.onload=function () {

    var wid_1=document.documentElement.offsetWidth;
    banner_index.style.width=wid_1+"px";
    banner_index.style.height=400*banner_index.offsetWidth/1600+"px";
    for (i=0;i<img_imgbox.length;i++) {
        img_imgbox[i].style.width = wid_1 + "px";

    };
    for (i=0;i<li_imgbox.length;i++) {
        li_imgbox[i].style.width = wid_1 + "px";

    };

    var wid_3=banner_index.offsetWidth;
    var wid_4=li_imgnav[0].offsetWidth*li_imgnav.length;
    imgnav_banner.style.left=(wid_3-wid_4)/2-15+"px";

    var banner_pos=document.getElementById("banner_pos");
    banner_pos.style.height=banner_index.offsetHeight+"px";
//����banner��С��λ��




    var imgbox_width=li_imgbox[0].offsetWidth*li_imgbox.length;
    imgbox_banner.style.width=imgbox_width+"px";
//����ͼƬ���ϵĿ���


    var index_img=0;
    for (var i = 0; i <li_imgnav.length; i++) {
        li_imgnav[i].index=i;
        li_imgnav[i].onclick=function(){
            move_img(this.index);
            index_img=this.index;
//	alert(flag_click);
        }
    };
//�������ֵ�������¼�


    function move_img(index){

        imgbox_banner.style.left=-li_imgbox[0].offsetWidth*index+"px";
        for(var n=0;n<li_imgnav.length;n++) {
            li_imgnav[n].className = "";
            li_imgnav[n].style.background = "white";
        }
        li_imgnav[index].className="active";
        li_imgnav[index].style.background="#4a86e8";
    }
//����ͼƬ�ƶ�����

    var timeInterval=2000;
    setInterval(change_img,timeInterval);
//���ö�ʱ��

    function change_img(){
        if (index_img==li_imgnav.length) {
            index_img=0;
            move_img(index_img);
            index_img+=1;
        }else{
            move_img(index_img);
            index_img+=1;
        };
    };
//����ͼƬ��������
//    alert(banner_pos.offsetHeight);
};

window.onresize=function(){
    var wid_1=document.documentElement.offsetWidth;
    banner_index.style.width=wid_1+"px";
    banner_index.style.height=400*banner_index.offsetWidth/1600+"px";
    for (i=0;i<img_imgbox.length;i++) {
        img_imgbox[i].style.width = wid_1 + "px";

    };
    for (i=0;i<li_imgbox.length;i++) {
        li_imgbox[i].style.width = wid_1 + "px";

    };

    var wid_3=banner_index.offsetWidth;
    var wid_4=li_imgnav[0].offsetWidth*li_imgnav.length;
    imgnav_banner.style.left=(wid_3-wid_4)/2-15+"px";

    var banner_pos=document.getElementById("banner_pos");
    banner_pos.style.height=banner_index.offsetHeight+"px";
//����banner��С��λ��

};