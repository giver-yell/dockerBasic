# dockerBasic

## Dockerコマンド

### Build  
`% docker build test`  

### コンテナ操作  
`% docker exec -it mycentos /bin/bash`  

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

### 削除
- 停止中のコンテナ削除  
`% docker rm [コンテナID]`  
- 起動中のコンテナを強制削除  
`% docker rm -f mycentos`  


### 参考動画
Udemy 駆け出しエンジニアのためのDocker入門
