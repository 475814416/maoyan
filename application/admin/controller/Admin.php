<?php
/**管理员管理***/
namespace app\admin\controller;

use think\Controller;

class Admin extends Controller
{
	/**
	*@ 角色管理
	*/
	public function adminRole()
	{
		return view();
	}

	/**
	*@ 角色管理 添加角色
	*/
	public function adminRoleAdd()
	{
		return view();
	}

	/**
	*@ 角色管理 编辑角色
	*/
	public function adminRoleEdit()
	{
		return view();
	}

	/**
	*@  权限管理
	*/
	public function adminPermission()
	{
		return view();
	}

	/**
	*@  权限管理 添加权限节点 空模板
	*/
	public function adminPermissionAdd()
	{
		return view();
	}

	/**
	*@  权限管理 编辑权限节点 空模板
	*/
	public function adminPermissionEdit()
	{
		return view();
	}

	/**
	*@  管理员列表
	*/
	public function adminList()
	{
		return view();
	}

	/**
	*@  管理员列表 添加管理员
	*/
	public function adminAdd()
	{
		return view();
	}

	/**
	*@  管理员列表 编辑管理员 空模板
	*/
	public function adminEdit()
	{
		return view();
	}

}
