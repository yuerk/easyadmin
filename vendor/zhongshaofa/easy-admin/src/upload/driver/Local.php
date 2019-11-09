<?php

// +----------------------------------------------------------------------
// | EasyAdmin
// +----------------------------------------------------------------------
// | PHP交流群: 763822524
// +----------------------------------------------------------------------
// | 开源协议  https://mit-license.org 
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zhongshaofa/EasyAdmin
// +----------------------------------------------------------------------

namespace EasyAdmin\upload\driver;

use EasyAdmin\upload\Base;

class Local extends Base
{

    public function save()
    {
        parent::save();
        return [
            'save' => true,
            'msg'  => '上传成功',
            'url'  => $this->completeFileUrl,
        ];
    }

}