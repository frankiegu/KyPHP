<?php
namespace app\admin\controller;

use think\facade\Cache;

class Index extends Base
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
    }

    public function index()
    {
        $this->redirect('system/index/index');
    }

    /**
     * 清除缓存
     * @Author: Doogie <461960962@qq.com>
     */
    public function clearCache(){
        $refresh = input('refresh', 0);
        if($refresh){
            Cache::clear();
            $this->success('缓存清理成功');
        }else{
            $this->error('缓存清理失败');
        }
    }

    /**
     * set page width mode
     * @author: fudaoji<fdj@kuryun.cn>
     */
    public function setScreen()
    {
        if (cookie('screen_size')) {
            cookie('screen_size', null);
        } else {
            cookie('screen_size', 1);
        }
    }
}
