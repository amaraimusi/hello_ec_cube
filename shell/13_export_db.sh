#!/bin/sh

echo '作業ディレクトリ'
pwd

echo "ローカルDBのパスワードを入力してください"
read pw

echo 'SQLをエクスポートします。'
mysqldump -uroot -p$pw --compatible=ansi hello_ec_cube > hello_ec_cube.sql
echo 'エクスポートしました。'

echo 'SQLファイルをサーバーに転送します。'
scp hello_ec_cube.sql amaraimusi@amaraimusi.sakura.ne.jp:www/hello_ec_cube/shell
echo '転送しました。'

echo "------------ 終わり"
cmd /k