<?php
/****会员管理***/

namespace app\admin\controller;

use think\Controller;

class Member extends Controller
{
	/**
	*@ 会员列表
	*/
	public function memberList()
	{
		return view();
	}

	/**
	*@ 会员列表 添加用户
	*/
	public function memberAdd()
	{
		return view();
	}

	/**
	*@ 会员列表 修改用户信息
	*/
	public function memberEdit()
	{
		return view();
	}

	/**
	*@ 会员列表 修改用户密码
	*/
	public function changePassword()
	{
		return view();
	}

	/**
	*@ 删除的会员
	*/
	public function memberDel()
	{
		return view();
	}

	/**
	*@ 会员 等级管理 空模板
	*/
	public function memberLevel()
	{
		return view();
	}

	/**
	*@ 会员 积分管理 空模板
	*/
	public function memberScoreoperation()
	{
		return view();
	}

	/**
	*@ 会员 浏览记录
	*/
	public function memberRecordBrowse()
	{
		return view();
	}

	/**
	*@ 会员 下载记录
	*/
	public function memberRecordDownload()
	{
		return view();
	}

	/**
	*@ 会员 分享记录
	*/
	public function memberRecordShare()
	{
		return view();
	}

	/**
	*@ 会员 查看
	*/
	public function memberShow()
	{
		return view();
	}

}
