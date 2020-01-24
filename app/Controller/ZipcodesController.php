<?php
App::uses('AppController','Controller');
class ZipcodesController extends AppController{

	public function csvupload(){
		$file_temp_name = $this->request->data['Csv']['file']["tmp_name"];
		$file_name      = $this->request->data['Csv']['file']["name"];

		if (is_uploaded_file($file_temp_name)
		  &&
		  ($fp = fopen($file_temp_name,'r')) !== false
		) {
			//トランザクション管理用モデルを呼び出し
			$this->loadModel('TransactionManager');
			//トランザクション開始
			$transaction = $this->TransactionManager->begin();

			try{
					//ファイルの保存先
					$file_path  = Router::url($_SERVER["DOCUMENT_ROOT"].'/files/csv/');
					$file   = $file_path.$file_name;

					if (move_uploaded_file($file_temp_name, $file)) {

						chmod($file, 0777);

						//zipcodesテーブルの中にあるデータを一旦削除
						$truncate  = "TRUNCATE TABLE zipcodes;";
						$this->Zipcode->query($truncate);

						//文字コード設定をUTF-8にする
						$setutf8   = "SET character_set_database=utf8;";
						$this->Zipcode->query($setutf8);

						// csvファイルをUTF-8にする（仮名が半角カナになってしまう）
						$sjis = file_get_contents($file);
						$utf8 = mb_convert_encoding($sjis, 'UTF-8', 'SJIS-win');
						file_put_contents($file, $utf8);

						// DBサーバーへ接続
						$db_link = mysqli_connect( 'localhost', 'root', 'Wata1229!');
						// DBへ接続 (パラメータの順番が違う)
						mysqli_select_db( $db_link, 'blog');
	
						//csvファイルをテーブルに挿入
						$sql       = "LOAD DATA  LOCAL INFILE "."'".$file."' ";
						$sql      .= "INTO TABLE zipcodes ";
						$sql      .= "FIELDS ";
						$sql      .= "TERMINATED BY ',' ";
						$sql      .= "OPTIONALLY ENCLOSED BY "."'".'"'."' ";
						$sql      .= "ESCAPED BY '' ";
						$sql      .= "LINES ";
						$sql      .= "STARTING BY '' ";
						$sql      .= "TERMINATED BY "."'".'\\'.'r\\'.'n'."' ";
						$sql      .= "(jiscode,zipcode_old,zipcode,pref_kana,city_kana,street_kana,pref,city,street,flag1,flag2,flag3,flag4,flag5,flag6)";

						// クエリの実行 (パラメータの順番が違う)
						$data = mysqli_query($db_link, $sql);

						unlink($file_path.$file_name);
						// DBとの接続解除
						mysqli_close($db_link);
						}

						//モデルの処理がすべて上手くいったらコミット
						$this->TransactionManager->commit($transaction);

						//コミットまで終わったらフラッシュで編集の成功を知らせる
						$this->Flash->success(__('CSVファイルは無事、アップロードされました'));
						//indexへリダイレクト
						return $this->redirect(array('action' => 'index'));
						  
			}catch(Exception $e){
				//失敗したらロールバック
				$this->TransactionManager->rollback($transaction);
				//フラッシュで知らせる
				$this->Flash->error(__('Unable to update your post.'));
			}
			}

	}

	public function index(){

		//csvファイルのアップロードボタンが押されたらcsvアップロードアクションが発動する。
		if(!empty($this->request->data['Csv'])){
			debug($this->data);
			$this->csvupload();
		}


	}
}

