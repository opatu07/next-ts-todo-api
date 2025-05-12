# laravelプロジェクト作成方法
`composer create-project --prefer-dist laravel/laravel app-name`

# apiのルートが認識されない時
コンテナ内で`php artisan install:api`を実行

# 改善点
あらかじめ`php artisan install:api`を実行してくれるようにdockerファイルを変更してみる
-y必須
