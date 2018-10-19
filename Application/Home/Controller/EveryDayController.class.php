<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-10-14
 * Time: 上午11:08
 */

namespace Home\Controller;

use Think\Controller;

class EveryDayController extends Controller
{

    public function getLaGouData()
    {
        header("Content-type:text/html;charset=utf-8");
        $array_data = array(
            'header' => array(
                'user_name' => '廖耘',
                'user_edu' => '西南科技大学 / 本科 / 应届毕业生',
                'user_phone' => '18308462575',
                'user_age' => '23',
                'user_email' => '1291829902@qq.com',
            ),
            'toIntroduceMyself' => array(
                'user_tag' => array('个人能力', '执行力', '抗压能力', '适应能力', '责任心'),
                'self description' => '路子野，就是莽，自学能力强。不怕碰到问题，善于解决问题提高自己',
            ),
            'education_experience' => array(
                'content' => '西南科技大学/本科 /动物科学', '
                time' => '2014-2018',
            ),
            'work_experience' => array(
                'the internship units' => '麻乌科技/后端开发－实习',
                'self description' => '学校学长推荐，一起开发app,开发美UIapp，后端接口功能',
                'time' => '2017.11-2018-4',
            ),
            'experience_in_project' => array('name' => '美ui',
                'content' => '使用wamp开发接口,用简化的thinkPHP框架开发,
            使用git 进行版本,开发首页推荐列表功能（redis sort list 处理）,
            开发标签的正常增删改查,处理日志分文件存储',
                'time' => '2017.12-2018.4',
                'social_home_page' => ''
            ),
        );


        // $json_data = json_encode($array_data);
        // echo $json_data;

        $this->outdata($array_data);
    }

    public function getJingDongChaoShiData()
    {
        header("Content-type:text/html;charset=utf-8");
        $array_data = array(
            'Food_and_beverage' => array(
                '进口食品' => array(
                    '休闲零食', '饼干蛋糕', '橄榄油', '坚果蜜饯',
                    '糖果/巧克力', '进口牛奶', '方便食品', '饮料冲调'
                ),
                '休闲食品' => array(
                    '进口食品', '猪肉脯', '薯片/膨化', '鸭脖',
                    '海苔', '牛肉干', '果蔬干', '果冻', '辣条'
                ),
                '蛋糕饼干' => array(
                    '进口饼干', '曲奇', '面包', '蛋糕', '饼干'
                , '派', '蛋卷', '威化', '肉松饼'
                ),
                '坚果炒货' => array(
                    '瓜子', '核桃', '夏威夷果', '松子'
                , '开心果', '碧根果', '腰果', '巴旦木', '花生'
                ),
                '蜜饯果干' => array(
                    '枣夹核桃', '枣', '葡萄干', '芒果干', '梅',
                    '山楂', '枸杞', '蔓越莓干', '栗子', '薯/芋头类'
                ),
                '糖果/巧克力' => array(
                    '进口巧克力', '巧克力', '口香糖',
                    '棒棒糖', '喜糖', '糖', '润喉糖', '黑巧克力'
                ),
                '牛奶' => array(
                    '进口牛奶', '牛奶乳品', '酸奶', '风味奶',
                    '儿童奶', '鲜奶', '成人奶粉', '乳酸饮料'
                ),
                '茗茶' => array(
                    '铁观音', '乌龙茶', '龙井', '普洱', '红茶',
                    '绿茶', '白茶', '黑茶', '养生茶', '花果茶', '花草茶'
                ),
                '饮料/水' => array(
                    '饮用水', '碳酸水', '中草药饮料', '功能类',
                    '运动类', '茶饮', '蛋白质类', '果蔬类', '果味类'
                ),
                '营养冲调' => array(
                    '麦片', '咖啡', '奶茶', '蜂蜜',
                    '蜂产品', '柚子茶', '营养奶粉', '谷粉豆浆'
                ),
            ),

        );
        $this->outdata($array_data);

    }

    public function get2345YinShiData()
    {
        header("Content-type:text/html;charset=utf-8");
        $yinshi_data = array(
            'The_movie_to_find' => array(
                'type' => array('爱情', '喜剧', '恐怖', '科幻', '剧情',),
                'place' => array('大陆', '香港', '台湾', '韩国', '日本',),
                'year' => array('2017', '2016', '2015', '2014')
            ),
            'TV_hit_list' => array(
                '01' => 'HBO 2018预告片合集',
                '02' => '降龙之白露为霜',
                '03' => '胜利之路',
                '04' => '我在北京等你',
                '05' => '唐诗三百案',
                '06' => '战犯',
                '07' => '一代名相陈廷敬',
                '08' => '初代吸血鬼第4季',
            )
        );
        $this->outdata($yinshi_data);
    }

