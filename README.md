# laravelプロジェクト作成方法
`composer create-project --prefer-dist laravel/laravel app-name`

# apiのルートが認識されない時
コンテナ内で`php artisan install:api`を実行

# 改善点
あらかじめ`php artisan install:api`を実行してくれるようにdockerファイルを変更してみる 
-y必須
タブ、上矢印使えるように

# 参考文献
laravel,mysql接続
https://qiita.com/hitotch/items/2e816bc1423d00562dc2

dbエラー
https://qiita.com/k--f/items/9e9ddf5e17e06d85e3ce

REST API作成手順
https://qiita.com/rockhopper-penguin/items/1c57b1c871f2ca2b69a9

mysqlコンテナ入り方
https://zenn.dev/yuyaamano23/articles/b1033e0c04ffba
