<?php

//	デプロイ検証用ダミートップ画面
class Controller_Top extends Controller
{
	public function action_index()
	{
		echo "Top";
	}


	//	rootで指定されたアクション
	public function action_hello()
	{
		echo "Hello FuelPHPデプロイ検証環境";
	}
}
