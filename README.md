# Docker-LNMP

Docker-composeを使ったLNMP環境。    
以下のミドルウェアをそれぞれ別コンテナ上に起動し、連携します。
* Nginx
* MySQL
* PHP

## 使い方

* 初回起動

  `$ docker-compose -f ops/docker-compose.yml up --build -d`

* 起動

  `$ docker-compose -f ops/docker-compose.yml up -d`      

* 停止

  `$ docker-compose -f ops/docker-compose.yml down`    

※「ops」ディレクトリに移動していれば「-f」オプションは不要です。
