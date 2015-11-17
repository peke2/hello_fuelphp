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
		echo "Hello FuelPHPデプロイ検証環境<br>";
		echo "更新：2015年11月17日(火) 14:00<br>";
		echo "<br>";
		echo "Capistranoのドキュメントわかりにくい<br>";

		$datetime = date('Y-m-d H:i:s');
		Log::info("アクセス日時={$datetime}");
	}
}
