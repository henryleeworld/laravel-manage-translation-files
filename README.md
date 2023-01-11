# Laravel 9 管理本地化檔案

引入 barryvdh 的 laravel-translation-manager 套件來擴增管理本地化檔案，語系字串存放在 `lang` 資料夾的檔案裡，每個支援的語系都會對應到一個子目錄，將本地化檔案匯入到資料庫，並通過頁面進行編輯。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/translations` 來進行本地化內容編輯。

----

## 畫面截圖
![](https://i.imgur.com/OsTD618.png)
> 發布會將修改的內容套用到本地化檔案