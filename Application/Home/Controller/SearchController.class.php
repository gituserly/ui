<?php
namespace Home\Controller;
use Think\Controller;
class SearchController extends Controller {
    public function user(){
     echo 'my name is ly';

        $js='{
    "status": "100200",
    "data": {
        "page": "1/49",
        "user_tag_history": [
            "new",
            "login",
            "tag",
            "列表",
            "Day One",
            "瀑布流",
            "筛选",
            "标签",
            "主页"
        ],
        "items": [
            {
                "pic_id": "45",
                "pic": "http://img.meiui.me/app/Enjoy/详情页.jpg",
                "pic_h": "1334",
                "pic_w": "750",
                "app_id": "3",
                "user_id": "1",
                "user_name": "",
                "user_pic": "http://www.meiui.me/img/head.jpg",
                "app_name": "Enjoy",
                "brief": "",
                "sys_tag": [
                "Enjoy",
                "详情页"
            ],
                "user_tag": [],
                "is_like": 2
            },
            {
                "pic_id": "91",
                "pic": "http://img.meiui.me/app/Notability/工具栏.PNG",
                "pic_h": "1334",
                "pic_w": "750",
                "app_id": "7",
                "user_id": "1",
                "user_name": "",
                "user_pic": "http://www.meiui.me/img/head.jpg",
                "app_name": "Notability",
                "brief": "",
                "sys_tag": [
                "工具栏",
                "Notability"
            ],
                "user_tag": [],
                "is_like": 2
            },
            {
                "pic_id": "139",
                "pic": "http://img.meiui.me/app/Sleep Cycle/提示信息.PNG",
                "pic_h": "1334",
                "pic_w": "750",
                "app_id": "12",
                "user_id": "1",
                "user_name": "",
                "user_pic": "http://www.meiui.me/img/head.jpg",
                "app_name": "Sleep Cycle",
                "brief": "",
                "sys_tag": [
                "提示信息",
                "Sleep Cycle"
            ],
                "user_tag": [],
                "is_like": 2
            },
            {
                "pic_id": "209",
                "pic": "http://img.meiui.me/app/匠物/购物车空.PNG",
                "pic_h": "1334",
                "pic_w": "750",
                "app_id": "16",
                "user_id": "1",
                "user_name": "",
                "user_pic": "http://www.meiui.me/img/head.jpg",
                "app_name": "匠物",
                "brief": "",
                "sys_tag": [
                "购物车空",
                "匠物"
            ],
                "user_tag": [],
                "is_like": 2
            },
            {
                "pic_id": "262",
                "pic": "http://img.meiui.me/app/留白/失败提示.jpg",
                "pic_h": "1334",
                "pic_w": "750",
                "app_id": "22",
                "user_id": "1",
                "user_name": "",
                "user_pic": "http://www.meiui.me/img/head.jpg",
                "app_name": "留白",
                "brief": "",
                "sys_tag": [
                "失败提示",
                "留白"
            ],
                "user_tag": [],
                "is_like": 2
            },
            {
                "pic_id": "269",
                "pic": "http://img.meiui.me/app/留白/滤镜.jpg",
                "pic_h": "1334",
                "pic_w": "750",
                "app_id": "22",
                "user_id": "1",
                "user_name": "",
                "user_pic": "http://www.meiui.me/img/head.jpg",
                "app_name": "留白",
                "brief": "",
                "sys_tag": [
                "滤镜",
                "留白"
            ],
                "user_tag": [],
                "is_like": 2
            },
            {
                "pic_id": "281",
                "pic": "http://img.meiui.me/app/空气监测站/卡通，关于我们.PNG",
                "pic_h": "1334",
                "pic_w": "750",
                "app_id": "23",
                "user_id": "1",
                "user_name": "",
                "user_pic": "http://www.meiui.me/img/head.jpg",
                "app_name": "空气监测站",
                "brief": "",
                "sys_tag": [
                "卡通",
                "关于我们",
                "空气监测站"
            ],
                "user_tag": [],
                "is_like": 2
            },
            {
                "pic_id": "311",
                "pic": "http://img.meiui.me/app/艺术云图/邮箱注册.PNG",
                "pic_h": "1334",
                "pic_w": "750",
                "app_id": "25",
                "user_id": "1",
                "user_name": "",
                "user_pic": "http://www.meiui.me/img/head.jpg",
                "app_name": "艺术云图",
                "brief": "",
                "sys_tag": [
                "邮箱注册",
                "艺术云图"
            ],
                "user_tag": [],
                "is_like": 2
            }
        ]
    },
    "alert": {
        "msg": "成功请求"
    }
}';

        $js_array=json_decode($js,true);

        var_dump($js_array);


    }
}