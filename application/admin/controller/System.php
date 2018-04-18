<?php
/***系统管理**/
namespace app\admin\controller;

use think\Controller;

class System extends Controller
{
	/**
	*@ 系统设置
	*/
	public function systemBase()
	{
		return view();
	}

	/**
	*@ 栏目管理
	*/
	public function systemCategory()
	{
		return view();
	}

	/**
	*@ 栏目管理 添加栏目
	*/
	public function systemCategoryAdd()
	{
		return view();
	}

	/**
	*@ 栏目管理 编辑栏目
	*/
	public function systemCategoryEdit()
	{
		return view();
	}

	/**
	*@ 数据字典
	*/
	public function systemData()
	{
		return view();
	}

	/**
	*@ 数据字典 编辑字段 空模板
	*/
	public function systemDateEdit()
	{
		return view();
	}

	/**
	*@ 屏蔽词
	*/
	public function systemShielding()
	{
		return view();
	}

	/**
	*@ 屏蔽日志
	*/
	public function systemLog()
	{
		return view();
	}

}