    public function  getBOSSzhipinPHPhouduanData()
    {
        $array_data = array(
            'hot_job' => array(
                array(
                    'left_content' => array(
                        'work' => 'PHP后端',
                        'salary' => '6k-12k',
                        'place' => '成都 郫都区 犀浦',
                        'work experience' => '3-5年',
                        'education' => '大专',
                    ),
                    'middle_content' => array(
                        'the_name_of_the_company' => '杭州亿易',
                        'type' => '移动互联网',
                        'the_financing_way' => 'A轮',
                        'number_of_employees' => '20-99人',
                    ),
                    'right_content' => array(
                        'name' => '韩增义',
                        'the_company_position' => '研发经理',
                        'release_time' => '2018年06月12号',
                        'img' => 'https://img2.bosszhipin.com/boss/avatar/avatar_6.png?x-oss-process=image/resize,w_100,limit_0',
                    )
                ),
                array(
                    'left_content' => array(
                        'work' => 'PHP后端开发',
                        'salary' => '4k-6k',
                        'place' => '成都 武侯区 ',
                        'work experience' => '3-5年',
                        'education' => '大专',
                    ),
                    'middle_content' => array(
                        'the_name_of_the_company' => '大合网络',
                        'type' => '互联网',
                        'the_financing_way' => '未融资',
                        'number_of_employees' => '100-499人',
                    ),
                    'right_content' => array(
                        'name' => '小月',
                        'the_company_position' => '人事经理',
                        'release_time' => '2018年04月13日',
                        'img' => 'https://img.bosszhipin.com/beijin/mcs/useravatar/20160917/338afc32637a8bb37e57381dffecc336187d324217d6dd1c643bfbfb5d59097d_s.jpg?x-oss-process=image/resize,w_100,limit_0',
                    )
                )

            ),
            'the_latest_job' => array(
                array(
                    'left_content' => array(
                        'work' => 'PHP后端开发',
                        'salary' => '8k-10k',
                        'place' => '成都 武侯区 ',
                        'work experience' => '3-5年',
                        'education' => '本科',
                    ),
                    'middle_content' => array(
                        'the_name_of_the_company' => '智汇创谷',
                        'type' => '互联网',
                        'the_financing_way' => '',
                        'number_of_employees' => '100-499人',
                    ),
                    'right_content' => array(
                        'name' => '陈女士',
                        'the_company_position' => 'HR',
                        'release_time' => '2018年10月18日',
                        'img' => 'src="https://img2.bosszhipin.com/boss/avatar/avatar_14.png?x-oss-process=image/resize,w_100,limit_0"',
                    )
                )
            )
        );
        $app = array(
            array('page_all', 'page_content'),
            array('user_name')
        );
        $this->outdata($array_data);
    }

    public function getSouHuXinWenData()
    {
        $array_data = array(
            array('首页' => array(
                'left_content' => array(
                    array('别抢了！货车发生事故，家长带孩子现场哄抢橘子',
                        'img1' => 'http://29e5534ea20a8.cdn.sohucs.com/c_fill,w_320,h_213,g_faces/c_cut,x_0,y_143,w_600,h_399/os/news/a6749d7cb23dcf97272e1fdf502240f3.jpg'),
                    array('老外爬颐和园围墙拍照 瓦片踩落一地',
                        'img2' => 'http://29e5534ea20a8.cdn.sohucs.com/c_fill,w_155,h_103,g_faces/c_cut,x_0,y_96,w_227,h_151/os/news/272f883a48053d03522410798be2094d.jpg'),
                    array('这家人把骗子当取款机：1笔进账36万 赃款全被截胡',
                        'img3' => 'http://29e5534ea20a8.cdn.sohucs.com/c_fill,w_155,h_103,g_faces/c_cut,x_0,y_73,w_550,h_366/os/news/673db50492f61a3ebbf2237d0defd4fd.jpg')
                ),
                'middle_content' => array(
                    '习近平的足迹 | 回望十九大：服务人民 胸怀世界',
                    '高举伟大旗帜，不负人民重托 | 开创中国特色社会主义的光辉时代',
                    '刘鹤：不存在国进民退问题 政府高度重视股市稳定发展',
                    '副总理一行三会掌门信心喊话 A股大反攻创业板涨逾3%',
                    '地方国资主动驰援上市民企：今年已入股29家 非统一部署',
                    array('', '一日内五名＂老虎＂案有进展 中纪委公布两人被处分现场视频'),
                    '成品油价格年内第13次上调 多地油价进入“8元时代”',
                ),
                'right_content' => array(
                    '搜狐精选' => array(
                        array('与“钻石”同行的探险家 海外试驾劳斯莱斯首款SUV',
                            'img' => 'http://5b0988e595225.cdn.sohucs.com/images/20181019/19661a86ba8f41bc82e867eabd702dde.jpeg'),
                        '黄刚：V2X是智能网联汽车发展的核心技术之一',
                        '曝国米冬窗补强瞄准巴萨失意飞翼 阿森纳欲截胡',
                        '三主力缺席影响卡帅排兵 高拉特能否伤愈仍未知',
                        '赵薇遭股民索赔新进展：两度申请管辖权异议被法院驳回，面临31起诉讼',
                    )
                )
            ),
                '时政', '国际', '军事', '警法', '社会', '公益',
                '无人机', '狐度', '数字之道', '知世', '神吐槽',)
        );
        $this->outdata($array_data);
    }

    public static function  outdata($content)
    {
        $out_data = array('data' => $content);
        echo json_encode($out_data);
    }
}