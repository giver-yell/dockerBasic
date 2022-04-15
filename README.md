# dockerBasic

## Dockerコマンド

### Build  
`% docker build test`  
- -tでbuldしたDocker imageに名前を付ける  
例)runディレクトリにあるdockerファイルを実行して、dockerfile-run-nginxと名前を付ける  
`% docker build -t dockerfile-run-nginx run`  

### コンテナ操作  
`% docker exec -it mycentos /bin/bash`  

### コピー
- ホスト → コンテナへのコピー  
`% docker cp [ホストファイルのパス] [コンテナ指定]:[コンテナのパス]`  
例）`% docker cp command/sample.txt mycentos:/opt`  
- コンテナ → ホストへのコピー  
`% docker cp [コンテナ指定]:[コンテナファイルのパス] [ホストのパス] `  
例)`% docker cp mycentos:/opt/container.txt /Users/adn21025/dockerBasic`  

### Image
- image確認  
`% docker images`  
- 停止中のコンテナimage削除  
`% docker rmi `   

### 起動、停止
- centOS起動  
`% docker start mycentos`  
- centOS停止  
` docker stop mycentos`  
- centOS再起動  
`% docker restart mycentos`  
- centOSに名前をつけて起動  
`% docker run -it --name mycentos centos:8 /bin/bash`  
- portを指定して起動  
`% docker run --name [コンテナ名] -p [ローカルのポート]:[nginxのポート] nginx:1.16`  
例)`% docker run --name mynginx -p 8080:80 nginx:1.16`  

### 削除
- 停止中のコンテナ削除  
`% docker rm [コンテナID]`  
- 起動中のコンテナを強制削除  
`% docker rm -f mycentos`  

### log
- ログ出力  
`% docker logs mycentos`  
- リアルタイムログ出力
`% docker logs -f mycentos`  

### コンテナにボリュームをマウント（永続化）
`% docker run -v ホストのパス:コンテナのパス イメージ名`  
例)`% docker run -v /Users/adn21025/dockerBasic/test/:/usr/share/nginx/html --name mynginx -p 8080:80 nginx:1.16`  


### トラブルの時など使用頻度が低いコマンド
#### 詳細情報取得
`% docker inspect mycentos`  

#### Docker imageのダウンロード
※pullの後ろに*プライベートイメージレジストリを付けると、DokerHub以外からダウンロードできる  
`% doker pull イメージ名:タグ [レジストリURL]`  
例)`% docker pull php:8.0`  

#### コンテナをイメージ化 → Docker Hub へ Push
`% docker commit コンテナ指定 DockerHubID/イメージ名:タグ`  
- DockerHub にアップ
`% docker push アカウント名/イメージ名`

#### イメージの履歴を確認  
※他人が作ったイメージの中身を知りたい時に使う  
`% docker history イメージ指定`  

## Dockerfile
### COPY と ADD
どちらもファイルをイメージに追加するコマンド  
COPYが推奨  
COPY: ローカルからの追加  
ADD:  ネット経由でも追加できる  

### 参考動画
Udemy 駆け出しエンジニアのためのDocker入門
